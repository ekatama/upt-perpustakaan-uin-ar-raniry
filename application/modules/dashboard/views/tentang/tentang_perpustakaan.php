
<div class="container">
  <div class="row mt-5">
      <div class="col-md-10">
        <div class="card-body  shadow bg-white">
          <div class="col-md-12">
            <form>
              <div class="form-group">
                <label for="konten">Konten Tentang Perpustakaan</label>
                <textarea class="form-control col-8" id="konten" name="konten" rows="5">
                <?php foreach ($tentang as $tntg):?>
                <?= $tntg['content'];?>
                <?php endforeach; ?>
                </textarea>
              </div>
              <div class="form-group d-flex flex-row-reverse">
                <a class='btn btn-primary' href="">Simpan</a>
                <a class='btn btn-secondary mr-1' href="<?= base_url(); ?>index.php/dashboard/index">Kembali</a>
              </div>
            </form>        
          </div>
        </div>
    </div>
  </div>
</div>