<?= $this->extend('admin/template'); ?>
<?= $this->section('content'); ?>

 

        <div class="d-flex container card mb-12" style="margin-top:0px; max-width: 540px;"><h5>Edit Profil</h5>
        
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?= base_url(); ?>/assets/img/<?= $profil['logo']; ?>" class="img-fluid rounded-start" alt="logo">
                </div>
                <div class="col-lg-12">
                    <form action="update <?=$profil['id'];?>"method="post" enctype="multipart/form-data">
                    
                    <div class="card-body">
                        <div class="mb3">
                            <label for="comp_name">Company Name</label>
                            <input type="text" class="form-control" id="comp_name" name="comp_name"value="<?= $profil['comp_name'];?>">
                        </div>
                        <div class="mb3">
                            <label for="email">email</label>
                            <input type="text" class="form-control" id="email" name="email"value="<?= $profil['email'];?>">
                        </div>
                        <div class="mb3">
                            <label for="telp">Telp</label>
                            <input type="text" class="form-control" id="telp" name="telp"value="<?= $profil['telp'];?>">
                        </div>
                        <div class="mb3">
                            <label for="addres">Addres</label>
                            <input type="text" class="form-control" id="addres" name="addres"value="<?= $profil['addres'];?>">
                        </div>
                        <div class="mb3">
                            <label for="whatsapp">whatsapp</label>
                            <input type="text" class="form-control" id="whatsapp" name="whatsapp"value="<?= $profil['whatsapp'];?>">
                        </div>
                        <div class="mb3">
                            <label for="facebook">facebook</label>
                            <input type="text" class="form-control" id="facebook" name="facebook"value="<?= $profil['facebook'];?>">
                        </div>
                        <div class="mb3">
                            <label for="instagram">instagram</label>
                            <input type="text" class="form-control" id="instagram" name="instagram"value="<?= $profil['instagram'];?>">
                        </div>
                        <div class="mb3">
                            <label for="visi">visi</label>
                            <textarea class="form-control" id="visi" name="visi" style="height: 100px;"><?= $profil['visi']; ?></textarea>
                        </div>
                        <div class="mb3">
                            <label for="misi">Misi</label>
                            <textarea class="form-control" id="misi" name="misi" style="height: 100px;"><?= $profil['misi']; ?></textarea>
                        </div>
                        <div class="mb3">
                            <label for="about">about</label>
                            <textarea class="form-control" id="about" name="about" style="height: 100px;"><?= $profil['about']; ?></textarea>
                        </div>

                       
                    </div>

                    <div class="mb-3">
                        <label for="logo" class="form-label">logo</label>
                        <input type="file" class="form-control" id="logo" name="logo"value="<?= $profil['logo'];?>">
                        <input type="hidden" name="logolama" value="<?= $profil['logo'];?>">

                        
                    </div>
                    
                    <input class="btn btn-sm btn-primary" onclick="pesan()"type="submit" value="Submit">
                    <a class="btn btn-danger btn-sm "href="<?= base_url();?>/profil"  type="cancel" value="kembali">Kembali</a>
                </div>
                </form> 
                    

                </div>
            </div>
        </div>
   
</div>
<?= $this->endSection(); ?>