<?php

namespace App\Models;

use CodeIgniter\Model;

class portfolioModel extends Model
{
    protected $table      = 'portfolio';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id',
        'name',
        'title',
        'ficture',
        
    ];

    public function getdata($id=false)
    {
        if($id==false){
            return $this->findAll();
        }return $this->where(['id'=>$id])->first();
            
       
    }
    
   

}
