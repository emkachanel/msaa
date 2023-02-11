<?php

namespace App\Controllers;
use App\Models\lpModel;
class Home extends BaseController
{
    protected $lpModel;
    public function __construct()
    {
        $this->lpModel = new lpModel();
    }
    public function index()
    {
        $profil = $this->lpModel->getprofil();
        $data = [
            'profil'=>$profil,
        ];
        return view('landpage',$data);
    }
}
