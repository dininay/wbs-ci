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
}
?>