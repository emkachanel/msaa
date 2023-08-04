<?= $this->extend('admin/template');?>
<?= $this->section('content');?>

<div class="container"style="margin-top:100px;">
        <h4>Edit team</h4>
        
        <div class="card" style="width: 100%;margin-top:20px;">

            <form action="update<?= $team['id'];?>" method="post" enctype="multipart/form-data">
                <div class="card-body">

                    <div class="mb-3">
                        <label for="nama" class="form-label">nama</label>
                        <input type="text" class="form-control" id="nama" name="nama"value="<?= $team['nama'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="bio" class="form-label">Bio</label>
                        <input type="text" class="form-control" id="bio" name="bio"value="<?= $team['bio'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat"value="<?= $team['alamat'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="kontak" class="form-label">kontak</label>
                        <input type="text" class="form-control" id="kontak" name="kontak"value="<?= $team['kontak'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="facebook" class="form-label">facebook</label>
                        <input type="text" class="form-control" id="facebook" name="facebook"value="<?= $team['facebook'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="instagram" class="form-label">instagram</label>
                        <input type="text" class="form-control" id="instagram" name="instagram"value="<?= $team['instagram'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="youtube" class="form-label">youtube channel</label>
                        <input type="text" class="form-control" id="youtube" name="youtube"value="<?= $team['youtube'];?>">
                    </div>
                   
                    <div class="mb-3">
                        <label for="poto" class="form-label">poto</label>
                        <input type="file" class="form-control" id="poto" name="poto"value="<?= $team['poto'];?>">
                        <input type="hidden" name="gambar_lama" value="<?= $team['poto'];?>">

                        <img width="80"src="<?= base_url();?>/assets/img/team/<?= $team['poto'];?>" alt="">
                    </div>
                    </form>
                    <input class="btn btn-primary" onclick="pesan()"type="submit" value="Submit">
                    <a class="btn btn-danger "href="<?= base_url();?>/team"  type="cancel" value="kembali">Kembali</a>
                </div>
            
        </div>
    </div>







<?=$this->endSection();?>