<?php

namespace App\Controllers;
use App\Models\bannerModel;

class banner extends BaseController
{
    protected $bannerModel;
    public function __construct()
    {
        $this->bannerModel = new bannerModel();
        
    }

    public function index()
    
    {
      
        $banner = $this->bannerModel->getbanner();
      
        $data =[
            'banner' => $banner,
          
        ];
        if(session()->get('level')== 0){
     
        return view('banner/index', $data);
        }else{
            session()->setFlashdata('pesan', 'Silahkan Login sebagai admin');
            return redirect()->to("Home");

        }
    
    }

    public function tambahbanner()
    {
       
        $filegambar =$this->request->getFile('gambar');
        $filegambar->move('assets/img/banner');
        $namagambar = $filegambar->getName();
        
            $save = new bannerModel();
            $save->insert(
            [
                'judul'=>$this->request->getVar('judul'),
                'ket'=>$this->request->getVar('ket'),
                'gambar'=>$namagambar
                 
            ]);
            session()->setFlashdata('pesan','data berhasil di tambah');
        return redirect()->to('banner');
    }

    public function edit($id)
    {
        $banner = $this->bannerModel->getbanner($id);
        $data = [
            'banner'=> $banner,
           
        ];
       
        
        return view('banner/edit',$data);
    }

    public function update($id)
    {
        // Dapatkan file dan namanya
        $filegambar = $this->request->getFile('gambar');
        $namagambar = $filegambar->getName();
    
        // Periksa apakah file baru telah diunggah
        if(!empty($namagambar)){
            $filegambar->move('assets/img/banner/');
        } else {
            // Jika tidak ada file baru yang diunggah, gunakan nama file lama
            $namagambar = $this->request->getVar('gambar_lama');
        }
    
        $save = new bannerModel();
        $data=[
            'judul' => $this->request->getVar('judul'),
            'ket' => $this->request->getVar('ket'),
            'gambar' => $namagambar
        ];
        $save->update($id,$data);
        session()->setFlashdata('pesan','data berhasil di update');
        return redirect()->to('banner');
        // return view('banner/index',$data);
    }

    public function delete ($id)
    {
        $banner=$this->bannerModel->find($id);
        unlink('assets/img/banner/'.$banner['gambar']);
        $this->bannerModel->delete($id);
        session()->setFlashdata('pesan','banner berhasil di hapus');
        return redirect()->to('banner');
    }


}