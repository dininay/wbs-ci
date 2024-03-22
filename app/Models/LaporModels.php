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

    protected $allowedFields = ['sifat_pelapor', 'firstName', 'lastName', 'noIdentitas', 'jk', 'alamat', 'email', 'phone', 'jenisPelanggaran', 'firstNameTerlapor', 'lastNameTerlapor', 'divisi', 'departemen', 'waktu', 'lokasi', 'kronologi', 'nominalKerugian', 'dokumen'];

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
