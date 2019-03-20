<div class="container">
      <div class="row">
        <div class="col-md-6">
          <a class='btn btn-primary' href="<?= base_url(); ?>index.php/dashboard/galeri/index"><i class="fas fa-chevron-left"></i> Galeri</a>
        </div>
      </div>
  </div>

<div class="container">
  <div class="row mt-5">
      <div class="col-md-10">
        <div class="card-body  shadow bg-white">
          <div class="col-md-12">
            <form action="" method="post" class="needs-validation" novalidate>
              <div class="form-group">
                <label for="judul">Judul*</label>
                <input type="text" class="form-control" id="judul" name="judul" required>
                <div class="invalid-feedback">
                Judul harus diisi.
                </div>
              </div>
              <div class="form-group d-flex flex-row-reverse mt-5">
                <button type="submit" class='btn btn-primary' href="">Buat Album</button>
              </div>
            </form>
            
          </div>
        </div>
    </div>
  </div>
</div>