<?php

namespace App\Models;

use CodeIgniter\Model;

class portfolioModel extends Model
{
    protected $table      = 'portfolio';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','judul','keterangan','gambar'];
    public function getportfolio($id= false)
    {
        
            if ($id == false) {
                return $this->findAll();
            }
            return $this->where(['id' => $id])->first();
        
    }
}
