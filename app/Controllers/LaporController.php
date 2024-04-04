<?php

namespace App\Controllers;

use App\Models\LaporModels;
use CodeIgniter\Controller;
use CodeIgniter\Files\File;
use Error;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\Response;
use CodeIgniter\HTTP\ResponseInterface;
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

        // Mendapatkan bagian YYMM dari format ID
        $yearMonth = $year . Time::now()->format('m');

        // Mendapatkan bagian WBS sesuai dengan gender dan privacy
        $wbs = ($gender == 'Laki-Laki' ? '1' : '2') . ($privacy == 'Anonymous' ? '1' : '2');

        // Mendapatkan ID terakhir dari model
        $lastID = $this->laporModels->getMaxID();
        
        // Jika tidak ada ID sebelumnya, gunakan 001
        if (!$lastID) {
            return $yearMonth . '-WBS-' . $wbs . '-001';
        }
        
        // Mendapatkan bagian 3 digit terakhir dari ID
        $lastSequence = intval(substr($lastID, -3)); // Ambil tiga angka terakhir dan ubah ke integer
        $nextSequence = $lastSequence + 1;
        
        // Menggabungkan semua bagian untuk mendapatkan ID yang lengkap
        $newID = $yearMonth . '-WBS-' . $wbs . '-' . str_pad($nextSequence, 3, '0', STR_PAD_LEFT); // Pad dengan nol jika perlu

        while ($this->laporModels->isIDExists($newID)) {
        $nextSequence++; // Tambahkan sequence
        $newID = $yearMonth . '-WBS-' . $wbs . '-' . str_pad($nextSequence, 3, '0', STR_PAD_LEFT); // Buat ID baru
        }
        
        return $newID;
    }

    public function save()
    {
        $validation = \Config\Services::validation();

        $gender = $this->request->getVar('jk');
        $privacy = $this->request->getVar('sifat_pelapor');
        $id = $this->generateID($gender, $privacy);

        $fileNames = [];
        if ($this->request->getMethod() == 'post') {
            $files = $this->request->getFileMultiple('dokumen');
            foreach($files['dokumen'] as $dkm){
                if($dkm->isValid() && !$dkm->hasMoved()){
                    $fileName = $dkm->getRandomName();
                    if($dkm->move(WRITEPATH.'uploads')){
                        $fileNames[] = $fileName;
                        echo "<p>".$dkm->getName()."sukses </p>";
                    } else {
                        echo "<p>".$dkm->getErrorString()."</p>";
                    }
                }
            }
        }
        
        var_dump($fileNames);
        $dokumenString = implode(', ', $fileNames);
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
            'dokumen' => $dokumenString,
            'status' => 'Sedang Ditinjau',
            'catatan' => '',
            'created_at' => date('Y-m-d H:i:s'), // Tambahkan timestamp created_at
            'updated_at' => date('Y-m-d H:i:s') // Tambahkan timestamp updated_at
        ];
        //Simpan data ke dalam database menggunakan insertBatch()
        $db = \Config\Database::connect();
        $db->table('data')->insert($data);
        var_dump($data);

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

        // session()->setFlashdata('pesan','Data berhasil direkam');
        // Redirect ke halaman yang ditentukan setelah berhasil menyimpan data
        session()->setFlashdata('success_modal', true);
        session()->setFlashdata('insert_id', $id);
        return redirect()->to('');
    }

}