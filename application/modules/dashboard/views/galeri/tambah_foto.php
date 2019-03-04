<div class="container">
      <div class="row">
        <div class="col-md-6">
          <a class='btn btn-success' href="<?= base_url(); ?>index.php/dashboard/galeri/index"><i class="fas fa-chevron-left"></i> Galeri</a>
        </div>
      </div>
  </div>

<div class="container">
  <div class="row mt-5">
      <div class="col-md-10">
        <div class="card-body  shadow bg-white">
          <div class="col-md-12">
            <h4 class="text-dark mb-5">Peresmian Website UPT Perpustakaan</h4>
            <form>
              <div class="form-group">
                <label for="exampleFormControlFile1">Upload Foto</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput">Deskripsi</label>
                <input type="text" class="form-control" id="formGroupExampleInput">
              </div>
              <div class="form-group d-flex flex-row-reverse">
                <a class='btn btn-success' href="">Posting Foto</a>
                <a class='btn btn-secondary mr-1' href="<?= base_url(); ?>index.php/dashboard/galeri/index">Kembali</a>
              </div>
            </form>
            
          </div>
        </div>
    </div>
  </div>
</div>