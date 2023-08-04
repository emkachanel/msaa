<?= $this->extend('admin/template'); ?>
<?= $this->section('content'); ?>


    <div class="container"style="margin-top:100px;">
        <h4>Edit Banner</h4>
        
        <div class="card" style="width: 100%;margin-top:20px;">

            <form action="update<?= $banner['id'];?>" method="post" enctype="multipart/form-data">
                <div class="card-body">

                    <div class="mb-3">
                        <label for="judul" class="form-label">judul</label>
                        <input type="text" class="form-control" id="judul" name="judul"value="<?= $banner['judul'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="ket" class="form-label">ket</label>
                        <input type="text" class="form-control" id="ket" name="ket"value="<?= $banner['ket'];?>">
                    </div>
                   
                    <div class="mb-3">
                        <label for="gambar" class="form-label">gambar</label>
                        <input type="file" class="form-control" id="gambar" name="gambar"value="<?= $banner['gambar'];?>">
                        <input type="hidden" name="gambar_lama" value="<?= $banner['gambar'];?>">

                        <img width="80"src="<?= base_url();?>/assets/img/banner/<?= $banner['gambar'];?>" alt="">
                    </div>
                    </form>
                    <input class="btn btn-primary" onclick="pesan()"type="submit" value="Submit">
                    <a class="btn btn-danger "href="<?= base_url();?>/banner"  type="cancel" value="kembali">Kembali</a>
                </div>
            
        </div>
    </div>







<?= $this->endSection(); ?>