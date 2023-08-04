<?php

namespace App\Models;

use CodeIgniter\Model;

class profilModel extends Model
{
    protected $table      = 'lp';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id',
        'comp_name',
        'visi',
        'misi',
        'about',
        'addres',
        'telp',
        'email',
        'logo',
        'facebook',
        'whatsapp',
        'instagram'
    ];

    public function getprofil($id=false)
    {
        if($id==false){
            return $this->findAll();
        }return $this->where(['id'=>$id])->first();
            
       
    }
    
   

}
