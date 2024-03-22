<?php

namespace App\Models;
use CodeIgniter\Model;

class HomeModels extends Model
{
    protected table
    public function getByid($id)
    {
        return $this->db->get_where('data',["id"=> $id])->row();
    }
}
?>