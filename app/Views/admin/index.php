<?= $this->extend('admin/template'); ?>
<?= $this->section('content'); ?>
<center>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="card text-danger"id="pesan" style="width: 18rem;position:relative;">
                    <div class="card-body"><i class="bi bi-exclamation-triangle"></i>
                        <h5 class="card-title opacity-100"> <?= session()->getflashdata('pesan'); ?></h5>

                    </div>
                </div>
            <?php endif; ?>
        </center>



<div class="position-relative start-50 translate-middle" style="margin-top:200px;">
    <H1>PROFIL</H1>
    <?php foreach ($profil as $profils) : ?>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?= base_url(); ?>/assets/img/<?= $profils['logo']; ?>" class="img-fluid rounded-start" alt="logo">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $profils['comp_name']; ?></h5>
                        <p class="card-text"><i class="bi bi-envelope"> </i><?= $profils['email']; ?></p>
                        <p class="card-text"><small class="text-muted"><i class="bi bi-telephone"></i> <?= $profils['telp']; ?></small></p>
                        <p class="card-text"><small class="text-muted"><i class="bi bi-geo-alt-fill"></i> <?= $profils['addres']; ?></small></p>
                        <p class="card-text"><small class="text-muted"><i class="bi bi-whatsapp"></i> <?= $profils['whatsapp']; ?></small></p>
                        <a class="btn btn-warning" href=""><i class="bi bi-pencil-square"></i></a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<!-- porfolio modal -->

<!-- Modal -->
<div class="modal fade" id="portfoliotambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <li class="list-group-item">
            <div class="mb-3">
                  <form action="<?=base_url('admin/simpan');?>" method="post"enctype="multipart/form-data">
                  <label for="name" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="name" name="name"placeholder="">
    
                </div>
            <div class="mb-3">
                    <label for="title" class="form-label">isi</label>
                    <input type="text" class="form-control" id="title" name="title"placeholder="">
    
                </div>
            <div class="mb-3">
                    <label for="ficture" class="form-label">Gambar</label>
                    <input type="file" class="form-control" id="ficture" name="ficture"placeholder="">
    
                </div>
            </li>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" value="simpan" ></button>
        </div>
    </form>
    </div>
  </div>
</div>
<div class="portfoli" style="margin-top:1px;">
    <H1>PORTFOLIO</H1>
    <Button type="button" class="btn btn-primary mb-3"data-bs-toggle="modal" data-bs-target="#portfoliotambah">Tambah Data</Button>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <?php foreach($portfolio as $port):?>
        <div class="col">
            <div class="card">
                <img src="<?= base_url(); ?>/assets/img/portfolio/<?=$port['ficture'];?>" class="card-img-top img-thumbnail" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?=$port['name'];?></h5>
                    <p class="card-text"><?=$port['title'];?></p>
                    <a class="btn btn-warning" href=""><i class="bi bi-pencil-square"></i></a>
                    <a class="btn btn-danger" href=""><i class="bi bi-trash"></i></a>
                </div>
            </div>
        </div>
        <?php endforeach;?>

    </div>

</div>

<div class="service" style="margin-top:100px;">
    <H1>SERVICES</H1>
    <button type="button" class="btn btn-primary mb-3">Tambah Data</button>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
            <div class="card">
                <!-- <img src="<?= base_url(); ?>/assets/img/portfolio/portfolio-1.jpg" class="card-img-top img-thumbnail" alt="..."> -->
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <a class="btn btn-warning" href=""><i class="bi bi-pencil-square"></i></a>
                    <a class="btn btn-danger" href=""><i class="bi bi-trash"></i></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <!-- <img src="<?= base_url(); ?>/assets/img/portfolio/portfolio-2.jpg" class="card-img-top" alt="..."> -->
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <!-- <img src="<?= base_url(); ?>/assets/img/portfolio/portfolio-3.jpg" class="card-img-top" alt="..."> -->
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <!-- <img src="<?= base_url(); ?>/assets/img/portfolio/portfolio-4.jpg" class="card-img-top" alt="..."> -->
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="team" style="margin-top:100px;">
    <H1>TEAM</H1>
    <button type="button" class="btn btn-primary mb-3">Tambah Data</button>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
            <div class="card">
                <img src="<?= base_url(); ?>/assets/img/portfolio/portfolio-1.jpg" class="card-img-top img-thumbnail" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Nama</h5>
                    <p class="card-text">Alamat</p>
                    <a class="btn btn-warning" href=""><i class="bi bi-pencil-square"></i></a>
                    <a class="btn btn-danger" href=""><i class="bi bi-trash"></i></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="<?= base_url(); ?>/assets/img/portfolio/portfolio-2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Nama</h5>
                    <p class="card-text">Telp</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="<?= base_url(); ?>/assets/img/portfolio/portfolio-3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Nama</h5>
                    <p class="card-text">Telp</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="<?= base_url(); ?>/assets/img/portfolio/portfolio-4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Nama</h5>
                    <p class="card-text">Alamat</p>
                </div>
            </div>
        </div>
    </div>

</div>





<?= $this->endSection(); ?>