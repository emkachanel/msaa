<?php

namespace App\Controllers;
use App\Models\lpModel;
use App\Models\bannerModel;
use App\Models\portfolioModel;
use App\Models\profilModel;
use App\Models\rekananModel;
use App\Models\serviceModel;
use App\Models\teamModel;
class Home extends BaseController
{
    protected $lpModel;
   
    protected $bannerModel;
    protected $portfolioModel;
    protected $profilModel;
    protected $rekananModel;
    protected $serviceModel;
    protected $teamModel;
    public function __construct()
    {
        $this->lpModel = new lpModel();
        $this->bannerModel = new bannerModel();
        $this->portfolioModel = new portfolioModel();
        $this->rekananModel = new rekananModel();
        $this->serviceModel = new serviceModel();
        $this->teamModel = new teamModel();
        $this->profilModel = new profilModel();
    }
    public function index()
    {
        $profil = $this->profilModel->getprofil();
        $banner = $this->bannerModel->getbanner();
        $portfolio = $this->portfolioModel->getportfolio();
        $rekanan = $this->rekananModel->getrekanan();
        $service = $this->serviceModel->getservice();
        $team = $this->teamModel->getteam();
        $data = [
            'profil'=>$profil,
            'banner'=>$banner,
            'portfolio'=>$portfolio,
            'service'=>$service,
            'team'=>$team
            
        ];
        return view('landpage',$data);
    }
}

