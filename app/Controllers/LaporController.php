<?php

namespace App\Controllers;

use App\Models\LaporModels;
use CodeIgniter\Controller;
use CodeIgniter\Files\File;
use Error;
use CodeIgniter\I18n\Time;
use Config\Services;

class LaporController extends Controller
{
    protected $laporModels;

    public function __construct()
    {
        $this->laporModels = new \App\Models\LaporModels();
    }

    public function index()
    {
        return view('home/lapor');
    }

    public function create()
    {
        session();
        $data = [
            'validation' => \Config\Services::validation()
        ];

        return view('home/lapor', $data);
    }

    protected function generateID($gender, $privacy)
    {
        // Mendapatkan tahun dua digit
        $year = substr(Time::now()->getYear(), -2);

        // Mendapatkan angka terakhir dari ID di database, jika ada
        $lastID = $this->laporModels->getMaxID();

        // Jika belum ada data sama sekali, set ID pertama menjadi 0
        if (!$lastID) {
            $lastID = '0';
        }

        // Mendapatkan bagian YYMM dari format ID
        $yearMonth = $year . Time::now()->format('m');

        // Mendapatkan bagian WBS sesuai dengan gender dan privacy
        $wbs = ($gender == 'Laki-laki' ? '1' : '2') . ($privacy == 'Anonymous' ? '1' : '2');

        // Mendapatkan bagian 3 digit terakhir dari ID
        $sequence = str_pad(intval($lastID) + 1, 3, '0', STR_PAD_LEFT);

        // Menggabungkan semua bagian untuk mendapatkan ID yang lengkap
        $id = $yearMonth . '-wbs-' . $wbs . '-' . $sequence;

        return $id;
    }

    public function save()
    {
        $validation = \Config\Services::validation();

        $gender = $this->request->getVar('jk');
        $privacy = $this->request->getVar('sifat_pelapor');
        $id = $this->generateID($gender, $privacy);
        // Ambil file yang diunggah
        $files = $this->request->getFiles('dokumen');

        // Validasi apakah ada file yang diunggah
        if (empty($files)) {
            return redirect()->back()->withInput()->with('errors', 'Anda harus mengunggah setidaknya satu file.');
        }

        $data = []; // Array untuk menampung data yang akan disimpan ke dalam database


        foreach ($files as $file) {
            // Periksa apakah file adalah objek UploadedFile dan apakah valid
            try {
                if ($file instanceof \CodeIgniter\HTTP\Files\UploadedFile) {
                    // Validasi berkas
                    if (!$this->validate([
                        'dokumen' => [
                            'uploaded[dokumen]',
                            'mime_in[dokumen,image/jpg,image/jpeg,image/png,application/pdf]',
                            'max_size[dokumen,4096]', // maksimum 4mb
                        ],
                    ])) {
                        // Jika validasi gagal, kembali ke halaman sebelumnya dengan pesan kesalahan validasi
                        return redirect()->back()->withInput()->with('errors', $validation->getErrors());
                    }

                    // Generate a new file name to avoid conflicts
                    $newName = $file->getRandomName();

                    if (!$file->move(WRITEPATH . 'uploads', $newName)) {
                        // Jika gagal memindahkan file, tangani kesalahan
                        return redirect()->back()->withInput()->with('errors', 'Gagal mengunggah file.');
                    }

                    // Simpan data formulir dan nama file ke dalam database
                    $data = [
                        'id' => $id,
                        'sifat_pelapor' => $privacy,
                        'firstName' => $this->request->getVar('firstName') . ' ' . $this->request->getVar('lastName'),
                        'noIdentitas' => $this->request->getVar('noIdentitas'),
                        'jk' => $gender,
                        'alamat' => $this->request->getVar('alamat'),
                        'email' => $this->request->getVar('email'),
                        'phone' => $this->request->getVar('phone'),
                        'jenisPelanggaran' => $this->request->getVar('jenisPelanggaran'),
                        'firstNameTerlapor' => $this->request->getVar('firstNameTerlapor') . ' ' . $this->request->getVar('lastNameTerlapor'),
                        'divisi' => $this->request->getVar('divisi'),
                        'departemen' => $this->request->getVar('departemen'),
                        'waktu' => $this->request->getVar('waktu'),
                        'lokasi' => $this->request->getVar('lokasi'),
                        'kronologi' => $this->request->getVar('kronologi'),
                        'nominalKerugian' => $this->request->getVar('nominalKerugian'),
                        'dokumen' => $newName,
                        'created_at' => date('Y-m-d H:i:s'), // Tambahkan timestamp created_at
                        'updated_at' => date('Y-m-d H:i:s') // Tambahkan timestamp updated_at
                    ];
                } else {
                    return redirect()->back()->withInput()->with('errors', ['File tidak valid atau tidak diunggah.']);
                }
            } catch (Error) {
            }
        }
        $data['status'] = 'Sedang Ditinjau';
        // Simpan data ke dalam database menggunakan insertBatch()
        $db = \Config\Database::connect();
        $db->table('data')->insertBatch($data);

        // Kirim email otomatis
        $email = \Config\Services::email();
        $email->setTo($this->request->getVar('email'));

        // Subject email
        $emailSubject = 'Re: Konfirmasi Pengiriman Data Pengaduan Whistle Blower System';
        $email->setSubject($emailSubject);

        // Pesan email
        $namaPelapor = $this->request->getVar('firstName') . ' ' . $this->request->getVar('lastName');
        $alamatPelapor = $this->request->getVar('alamat');
        $idPengaduan = $id;
        $dataTerlapor = [
            'namaTerlapor' => $this->request->getVar('firstNameTerlapor') . ' ' . $this->request->getVar('lastNameTerlapor'),
            'divisi' => $this->request->getVar('divisi'),
            'departemen' => $this->request->getVar('departemen'),
            'jenisPelanggaran' => $this->request->getVar('jenisPelanggaran'),
            'waktu' => $this->request->getVar('waktu'),
            'lokasi' => $this->request->getVar('lokasi'),
            'kronologi' => $this->request->getVar('kronologi'),
            'nominalKerugian' => $this->request->getVar('nominalKerugian')
        ];

        $emailBody = "Dear " . ($namaPelapor ? $namaPelapor : 'Anonymous') . ",\n\n";
        $emailBody .= "Terima kasih atas pengaduan yang telah Anda kirimkan dengan detail sebagai berikut:\n\n";
        $emailBody .= "Data Anda,\n";
        $emailBody .= "ID Pengaduan: $idPengaduan\n";
        $emailBody .= "Nama: $namaPelapor\n";
        $emailBody .= "Alamat: $alamatPelapor\n\n";
        $emailBody .= "Data Terlapor,\n";
        $emailBody .= "Nama: " . $dataTerlapor['namaTerlapor'] . "\n";
        $emailBody .= "Divisi: " . $dataTerlapor['divisi'] . "\n";
        $emailBody .= "Departemen: " . $dataTerlapor['departemen'] . "\n";
        $emailBody .= "Jenis Pelanggaran: " . $dataTerlapor['jenisPelanggaran'] . "\n";
        $emailBody .= "Waktu: " . $dataTerlapor['waktu'] . "\n";
        $emailBody .= "Lokasi: " . $dataTerlapor['lokasi'] . "\n";
        $emailBody .= "Kronologi: " . $dataTerlapor['kronologi'] . "\n";
        $emailBody .= "Nominal Kerugian: " . $dataTerlapor['nominalKerugian'] . "\n\n";
        $emailBody .= "Kami memastikan bahwa data Anda akan kami jaga kerahasiaannya. Jika Anda memerlukan informasi lebih lanjut atau memiliki pertanyaan tambahan mengenai data tersebut, jangan ragu untuk menghubungi kami kembali.\n\n";
        $emailBody .= "Proses ini dapat Anda lacak pada halaman utama Whistle Blower System, dengan memasukkan ID pengaduan Anda. Informasi terkait pengaduan akan diperbarui melalui email ini. Data akan ditinjau selama 7 hari kerja sejak Anda mengirimkan data ini.\n\n";
        $emailBody .= "Salam hangat,\n";
        $emailBody .= "Whistle Blower System,\n";
        $emailBody .= "PT. Pesta Pora Abadi.";

        $email->setMessage($emailBody);

        $email->send();

        session()->setFlashdata('pesan','Data berhasil direkam');
        // Redirect ke halaman yang ditentukan setelah berhasil menyimpan data
        return redirect()->to('?success=true');
    }

}