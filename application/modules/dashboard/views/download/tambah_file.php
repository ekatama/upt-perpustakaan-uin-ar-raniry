<div class="container">
      <div class="row">
        <div class="col-md-6">
          <a class='btn btn-primary' href="<?= base_url(); ?>index.php/dashboard/download/index"><i class="fas fa-chevron-left"></i> Download</a>
        </div>
      </div>
  </div>

<div class="container">
  <div class="row mt-5">
      <div class="col-md-10">
        <div class="card-body shadow bg-white">
          <div class="col-md-12">
            <form action="" method="post" class="needs-validation" novalidate>
              <div class="form-group">
                <label for="judul">Judul *</label>
                <input type="text" class="form-control " id="title" name="judul" required>
                  <div class="invalid-feedback">
                  Judul harus diisi.
                  </div>
              </div>
              <div class="form-group">
                <label for="file">Unggah File *</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="file" name="file" required>
                  <label class="custom-file-label" for="file">Choose file...</label>
                  <div class="invalid-feedback">
                  File harus diisi.
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="kategori">Kategori *</label>
                <input class="form-control" list="kategori" name="kategori" required>
                  <div class="invalid-feedback">
                  Kategori harus diisi.
                  </div>
                <datalist id="kategori">
                  <option value="Internet Explorer">
                  <option value="Firefox">
                  <option value="Chrome">
                  <option value="Opera">
                  <option value="Safari">
                </datalist>
              </div>
              <div class="form-group d-flex flex-row-reverse">
                <button name="tambah" type="submit" class='btn btn-primary' href="">Buat File</button>
                <a class='btn btn-secondary mr-1' href="<?= base_url(); ?>index.php/dashboard/download/index">Kembali</a>
              </div>
            </form>
  
          </div>
        </div>
    </div>
  </div>
</div>