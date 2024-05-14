<?php
namespace App\Models;
use CodeIgniter\Model;

class LaporModels extends Model
{
    protected $table = 'data';
    protected $primaryKey = 'id';

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $allowedFields = ['id','sifat_pelapor', 'firstName', 'lastName', 'noIdentitas', 'jk', 'alamat', 'email', 'phone', 'jenisPelanggaran', 'firstNameTerlapor', 'lastNameTerlapor', 'divisi', 'departemen', 'waktu', 'lokasi', 'kronologi', 'nominalKerugian', 'dokumen', 'cerita', 'status', 'catatan', 'created_at','updated_at'];

    public function getMaxID()
    {
    return $this->db->table('data')->selectMax('id')->get()->getRowArray()['id'];
    }

    public function isIDExists($id)
    {
        $result = $this->db->table('data')->where('id', $id)->countAllResults();
        return $result > 0;
    }

    public function isDuplicateID($id)
    {
        $query = $this->where('id', $id)
                      ->countAllResults();

        return $query > 0;
    }

    public function getData()
    {
        return $this->findAll();
    }
    public function getById($id)
    {
        return $this->find($id);
    }
    public function getAll()
    {
        return $this->findAll();
    }
}
?>
