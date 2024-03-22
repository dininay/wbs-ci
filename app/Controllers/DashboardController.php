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
        $data = [
            'data' => $this->laporModels->paginate(10), // Menampilkan 10 data per halaman
            'pager' => $this->laporModels->pager
        ];

        return view('dashboard/dataLapor', $data);
    }

}
