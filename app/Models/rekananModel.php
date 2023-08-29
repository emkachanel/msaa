<?php

namespace App\Models;

use CodeIgniter\Model;

class rekananModel extends Model
{
    protected $table      = 'rekanan';
    protected $primaryKey = 'id';
    protected $allowedFields = [
    'id',
    'pimpinan',
    'nama_perusahaan',
    'alamat',
    'kontak',
    'ket',
    'logo'
];
    public function getrekanan($id= false)
    {
        
            if ($id == false) {
                return $this->findAll();
            }
            return $this->where(['id' => $id])->first();
        
    }
}
