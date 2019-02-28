<div class="container">
      <div class="row">
        <div class="col-md-6">
          <a class='btn btn-primary' href="<?= base_url(); ?>index.php/dashboard/artikel/index"><i class="fas fa-chevron-left"></i>  Kembali ke Artikel</a>
        </div>
      </div>
  </div>

<div class="container">
  <div class="row mt-5">
    <div class="card-body  shadow bg-white">
    <div class="col-md-12">
    <form>
  <div class="form-group">
    <label for="formGroupExampleInput">Title</label>
    <input type="text" class="form-control" id="formGroupExampleInput">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Cover Image</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Content</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Tag</label>
    <textarea class="form-control col-7" id="exampleFormControlTextarea1" rows="5"></textarea>
  </div>
</form>
<a class='btn btn-primary float-right' href="">Posting Artikel</a>
<a class='btn btn-secondary float-right mr-2' href="<?= base_url(); ?>index.php/dashboard/artikel/index">Cancel</a>
</div>
    </div>
  </div>
  </div>