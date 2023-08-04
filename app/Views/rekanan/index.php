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
                    <h1 class="modal-title fs-5" id="tambah">Tambah rekanan Baru</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="cancel" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('/rekanan/tambahrekanan/'); ?>" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="pimpinan" class="form-label">pimpinan</label>
                            <input type="text" class="form-control" id="pimpinan" name="pimpinan">
                        </div>
                        <div class="mb-3">
                            <label for="nama_perusahaan" class="form-label">nama perusahaan</label>
                            <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">alamat perusahaan</label>
                            <input type="text" class="form-control" id="alamat" name="alamat">
                        </div>
                        <div class="mb-3">
                            <label for="kontak" class="form-label">Kontak</label>
                            <input type="text" class="form-control" id="kontak" name="kontak">
                        </div>

                        <div class="mb-3">
                            <label for="ket" class="form-label">Keterangan</label>
                            <input type="text" class="form-control" id="ket" name="ket">
                        </div>
                        <div class="mb-3">
                            <label for="logo" class="form-label">logo Perusahaan</label>
                            <input type="file" class="form-control" id="logo" name="logo">
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
        <h2>rekanan</h2>
        <hr>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">Tambah rekanan</button>


        <div class="row mt-3" style="width:70rem;" id="rowtable">
            <div class="col">
                <p>Daftar Rekanan</p>
            </div>

            <table class="table" id="bannertable" style="width:100%;">
                <thead data-aos="fade-right">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">pimpinan</th>
                        <th scope="col">nama perusahaan</th>
                        <th scope="col">alamat</th>
                        <th scope="col">kontak</th>
                        <th scope="col">ket</th>
                        <th scope="col">logo</th>
                        
                        <th colspans="3"class="span-3 text-center"scope="col">options</th>
                        

                        
                    </tr>
                </thead>

                <?php $no = "1" ?>
                <?php foreach ($rekanan as $rekan) : ?>
                    <tbody class="align-middle" data-aos="fade-left">
                        <tr>

                            <th scope="row"><?= $no++ ?></th>
                            <td><?= $rekan['pimpinan']; ?></td>
                            <td><?= $rekan['nama_perusahaan']; ?></td>
                            <td><?= $rekan['alamat']; ?></td>
                            <td><?= $rekan['kontak']; ?></td>
                            <td><?= $rekan['ket']; ?></td>
                            
                            <td><img width="75px" class="img rounded float-start " src="<?= base_url(); ?>/assets/img/rekanan/<?=$rekan['logo'];?>" alt=""></td>
                            <td class="col-2">
                                <a class="btn btn-primary d-inline btn-lg" href="rekanan/edit<?= $rekan['id']; ?>"><i class="fas fa-edit"></i></a>
                                <form class="d-inline" action="rekanan/delete/<?= $rekan['id']; ?>" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
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