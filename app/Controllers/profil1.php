<?php
namespace App\Controllers;
Use App\Models\profilModel;

class profil extends BaseController
{
    protected $profilModel;
    public function __Construct()
    {
        $this->profilModel = new profilModel();
    }

    public function index()
    {
        $profil = $this->profilModel->getprofil();
        $data =['profil'=> $profil,];
        return view('Profil/index',$data);
    
        // session menampilkan pesan
        // if (session()->get('get')==1){
        //     return view('Home/index',$data);
        // }else{
        //     session()->setFlashdata('pesan','silahkan login sebagai admin');
        //     return redirect()->to("Home");
        // }
    }
    // fungsi ke form edit
    public function edit($id)
    {
        $profil = $this->profilModel->getprofil($id);
        $data = [
            'profil'=>$profil
        ];
        return view('profil/edit',$data);
    }

    // prosess simpan hasil edit atau update
    public function update($id)
    {
        $filelogo = $this->request->getfile('logo');
        $namalogo = $this->request->getname();

        if(!empty($namalogo)) {
            $filelogo->move('assets/img');
            
        }else {
            $namalogo=$this->request->getVar('logolama');
        }

        $save = new profilModel();
        $data = ([
            'comp_name'=>$this->request->getVar('comp_name'),
            'addres'=>$this->request->getVar('addres'),
            'telp'=>$this->request->getVar('telp'),
            'email'=>$this->request->getVar('email'),
            'whatsapp'=>$this->request->getVar('whatsapp'),
            'facebook'=>$this->request->getVar('facebook'),
            'whatsapp'=>$this->request->getVar('whatsapp'),
            'instagram'=>$this->request->getVar('instagram'),
            'visi'=>$this->request->getVar('visi'),
            'misi'=>$this->request->getVar('misi'),
            'about'=>$this->request->getVar('about'),
            'logo'=>$namalogo
        ]);
        $save->update($id,$data);
        session()->setFlashdata('pesan','update berhasil');
        return redirect()->to('profil');
    }
   
}
