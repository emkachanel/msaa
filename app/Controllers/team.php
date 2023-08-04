<?php

namespace App\Controllers;
use App\Models\teamModel;

class team extends BaseController
{
    protected $teamModel;
    public function __construct()
    {
        $this->teamModel = new teamModel();
        
    }

    public function index()
    
    {
      
        $team = $this->teamModel->getteam();
      
        $data =[
            'team' => $team,
          
        ];
        if(session()->get('level')== 0){
     
        return view('team/index', $data);
        }else{
            session()->setFlashdata('pesan', 'Silahkan Login sebagai admin');
            return redirect()->to("team");

        }
    
    }

    public function tambahteam()
    {
       
        $filegambar =$this->request->getFile('logo');
        $filegambar->move('assets/img/team');
        $namagambar = $filegambar->getName();
        
            $save = new teamModel();
            $save->insert(
            [
                'nama'=>$this->request->getVar('nama'),
                'bio'=>$this->request->getVar('bio'),
                'alamat'=>$this->request->getVar('alamat'),
                'kontak'=>$this->request->getVar('kontak'),
                'facebook'=>$this->request->getVar('facebook'),
                'instagram'=>$this->request->getVar('instagram'),
                'youtube'=>$this->request->getVar('youtube'),
                'poto'=>$namagambar
                 
            ]);
            session()->setFlashdata('pesan','data berhasil di tambah');
        return redirect()->to('team');
    }

    public function edit($id)
    {
        $team = $this->teamModel->getteam($id);
        $data = [
            'team'=> $team,
           
        ];
       
        
        return view('team/edit',$data);
    }

    public function update($id)
    {
        // Dapatkan file dan namanya
        $filegambar = $this->request->getFile('poto');
        $namagambar = $filegambar->getName();
    
        // Periksa apakah file baru telah diunggah
        if(!empty($namagambar)){
            $filegambar->move('assets/img/team/');
        } else {
            // Jika tidak ada file baru yang diunggah, gunakan nama file lama
            $namagambar = $this->request->getVar('gambar_lama');
        }
    
        $save = new teamModel();
        $data=[
            'nama'=>$this->request->getVar('nama'),
            'bio'=>$this->request->getVar('bio'),
            'alamat'=>$this->request->getVar('alamat'),
            'kontak'=>$this->request->getVar('kontak'),
            'facebook'=>$this->request->getVar('facebook'),
            'instagram'=>$this->request->getVar('instagram'),
            'youtube'=>$this->request->getVar('youtube'),
            'poto'=>$namagambar
         
        ];
        $save->update($id,$data);
        session()->setFlashdata('pesan','data berhasil di update');
        return redirect()->to('team');
        // return view('team/index',$data);
    }

    public function delete ($id)
    {
        $team=$this->teamModel->find($id);
        unlink('assets/img/team/'.$team['poto']);
        $this->teamModel->delete($id);
        session()->setFlashdata('pesan','team berhasil di hapus');
        return redirect()->to('team');
    }


}