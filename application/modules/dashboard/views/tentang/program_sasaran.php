<div class="container-fluid">
  <div class="row mt-5">
      <div class="col-md-10">
        <div class="card-body  shadow bg-white">
          <div class="col-md-12">
          <div class="flash-data-tentang" data-flashdata="<?= $this->session->flashdata('flash');?>"></div>
          <form action="" method="post">
          <h6>Bahasa Indonesia</h6>
              <div class="form-group">
                <input type="hidden" name="tipe" value="<?= $tentang['tipe'];?>">
                <label for="konten">Konten Program Sasaran *</label>
                <textarea class="form-control col-8" id="konten" name="konten" rows="10"><?=$tentang['konten'];?></textarea>
              </div>
              <hr class="sidebar-divider">
              <h6>English Version</h6>
              <div class="form-group">
                <label for="content">Target Program Content *</label>
                <textarea class="form-control col-8" id="content" name="content" rows="10"><?=$tentang['content'];?></textarea>
              </div>
              <hr class="sidebar-divider">
              <div class="form-group d-flex flex-row-reverse">
                <button type="submit" class='btn btn-primary'>Simpan</button>
              </div>
            </form>        
          </div>
        </div>
    </div>
  </div>
</div>