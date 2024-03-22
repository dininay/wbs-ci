<?php

namespace App\Controllers;

use App\Models\LaporModels; 
use CodeIgniter\Controller;

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

    public function save()
    {
        $validation = \Config\Services::validation();

        // Ambil file yang diunggah
        $files = $this->request->getFiles('dokumen');

        // Validasi apakah ada file yang diunggah
        if (empty($files)) {
            return redirect()->back()->withInput()->with('errors', ['Anda harus mengunggah setidaknya satu file.']);
        }

        foreach ($files as $file) {
            // Periksa apakah file adalah objek UploadedFile dan apakah valid
            if ($file instanceof \CodeIgniter\HTTP\Files\UploadedFile && $file->isValid()) {
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
                $newName = $file->getClientName();

                // Pindahkan file ke lokasi yang diinginkan
                if (!$file->move(WRITEPATH . 'uploads', $newName)) {
                    // Jika gagal memindahkan file, tangani kesalahan
                    return redirect()->back()->withInput()->with('errors', ['Gagal mengunggah file.']);
                }

                // Simpan data formulir dan nama file ke dalam database
              
                
            } else {
                // Jika file tidak diunggah atau tidak valid, lanjutkan ke file berikutnya
                continue;
            }
        }

        $data = [
            'sifat_pelapor' => $this->request->getVar('sifat_pelapor'),
            'firstName' => $this->request->getVar('firstName') . ' ' . $this->request->getVar('lastName'),
            'noIdentitas' => $this->request->getVar('noIdentitas'),
            'jk' => $this->request->getVar('jk'),
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
            // 'dokumen' => $newName
        ];
        // Redirect ke halaman yang ditentukan setelah berhasil menyimpan data
        return redirect()->to('');
    }
}

