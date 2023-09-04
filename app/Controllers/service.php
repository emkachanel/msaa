<?php

namespace App\Controllers;

use App\Models\serviceModel;

class service extends BaseController
{
    protected $serviceModel;

    public function __construct()

    {
        $this->serviceModel = new serviceModel();
      
      

    }

    public function index()
    {
        $service = $this->serviceModel->getservice();
        $data = [
            'service' => $service
        ];
        return view('service/index', $data);
    }

    public function tambahservice()
    {
       
        $filegambar =$this->request->getFile('gambar');
        $filegambar->move('assets/img/service');
        $namagambar = $filegambar->getName();
        
            $save = new serviceModel();
            $save->insert(
            [
                
                'judul'=>$this->request->getVar('judul'),
                'uraian'=>$this->request->getVar('uraian'),
                'gambar'=>$namagambar,
                 
            ]);
            session()->setFlashdata('pesan','data berhasil di tambah');
        return redirect()->to('service');
    }

    public function edit($id)
    {
        $service = $this->serviceModel->getservice($id);
        $data = [
            'service' => $service
        ];
        return view('service/edit', $data);
    }

    public function update($id)
    {
        $filegambar = $this->request->getFile('gambar');
        $namagambar = $filegambar->getName();

        if (!empty($namagambar)) {
            $filegambar->move('assets/img');
        } else {
            $namagambar = $this->request->getVar('gambarlama');
        }

        $data = [
            
            'uraian' => $this->request->getVar('uraian'),
            'judul' => $this->request->getVar('judul'),
            
            'gambar' => $namagambar
        ];

        $this->serviceModel->update($id, $data);

        session()->setFlashdata('pesan', 'Update berhasil');
        return redirect()->to('service');
    }
    public function delete ($id)
    {
        $service=$this->serviceModel->find($id);
        unlink('assets/img/service/'.$service['gambar']);
        $this->serviceModel->delete($id);
        session()->setFlashdata('pesan','Layanan berhasil di hapus');
        return redirect()->to('service');
    }
}
