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
            <form action="" method="post" class="needs-validation" novalidate>
            <div class="form-group">
                <label for="foto">Upload Foto *</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="foto" name="foto" required>
                  <label class="custom-file-label" for="fotosampul">Pilih foto...</label>
                  <div class="invalid-feedback">
                  File Foto harus diisi.
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="deskripsi">Deskripsi *</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
                <div class="invalid-feedback">
                  Deskripsi harus diisi.
                </div>
              </div>
              <div class="form-group d-flex flex-row-reverse">
                <button type="submit" class='btn btn-success' href="">Posting Foto</button>
                <a class='btn btn-secondary mr-1' href="<?= base_url(); ?>index.php/dashboard/galeri/index">Kembali</a>
              </div>
            </form>
            
          </div>
        </div>
    </div>
  </div>
</div>