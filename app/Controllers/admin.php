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
    public function portfolio_save()
    {
        $filegambar = $this->request->getFile('gambar');
        $filegambar->move('assets/img/portfolio');
        $namagambar = $filegambar->getName();

        $save = new portfolioModel();
        $save->insert(
            [
                'judul' => $this->request->getVar('judul'),
                'isi' => $this->request->getVar('isi'),
                'gambar' => $namagambar

            ]
        );
        dd('gambar');
    session()->setFlashdata('pesan','porfolio berhasil di tambah');
        return redirect()->to('admin');
    }
}
