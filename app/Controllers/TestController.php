<?php

namespace App\Controllers;

use App\Models\LaporModels; // Gantilah YourModel dengan nama model Anda

class TestController extends BaseController
{
    public function testDatabaseConnection()
    {
        // Menggunakan model untuk mengambil data dari database
        $model = new LaporModels(); // Ganti YourModel dengan nama model Anda
        $data = $model->findAll(); // Contoh operasi mendapatkan semua data dari tabel

        // Tampilkan data dalam view atau hanya var_dump jika ingin melihat hasilnya
        var_dump($data);
    }
}
