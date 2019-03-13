
<div class="container-fluid">
  <div class="row mt-5">
      <div class="col-md-10">
        <div class="card-body  shadow bg-white">
          <div class="col-md-12">
            <form action="" method="post">
            <?= $this->session->flashdata('flash');?>
              <div class="form-group">
                <input type="hidden" name="type" value="<?= $tentang['type'];?>">
                <label for="konten">Konten Tentang Perpustakaan</label>
                <textarea class="form-control col-8" id="konten" name="konten" rows="5"><?=$tentang['content'];?></textarea>
              </div>
              <div class="form-group d-flex flex-row-reverse">
                <button type="submit" class='btn btn-primary'>Simpan</button>
                <a class='btn btn-secondary mr-1' href="<?= base_url(); ?>index.php/dashboard/index">Kembali</a>
              </div>
            </form>        
          </div>
        </div>
    </div>
  </div>
</div>