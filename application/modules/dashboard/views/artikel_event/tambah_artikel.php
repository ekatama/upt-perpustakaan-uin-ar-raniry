<div class="container">
      <div class="row">
        <div class="col-md-6">
          <a class='btn btn-primary' href="<?= base_url(); ?>index.php/dashboard/artikel_event/index"><i class="fas fa-chevron-left"></i> Artikel & Event</a>
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
                <label for="exampleFormControlFile1">Cover Image</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Content</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Tag</label>
                <textarea class="form-control col-8" id="exampleFormControlTextarea1" rows="5"></textarea>
              </div>
              <div class="form-group d-flex flex-row-reverse">
                <a class='btn btn-primary' href="">Posting Artikel</a>
                <a class='btn btn-secondary mr-1' href="<?= base_url(); ?>index.php/dashboard/artikel_event/index">Kembali</a>
              </div>
            </form>
            
          </div>
        </div>
    </div>
  </div>
</div>