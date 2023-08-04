<?php

namespace App\Controllers;

use App\Models\ProfilModel;

class Profil extends BaseController
{
    protected $profilModel;

    public function __construct()

    {
        $this->profilModel = new ProfilModel();
       
      

    }

    public function index()
    {
        $profil = $this->profilModel->getprofil();
        $data = [
            'profil' => $profil
        ];
        return view('Profil/index', $data);
    }

    public function edit($id)
    {
        $profil = $this->profilModel->getprofil($id);
        $data = [
            'profil' => $profil
        ];
        return view('profil/edit', $data);
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
            'comp_name' => $this->request->getVar('comp_name'),
            'addres' => $this->request->getVar('addres'),
            'telp' => $this->request->getVar('telp'),
            'email' => $this->request->getVar('email'),
            'whatsapp' => $this->request->getVar('whatsapp'),
            'facebook' => $this->request->getVar('facebook'),
            'instagram' => $this->request->getVar('instagram'),
            'visi' => $this->request->getVar('visi'),
            'misi' => $this->request->getVar('misi'),
            'about' => $this->request->getVar('about'),
            'logo' => $namalogo
        ];

        $this->profilModel->update($id, $data);

        session()->setFlashdata('pesan', 'Update berhasil');
        return redirect()->to('profil');
    }
}
