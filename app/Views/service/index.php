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
                    <h1 class="modal-title fs-5" id="tambah">Tambah Layanan Baru</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="cancel" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('/service/tambahservice/'); ?>" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="nama" class="form-label">nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="uraian" class="form-label">uraian</label>
                            <input type="text" class="form-control" id="uraian" name="uraian">
                        </div>
                        <div class="mb-3">
                            <label for="isi" class="form-label">ket</label>
                            <input type="text" class="form-control" id="isi" name="isi">
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
        <h2>Layanan</h2>
        <hr>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">Tambah Layanan</button>


        <div class="row mt-3" style="width:70rem;" id="rowtable">
            <div class="col">
                <p>Layanan Aktive</p>
            </div>

            <table class="table" id="bannertable" style="width:100%;">
                <thead data-aos="fade-right">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">nama</th>
                        <th scope="col">uraian</th>
                        <th scope="col">isi</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">option</th>
                    </tr>
                </thead>

                <?php $no = "1" ?>
                <?php foreach ($service as $serv) : ?>
                    <tbody class="align-middle" data-aos="fade-left">
                        <tr>

                            <th scope="row"><?= $no++ ?></th>
                            <td><?= $serv['nama']; ?></td>
                            <td><?= $serv['uraian']; ?></td>
                            <td><?= $serv['isi']; ?></td>
                            <td><img width="75px" class="img rounded float-start " src="<?= base_url(); ?>/assets/img/service/<?= $serv['gambar']; ?>" alt=""></td>
                            <td class="col-2">
                                <a class="btn btn-primary d-inline btn-lg" href="service/edit<?= $serv['id']; ?>"><i class="fas fa-edit"></i></a>
                                <form class="d-inline" action="service/delete/<?= $serv['id']; ?>" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
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