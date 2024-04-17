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
        $model = new dashboardModels(); // Ganti YourModel dengan nama model Anda

        $total = $this->getTotalReports($model);
        $genderData = $this->getGenderData($model);
        $reportTypeData = $this->getReportTypeData($model);
        $dataPerDay = $this->getDataPerDay($model);
        $dataPerMonth = $this->getDataPerMonth($model);
        $dataPerYear = $this->getDataPerYear($model);

        return view('/dashboard/index', [
            'total' => $total,
            'genderData' => $genderData,
            'reportTypeData' => $reportTypeData,
            'dataPerDay' => $dataPerDay,
            'dataPerMonth' => $dataPerMonth,
            'dataPerYear' => $dataPerYear
        ]);
    }

    protected function getTotalReports($model)
    {
        return $model->countAll();
    }

    protected function getGenderData($model)
    {
        return $model->select('jk, COUNT(*) as total')->groupBy('jk')->findAll();
    }

    protected function getReportTypeData($model)
    {
        return $model->select('sifat_pelapor, COUNT(*) as total')->groupBy('sifat_pelapor')->findAll();
    }

    protected function getDataPerDay($model)
    {
        return $model->select("DATE_FORMAT(created_at, '%Y-%m-%d') AS date, COUNT(*) AS total")
                    ->groupBy("DATE_FORMAT(created_at, '%Y-%m-%d')")
                    ->findAll();
    }

    protected function getDataPerMonth($model)
    {
        return $model->select("DATE_FORMAT(created_at, '%Y-%m') AS date, COUNT(*) AS total")
                    ->groupBy("DATE_FORMAT(created_at, '%Y-%m')")
                    ->findAll();
    }

    protected function getDataPerYear($model)
    {
        return $model->select("DATE_FORMAT(created_at, '%Y') AS date, COUNT(*) AS total")
                    ->groupBy("DATE_FORMAT(created_at, '%Y')")
                    ->findAll();
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
        $id=$this->request->getPost('_method');
        //model initialize
        $postModel = new laporModels();

        $post = $postModel->find($id);

        if($post) {
            $postModel->delete($id);

            //flash message
            session()->setFlashdata('message', 'Post Berhasil Dihapus');

            return redirect()->to(base_url('/dashboard/dataLapor'));
        }
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
