<?php

namespace App\Models;
use CodeIgniter\Model;

class DashboardModels extends Model
{
    protected $table = 'data';


    public function getData()
    {
        return $this->findAll();
    }
    public function getById($id)
    {
        return $this->find($id);
    }

    // public function getDataForChart()
    // {
    //     // Query untuk mengambil data dan menghitung jumlah isi per hari
    //     $query = "SELECT DATE(created_at) as date, COUNT(*) as total FROM $this->table GROUP BY DATE(created_at)";
    //     $result = $this->db->query($query)->getResultArray();

    //     return $result;
    // }
}
?>