<div class="flash-data-tentang" data-flashdata="<?= $this->session->flashdata('flash');?>"></div>
<form action="" method="post">
  <div class="container-fluid">
    <div class="row mt-5">
      <div class="col-md-6">
        <div class="card-body shadow bg-white">
          <h6>Bahasa Indonesia</h6>
            <div class="form-group">
              <input type="hidden" name="tipe" value="<?= $tentang['tipe'];?>">
              <label for="konten">Konten Tentang Perpustakaan *</label>
              <textarea class="form-control col-12" id="konten" name="konten" rows="12"><?=$tentang['konten'];?></textarea>
            </div>
            <div class="form-group d-flex flex-row-reverse">
              <button type="submit" class='btn btn-primary'>Simpan</button>
            </div>
          </div>
        </div>
      <div class="col-md-6">
        <div class="card-body shadow bg-white">
          <h6>English Version</h6>
            <div class="form-group">
              <label for="content">About Library Content *</label>
              <textarea class="form-control col-12" id="content" name="content" rows="12"><?=$tentang['content'];?></textarea>
            </div>
            <div class="form-group d-flex flex-row-reverse">
              <button type="submit" class='btn btn-primary'>Simpan</button>
            </div>
        </div>
      </div>
    </div>
  </div>
</form>        