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

<div class="container position-absolute top-50 start-50 translate-middle">

<img src="<?= base_url();?>/assets/img/logoMSAA.png" class="img-fluid" alt="...">
</div>
        






<?= $this->endSection(); ?>