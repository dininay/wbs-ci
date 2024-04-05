<?php

namespace App\Models;
use CodeIgniter\Model;

class HomeModels extends Model
{
    protected $table = 'data';
    public function getByid($id)
    {
        return $this->db->get_where('data',["id"=> $id])->row();
    }

    public function getDataByid($id)
    {
        return $this->where('id',$id)->first();
    }
}
?>