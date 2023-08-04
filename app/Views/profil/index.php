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


<!-- profil -->

<!-- form edit -->
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

<div class="position-relative start-50 translate-middle" style="margin-top:200px;">
    <H1>PROFIL</H1>
    <?php foreach ($profil as $profils) : ?>

        <div class="container card mb-12 " style="margin-top:250px; max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?= base_url(); ?>/assets/img/<?= $profils['logo']; ?>" class="img-fluid rounded-start" alt="logo">
                </div>
                <div class="col-lg-12">
                    <div class="card-body">
                        <h5 class="card-title"><?= $profils['comp_name']; ?></h5>
                        <p class="card-text"><i class="bi bi-envelope"> </i><?= $profils['email']; ?></p>
                        <p class="card-text"><small class="text-muted"><i class="bi bi-telephone"></i> <?= $profils['telp']; ?></small></p>
                        <p class="card-text"><small class="text-muted"><i class="bi bi-geo-alt-fill"></i> <?= $profils['addres']; ?></small></p>
                        <p class="card-text"><small class="text-muted"><i class="bi bi-whatsapp"></i> <?= $profils['whatsapp']; ?></small></p>
                        <p class="card-text"><small class="text-muted"><i class="bi bi-facebook"></i> <?= $profils['facebook']; ?></small></p>
                        <p class="card-text"><small class="text-muted"><i class="bi bi-instagram"></i> <?= $profils['instagram']; ?></small></p>
                        <p class="card-text"><small class="text-muted"><strong class="text-danger">Visi</strong> <br><i class="bi bi-box-arrow-up-right"></i> <?= $profils['visi']; ?></small></p>
                        <p class="card-text"><small class="text-muted"><strong class="text-danger">Misi</strong> <br><i class="bi bi-box-arrow-up-right"></i> <?= $profils['misi']; ?></small></p>
                        <p class="card-text"><small class="text-muted"><strong class="text-danger">Tentang</strong><br><i class="bi bi-box-arrow-up-right"></i> <?= $profils['about']; ?></small></p>
                        <a class="btn btn-warning" href="profil/edit<?=$profils['id'];?>"><i class="bi bi-pencil-square"></i></a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<!-- porfolio modal -->

<!-- Modal -->






<?= $this->endSection(); ?>