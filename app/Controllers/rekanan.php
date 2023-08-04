<?php

namespace App\Controllers;
use App\Models\rekananModel;

class rekanan extends BaseController
{
    protected $rekananModel;
    public function __construct()
    {
        $this->rekananModel = new rekananModel();
        
    }

    public function index()
    
    {
      
        $rekanan = $this->rekananModel->getrekanan();
      
        $data =[
            'rekanan' => $rekanan,
          
        ];
        if(session()->get('level')== 0){
     
        return view('rekanan/index', $data);
        }else{
            session()->setFlashdata('pesan', 'Silahkan Login sebagai admin');
            return redirect()->to("rekanan");

        }
    
    }

    public function tambahrekanan()
    {
       
        $filegambar =$this->request->getFile('logo');
        $filegambar->move('assets/img/rekanan');
        $namagambar = $filegambar->getName();
        
            $save = new rekananModel();
            $save->insert(
            [
                'pimpinan'=>$this->request->getVar('pimpinan'),
                'nama_perusahaan'=>$this->request->getVar('nama_perusahaan'),
                'alamat'=>$this->request->getVar('alamat'),
                'kontak'=>$this->request->getVar('kontak'),
                'ket'=>$this->request->getVar('ket'),
                'logo'=>$namagambar
                 
            ]);
            session()->setFlashdata('pesan','data berhasil di tambah');
        return redirect()->to('rekanan');
    }

    public function edit($id)
    {
        $rekanan = $this->rekananModel->getrekanan($id);
        $data = [
            'rekanan'=> $rekanan,
           
        ];
       
        
        return view('rekanan/edit',$data);
    }

    public function update($id)
    {
        // Dapatkan file dan namanya
        $filegambar = $this->request->getFile('logo');
        $namagambar = $filegambar->getName();
    
        // Periksa apakah file baru telah diunggah
        if(!empty($namagambar)){
            $filegambar->move('assets/img/rekanan/');
        } else {
            // Jika tidak ada file baru yang diunggah, gunakan nama file lama
            $namagambar = $this->request->getVar('gambar_lama');
        }
    
        $save = new rekananModel();
        $data=[
            'pimpinan' => $this->request->getVar('pimpinan'),
            'nama_perusahaan' => $this->request->getVar('nama_perusahaan'),
            'alamat' => $this->request->getVar('alamat'),
            'kontak' => $this->request->getVar('kontak'),
            'ket' => $this->request->getVar('ket'),
            // 'logo' => $this->request->getVar('logo'),
            'logo' => $namagambar
        ];
        $save->update($id,$data);
        session()->setFlashdata('pesan','data berhasil di update');
        return redirect()->to('rekanan');
        // return view('rekanan/index',$data);
    }

    public function delete ($id)
    {
        $rekanan=$this->rekananModel->find($id);
        unlink('assets/img/rekanan/'.$rekanan['logo']);
        $this->rekananModel->delete($id);
        session()->setFlashdata('pesan','rekanan berhasil di hapus');
        return redirect()->to('rekanan');
    }


}