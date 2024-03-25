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

    protected $allowedFields = ['id','sifat_pelapor', 'firstName', 'lastName', 'noIdentitas', 'jk', 'alamat', 'email', 'phone', 'jenisPelanggaran', 'firstNameTerlapor', 'lastNameTerlapor', 'divisi', 'departemen', 'waktu', 'lokasi', 'kronologi', 'nominalKerugian', 'dokumen','status','created_at','updated_at'];

    public function getMaxID()
    {
        // Query untuk mendapatkan nilai maksimum ID
        $result = $this->db->query('SELECT id FROM data ORDER BY id DESC LIMIT 1')->getRow();

    // Jika tidak ada data, kembalikan 0
    if (!$result) {
        return 0;
    }

    // Mendapatkan bagian 3 digit terakhir dari ID
    $lastID = intval(substr($result->id, -3));

        // Mengembalikan nilai maksimum ID
        return $lastID;
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
