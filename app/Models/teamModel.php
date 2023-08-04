<?php

namespace App\Models;

use CodeIgniter\Model;

class teamModel extends Model
{
    protected $table      = 'teams';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','nama','alamat','kontak','jabatan','bio','poto','facebook','instagram','youtube'];
    public function getteam($id= false)
    {
        
            if ($id == false) {
                return $this->findAll();
            }
            return $this->where(['id' => $id])->first();
        
    }
}
