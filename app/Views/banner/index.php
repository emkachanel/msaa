<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>

<center>
    <?php if (session()->getflashdata('pesan')) : ?>
        <div id="pesan" class="card text-danger" style="width: 18rem;position:relative;" data-aos="fade-down">

            <div class="card-body"><i class="fas fa-check-double"></i>
                <h5 class="card-title opacity-100"> <?= session()->getflashdata('pesan'); ?></h5>

            </div>
        </div>
    <?php endif; ?>
</center>

<!--  -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- ... -->
        
        <!--  -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!--  -->



<!--  -->
<div class="modal fade mt-5" id="tambah" tabindex="-1" aria-labelledby="tambah" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="tambah">Tambah Baner</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('/banner/tambahbanner/'); ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul">
                    </div>
                    <div class="mb-3">
                        <label for="ket" class="form-label">isi/ket</label>
                        <input type="text" class="form-control" id="ket" name="ket">
                    </div>

                    <div class="mb-3">
                        <label for="gambar" class="form-label">gambar Banner</label>
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

<div class="container" data-aos="fade-right" id="banner">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Banner</h1>
    </div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            <botton type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">Tambah</button>
        </h1>
    </div>





    <table class="table">
      <thead>
        <tr>
          <th scope="col">no</th>
          <th scope="col">Gambar</th>
          <th scope="col">Judul</th>
          <th scope="col">Keterangan</th>
          <th scope="col "class="span-3 text-center">Options</th>
        </tr>
      </thead>
      <tbody>
          <?php $no = "1" ?>
          <?php foreach ($banner as $ban) : ?>
        <tr>
          <th scope="row"><?=$no++?></th>
          <td> <image class="img-thumbnail" src="<?= base_url();?>/assets/img/banner/<?=$ban['gambar'];?>"style="max-width:200px;"></image></td>
          <td><?= $ban['judul'];?></td>
          <td><?= $ban['ket'];?></td>
          <td>
          <a  class="btn btn-primary btn-sm" href="banner/edit<?= $ban['id']; ?>"><i class="fas fa-edit"></i></a>
          <form class="d-inline" action="banner/delete/<?= $ban['id']; ?>" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" value="delete" class="btn btn-danger d-inline" onclick="pesan()"><i class="fas fa-trash-alt"></i></button>
           </form>
          </td>
        </tr>
        <?php endforeach; ?> 
      </tbody>
    </table>

</div>
<?= $this->endSection(); ?>