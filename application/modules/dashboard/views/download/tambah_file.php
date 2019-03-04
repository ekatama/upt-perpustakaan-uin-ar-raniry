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
        <div class="card-body  shadow bg-white">
          <div class="col-md-12">
            <form>
              <div class="form-group">
                <label for="formGroupExampleInput">Title</label>
                <input type="text" class="form-control" id="formGroupExampleInput">
              </div>
              <div class="form-group">
                <label for="exampleFormControlFile1">Upload File</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
              </div>
              <div class="form-group">
                <label for="exampleFormControlFile1">Kategori</label>
                <input class="form-control" list="categories" name="categories">
                <datalist id="categories">
                  <option value="Internet Explorer">
                  <option value="Firefox">
                  <option value="Chrome">
                  <option value="Opera">
                  <option value="Safari">
                </datalist>
              </div>
              <div class="form-group d-flex flex-row-reverse">
                <a class='btn btn-primary' href="">Buat File</a>
                <a class='btn btn-secondary mr-1' href="<?= base_url(); ?>index.php/dashboard/download/index">Kembali</a>
              </div>
            </form>
  
          </div>
        </div>
    </div>
  </div>
</div>