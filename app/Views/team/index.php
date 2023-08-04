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
                    <h1 class="modal-title fs-5" id="tambah">Tambah team Baru</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="cancel" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('/team/tambahteam/'); ?>" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="nama" class="form-label">nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">posisi</label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat">
                        </div>
                        <div class="mb-3">
                            <label for="kontak" class="form-label">Kontak</label>
                            <input type="text" class="form-control" id="kontak" name="kontak">
                        </div>

                        <div class="mb-3">
                            <label for="bio" class="form-label">bio</label>
                            <input type="text" class="form-control" id="bio" name="bio">
                        </div>
                        <div class="mb-3">
                            <label for="facebook" class="form-label">facebook</label>
                            <input type="text" class="form-control" id="facebook" name="facebook">
                        </div>
                        <div class="mb-3">
                            <label for="instagram" class="form-label">instagram</label>
                            <input type="text" class="form-control" id="instagram" name="instagram">
                        </div>
                        <div class="mb-3">
                            <label for="youtube" class="form-label">youtube</label>
                            <input type="text" class="form-control" id="youtube" name="youtube">
                        </div>
                        <div class="mb-3">
                            <label for="logo" class="form-label">poto</label>
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
        <h2>team</h2>
        <hr>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">Tambah team</button>


        <div class="row mt-3" style="width:70rem;" id="rowtable">
            <div class="col">
                <p>Daftar Team</p>
            </div>

            <table class="table" id="bannertable" style="width:100%;">
                <thead data-aos="fade-right">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">poto</th>
                        <th scope="col">nama</th>
                        <th scope="col">posisi</th>
                        <th scope="col">alamat</th>
                        <th scope="col">kontak</th>
                        <th scope="col">bio</th>
                        <th scope="col">facebook</th>
                        <th scope="col">instagram</th>
                        <th scope="col">youtube</th>
                        
                        <th colspans="3"class="span-3 text-center"scope="col">options</th>
                        

                        
                    </tr>
                </thead>

                <?php $no = "1" ?>
                <?php foreach ($team as $teams) : ?>
                    <tbody class="align-middle" data-aos="fade-left">
                        <tr>

                            <th scope="row"><?= $no++ ?></th>
                            <td><img width="75px" class="img rounded float-start " src="<?= base_url(); ?>/assets/img/team/<?=$teams['poto'];?>" alt=""></td>
                            <td><?= $teams['nama']; ?></td>
                            <td><?= $teams['jabatan']; ?></td>
                            <td><?= $teams['alamat']; ?></td>
                            <td><?= $teams['kontak']; ?></td>
                            <td><?= $teams['bio']; ?></td>
                            <td><?= $teams['facebook']; ?></td>
                            <td><?= $teams['instagram']; ?></td>
                            <td><?= $teams['youtube']; ?></td>
                            
                            
                            <td class="col-2">
                                <a class="btn btn-primary d-inline btn-lg" href="team/edit<?= $teams['id']; ?>"><i class="fas fa-edit"></i></a>
                                <form class="d-inline" action="team/delete/<?= $teams['id']; ?>" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
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