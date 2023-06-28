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

    public function update($id)
    {

        
            $profil=$this->lpModel->getprofil($id);
            $data=[
                'profil' => $profil
            ];
           
        
        // $filelogo = $this->request->getfile('logo');
        // $namalogo = $filelogo->getname();

        // if(!empty($namalogo)){
        //     $filelogo->move('assets/img/logo');
        // }else {
        //     $namalogo=$this->request->getVar('logolama');
        // }

        $save = new lpModel();
        $data = [
            'namalembaga'=>$this->request->getVar('comp_name'),
                'email'=>$this->request->getVar('email'),
                'telp'=>$this->request->getVar('telp'),
                'alamat'=>$this->request->getVar('alamat'),
                'telp'=>$this->request->getVar('telp'), 
                'whatsapp'=>$this->request->getVar('whatsapp'), 
               

        ];
        $save->update($id,$data);
        session()->setFlashdata('pesan','Data Berhasil Di UPDATE');
        return redirect()->to('profil');
    }

    // portfolio
    public function simpan()
    {
        $filegambar = $this->request->getFile('ficture');
        $filegambar->move('assets/img/portfolio');
        $namagambar = $filegambar->getName();

        $save = new portfolioModel();
        $save->insert(
            [
                'name' => $this->request->getVar('name'),
                'title' => $this->request->getVar('title'),
                'ficture' => $namagambar

            ]
        );
    session()->setFlashdata('pesan','porfolio berhasil di tambah');
        return redirect()->to('admin');
    }

}
