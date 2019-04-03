
<div class="container-fluid">
  <div class="row mt-5">
    <div class="col-md-10">
      <div class="card-body shadow bg-white">
        <div class="col-md-12">
        <div class="flash-data-video" data-flashdata="<?= $this->session->flashdata('flash');?>"></div>
          <form action="" method="post" class="needs-validation" novalidate>
          <input type="hidden" name="id" value="<?=$video['id'];?>">
            <div class="form-group">
            <label for="url">URL *</label>
            <input type="text" class="form-control" id="url" name="url" value="<?= $video['url'];?>" required>
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