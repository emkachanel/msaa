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
        $filelogo = $this->request->getFile('logo');
        $namalogo = $filelogo->getName();

        if (!empty($namalogo)) {
            $filelogo->move('assets/img');
        } else {
            $namalogo = $this->request->getVar('logolama');
        }

        $data = [
            'nama' => $this->request->getVar('nama'),
            'uraian' => $this->request->getVar('uraian'),
            'judul' => $this->request->getVar('judul'),
            'isi' => $this->request->getVar('isi'),
            'logo' => $namalogo
        ];

        $this->serviceModel->update($id, $data);

        session()->setFlashdata('pesan', 'Update berhasil');
        return redirect()->to('service');
    }
}
