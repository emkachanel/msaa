<?php

namespace App\Models;

use CodeIgniter\Model;

class serviceModel extends Model
{
    protected $table      = 'service';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id',
        'judul',
        'uraian',
        'gambar'
        
    ];

    public function getservice($id=false)
    {
        if($id==false){
            return $this->findAll();
        }return $this->where(['id'=>$id])->first();
            
       
    }
    
   

}
