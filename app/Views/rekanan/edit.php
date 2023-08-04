<?= $this->extend('admin/template'); ?>
<?= $this->section('content'); ?>


    <div class="container"style="margin-top:100px;">
        <h4>Edit Rekanan</h4>
        
        <div class="card" style="width: 100%;margin-top:20px;">

            <form action="update<?= $rekanan['id'];?>" method="post" enctype="multipart/form-data">
                <div class="card-body">

                    <div class="mb-3">
                        <label for="pimpinan" class="form-label">pimpinan</label>
                        <input type="text" class="form-control" id="pimpinan" name="pimpinan"value="<?= $rekanan['pimpinan'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="nama_perusahaan" class="form-label">nama perusahaan</label>
                        <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan"value="<?= $rekanan['nama_perusahaan'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat"value="<?= $rekanan['alamat'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="kontak" class="form-label">kontak</label>
                        <input type="text" class="form-control" id="kontak" name="kontak"value="<?= $rekanan['kontak'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="ket" class="form-label">ket</label>
                        <input type="text" class="form-control" id="ket" name="ket"value="<?= $rekanan['ket'];?>">
                    </div>
                   
                    <div class="mb-3">
                        <label for="logo" class="form-label">logo</label>
                        <input type="file" class="form-control" id="logo" name="logo"value="<?= $rekanan['logo'];?>">
                        <input type="hidden" name="gambar_lama" value="<?= $rekanan['logo'];?>">

                        <img width="80"src="<?= base_url();?>/assets/img/rekanan/<?= $rekanan['logo'];?>" alt="">
                    </div>
                    </form>
                    <input class="btn btn-primary" onclick="pesan()"type="submit" value="Submit">
                    <a class="btn btn-danger "href="<?= base_url();?>/rekanan"  type="cancel" value="kembali">Kembali</a>
                </div>
            
        </div>
    </div>







<?= $this->endSection(); ?>