<?php

namespace App\Controllers;

use App\Models\DashboardModels;
use CodeIgniter\Controller;
use App\Models\LaporModels;

class DashboardController extends BaseController
{
    protected $dashboardModels;
    protected $laporModels;

    public function __construct()
    {
        $this->dashboardModels = new DashboardModels();
        $this->laporModels = new LaporModels();
    }
    
    public function index()
    {
        $dashboardData = $this->dashboardModels->getData(); 
        $data['dashboardData'] = $dashboardData;

        return view('dashboard/index', $data);
    }

    public function dataLapor()
    {
        $currentPage = $this->request->getVar('dataLapor') ? $this->request->getVar('dataLapor') : 1;

        $data = [
            'data' => $this->dashboardModels->paginate(10, 'data'), // Menampilkan 10 data per halaman
            'pager' => $this->dashboardModels->pager,
            'currentPage' => $currentPage
        ];

        return view('dashboard/dataLapor', $data);
    }

    public function search()
    {
        $keyword = $this->request->getPost('keyword');
        $lapor = $this->dashboardModels->search($keyword);

        $data = [
            'data' => $lapor->getResult(), // Mengambil hasil pencarian
        ];

        return view('dashboard/dataLapor', $data);
    }

    public function delete($id)
    {
        $this->laporModels->delete($id);
        return redirect()->to('/dashboard/dataLapor');
    }

    public function edit($id){
        $data['data'] = $this->laporModels->find($id);

        return view('/dashboard/editdataLapor', $data);
    }

    public function update($id)
    {
        // Validasi ID
        if (empty($id)) {
            return redirect()->back()->withInput()->with('errors', 'ID tidak valid.');
        }

        // Validasi data yang diterima dari form
        $validation = \Config\Services::validation();
        if (!$this->validate([
            // Sesuaikan dengan aturan validasi yang Anda butuhkan
            'status' => 'required|in_list[Sedang ditinjau,Dalam proses penyelidikan,Laporan disetujui,Laporan selesai]'
            // Tambahkan validasi untuk field lainnya
        ])) {
            // Jika validasi gagal, kembali ke halaman sebelumnya dengan pesan kesalahan validasi
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Ambil data dari form
        $data = [
            'status' => $this->request->getVar('status'),
            // Ambil dan tambahkan field lainnya sesuai kebutuhan
        ];

        // Update data dalam database
        $this->laporModels->update($id, $data);

        // Redirect kembali ke halaman dashboard setelah pembaruan data
        return redirect()->to(base_url('dashboard/dataLapor'))->with('success', 'Status berhasil diperbarui.');
    }
    public function detail($id){
        $data['data'] = $this->laporModels->find($id);

        return view('/dashboard/detaildataLapor', $data);
    }
}
