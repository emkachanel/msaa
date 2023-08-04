<?php

namespace App\Controllers;
use App\Models\portfolioModel;

class portfolio extends BaseController
{
    protected $portfolioModel;
    public function __construct()
    {
        $this->portfolioModel = new portfolioModel();
        
    }

    public function index()
    
    {
      
        $portfolio = $this->portfolioModel->getportfolio();
      
        $data =[
            'portfolio' => $portfolio,
          
        ];
        if(session()->get('level')== 0){
     
        return view('portfolio/index', $data);
        }else{
            session()->setFlashdata('pesan', 'Silahkan Login sebagai admin');
            return redirect()->to("portfolio");

        }
    
    }

    public function tambahportfolio()
    {
       
        $filegambar =$this->request->getFile('gambar');
        $filegambar->move('assets/img/portfolio');
        $namagambar = $filegambar->getName();
        
            $save = new portfolioModel();
            $save->insert(
            [
                'judul'=>$this->request->getVar('judul'),
                'ket'=>$this->request->getVar('ket'),
                'gambar'=>$namagambar
                 
            ]);
            session()->setFlashdata('pesan','data berhasil di tambah');
        return redirect()->to('portfolio');
    }

    public function edit($id)
    {
        $portfolio = $this->portfolioModel->getportfolio($id);
        $data = [
            'portfolio'=> $portfolio,
           
        ];
       
        return view('portfolio/edit',$data);
    }

    public function update($id)
    {
        // Dapatkan file dan namanya
        $filegambar = $this->request->getFile('gambar');
        $namagambar = $filegambar->getName();
    
        // Periksa apakah file baru telah diunggah
        if(!empty($namagambar)){
            $filegambar->move('assets/img/portfolio/');
        } else {
            // Jika tidak ada file baru yang diunggah, gunakan nama file lama
            $namagambar = $this->request->getVar('gambar_lama');
        }
    
        $save = new portfolioModel();
        $data=[
            'judul' => $this->request->getVar('judul'),
            'ket' => $this->request->getVar('ket'),
            'gambar' => $namagambar
        ];
        $save->update($id,$data);
        session()->setFlashdata('pesan','data berhasil di update');
        return redirect()->to('portfolio');
        // return view('portfolio/index',$data);
    }

    public function delete ($id)
    {
        $portfolio=$this->portfolioModel->find($id);
        unlink('assets/img/portfolio/'.$portfolio['gambar']);
        $this->portfolioModel->delete($id);
        session()->setFlashdata('pesan','portfolio berhasil di hapus');
        return redirect()->to('portfolio');
    }


}