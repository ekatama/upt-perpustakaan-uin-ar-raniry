<div class="container">
      <div class="row">
        <div class="col-md-6">
          <a class='btn btn-primary' href="<?= base_url(); ?>index.php/dashboard/download/index"><i class="fas fa-chevron-left"></i> Download</a>
        </div>
      </div>
  </div>
<form action="" method="post" class="needs-validation" novalidate>
<div class="container">
  <div class="row mt-5">
      <div class="col-md-6">
        <div class="card-body shadow bg-white">
          <div class="col-md-12">
            <h6>Bahasa Indonesia</h6>
              <div class="form-group">
                <label for="judul">Judul *</label>
                <input type="text" class="form-control " id="title" name="judul" required>
                  <div class="invalid-feedback">
                  Judul harus diisi.
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
  
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card-body shadow bg-white">
          <div class="col-md-12">
            <h6>English Version</h6>
              <div class="form-group">
                <label for="title">Title *</label>
                <input type="text" class="form-control " id="title" name="title" required>
                  <div class="invalid-feedback">
                  Title Required.
                  </div>
              </div>
              <div class="form-group">
                <label for="categories">Category *</label>
                <input class="form-control" list="categories" name="categories" required>
                  <div class="invalid-feedback">
                  Category Required.
                  </div>
                <datalist id="categories">
                  <option value="Internet Explorer">
                  <option value="Firefox">
                  <option value="Chrome">
                  <option value="Opera">
                  <option value="Safari">
                </datalist>
              </div>
  
          </div>
        </div>
      </div>

      <div class="col-md-12 mt-4">
        <div class="card-body shadow bg-white">
          <div class="col-md-12">
            
              
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
              
              <div class="form-group d-flex flex-row-reverse">
                <button name="tambah" type="submit" class='btn btn-primary mt-2'>Tambah File</button>
              </div>
  
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
</form>