<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <a class='btn btn-primary' href="<?= base_url(); ?>index.php/dashboard/weblink/index"><i class="fas fa-chevron-left"></i> Weblink</a>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row mt-5">
      <div class="col-md-10">
        <div class="card-body  shadow bg-white">
          <div class="col-md-12">
            <form action="" method="post" class="needs-validation" novalidate>
            <input type="hidden" name="id" value="<?= $weblink['id'];?>">
              <div class="form-group">
                <label for="name">Nama Website *</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $weblink['name'];?>" required>
                <div class="invalid-feedback">
                Nama Weblink harus diisi.
                </div>
              </div>
              <div class="form-group">
                <label for="url">URL *</label>
                <input type="text" class="form-control" id="url" name="url" value="<?= $weblink['url'];?>" required>
                <div class="invalid-feedback">
                URL harus diisi.
                </div>
              </div>
              <div class="form-group d-flex flex-row-reverse mt-3">
                <button type="submit" class='btn btn-primary' href="">Simpan</button>
              </div>
            </form>
            
          </div>
        </div>
    </div>
  </div>
</div>