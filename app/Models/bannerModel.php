<?php

namespace App\Models;

use CodeIgniter\Model;

class bannerModel extends Model
{
    protected $table      = 'banner';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','judul','ket','gambar'];
    public function getbanner($id= false)
    {
        
            if ($id == false) {
                return $this->findAll();
            }
            return $this->where(['id' => $id])->first();
        
    }
}
