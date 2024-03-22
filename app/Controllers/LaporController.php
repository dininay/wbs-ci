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

    foreach ($files as $file) {
        // Pastikan elemen adalah objek file sebelum memanggil metode isValid()
        if ($file->isValid() && !$file->hasMoved()) {
            // Validasi file
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
            $file->move(WRITEPATH . 'uploads', $newName);

            // Simpan data formulir dan nama file ke dalam database
            $this->laporModels->insert([
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
                'dokumen' => $newName
            ]);
            
        } else {
            // Jika file tidak diunggah atau ada masalah, lanjutkan loop ke file berikutnya
            continue;
        }
        print_r($data);
    }

    // Redirect ke halaman yang ditentukan setelah berhasil menyimpan data
    return redirect()->to('');
}

}

