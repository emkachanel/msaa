<?= $this->extend('admin/template');?>
<?= $this->Section('content');?>
<div class="card d-flex align-items-center"style="width:80rem;">
    <h3>Tambah Data</h3>

    <div class="card " style="width: 36rem;"style="align-content:center;">
      <ul class="list-group list-group-flush">
          <form action="" method="post">
        <li class="list-group-item">
            <div class="mb-3">
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
            
        </form>
      </ul>
    </div>

</div>

<?= $this->endsection();?>