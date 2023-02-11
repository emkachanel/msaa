<?= $this->extend('admin/template'); ?>
<?= $this->section('content'); ?>


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


<div class="portfoli" style="margin-top:1px;">
    <H1>PORTFOLIO</H1>
    <button type="button" class="btn btn-primary mb-3">Tambah Data</button>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
            <div class="card">
                <img src="<?= base_url(); ?>/assets/img/portfolio/portfolio-1.jpg" class="card-img-top img-thumbnail" alt="...">
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
                <img src="<?= base_url(); ?>/assets/img/portfolio/portfolio-2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="<?= base_url(); ?>/assets/img/portfolio/portfolio-3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="<?= base_url(); ?>/assets/img/portfolio/portfolio-4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
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

            <div class="card mb-3" style="max-width: 550px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="assets/img/team/team-1.jpg" class="img rounded" alt="..."style="width:200px;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Nama</h5>
                            <p class="card-text">Alamat</p>
                            <p class="card-text">Telp</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
        <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="assets/img/team/team-2.jpg" class="img rounded" alt="..."style="width:200px;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">Nama</h5>
                            <p class="card-text">Alamat</p>
                            <p class="card-text">Telp</p><p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
        <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="assets/img/team/team-3.jpg" class="img rounded" alt="..."style="width:200px;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">Nama</h5>
                            <p class="card-text">Alamat</p>
                            <p class="card-text">Telp</p><p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
        <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="assets/img/team/team-4.jpg" class="img rounded" alt="..."style="width:200px;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">Nama</h5>
                            <p class="card-text">Alamat</p>
                            <p class="card-text">Telp</p><p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>





<?= $this->endSection(); ?>