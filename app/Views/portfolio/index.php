<?= $this->extend('admin/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <center>
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="card text-danger" id="pesan" style="width: 18rem;position:relative;">
                <div class="card-body"><i class="bi bi-exclamation-triangle"></i>
                    <h5 class="card-title opacity-100"> <?= session()->getflashdata('pesan'); ?></h5>

                </div>
            </div>
        <?php endif; ?>
    </center>
    <!-- modal tambah -->
    <div class="modal fade mt-5" id="tambah" tabindex="-1" aria-labelledby="tambah" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="tambah">Tambah portfolio Baru</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="cancel" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('/portfolio/tambahportfolio/'); ?>" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul">
                        </div>
                        <div class="mb-3">
                            <label for="ket" class="form-label">ket</label>
                            <input type="text" class="form-control" id="ket" name="ket">
                        </div>

                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar</label>
                            <input type="file" class="form-control" id="gambar" name="gambar">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancel</button>
                    <input type="submit" class="btn btn-primary" value="simpan" onclick="pesan()"></button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end modal tambah -->


    <div class="container" data-aos="fade-right" id="banner">
        <h2>Portfolio</h2>
        <hr>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">Tambah Portfolio</button>


        <div class="row mt-3" style="width:70rem;" id="rowtable">
            <div class="col">
                <p>Porfolio Aktive</p>
            </div>

            <table class="table" id="bannertable" style="width:100%;">
                <thead data-aos="fade-right">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">ket</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">option</th>
                    </tr>
                </thead>

                <?php $no = "1" ?>
                <?php foreach ($portfolio as $port) : ?>
                    <tbody class="align-middle" data-aos="fade-left">
                        <tr>

                            <th scope="row"><?= $no++ ?></th>
                            <td><?= $port['judul']; ?></td>
                            <td><?= $port['ket']; ?></td>
                            <td><img width="75px" class="img rounded float-start " src="<?= base_url(); ?>/assets/img/portfolio/<?= $port['gambar']; ?>" alt=""></td>
                            <td class="col-2">
                                <a class="btn btn-primary d-inline btn-lg" href="portfolio/edit<?= $port['id']; ?>"><i class="fas fa-edit"></i></a>
                                <form class="d-inline" action="portfolio/delete/<?= $port['id']; ?>" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" value="delete" class="btn btn-danger d-inline" onclick="pesan()"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>

                        </tr>
                    </tbody>
                <?php endforeach; ?>
            </table>

        </div>
    </div>


    <?= $this->endsection(); ?>