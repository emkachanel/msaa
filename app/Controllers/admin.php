<?php

namespace App\Controllers;
use App\Models\lpModel;
use App\Models\portfolioModel;
class admin extends BaseController
{
    protected $lpModel;
    protected $portfolioModel;
    public function __construct()
    {
        $this->lpModel = new lpModel();
        $this->portfolioModel = new portfolioModel();
    }
    public function index()
    {
        $profil = $this->lpModel->getprofil();
        $portfolio = $this->portfolioModel->getdata();
        $data = [
            'profil'=>$profil,
            'portfolio'=>$portfolio
        ];
        return view('admin/index',$data);
    }

    // portfolio
public function portfolio_create()
{
    return view('portfolio/form');
}
    public function portfolio_save()
    {
        $file = $this->request->getfile('ficture');
        $file->Move ('assets/img/portfolio');
        $ficturename= $file->getname();
        $save= new portfolioModel();
        $save->insert(
            [
                'name'=>$this->request->getvar('name'),
                'title'=>$this->request->getvar('title'),
                'ficture'=>$ficturename
            ]
        );
        session()->setflashdata('pesan',' Add succes');
        return redirect()->to('admin');
    }
}
