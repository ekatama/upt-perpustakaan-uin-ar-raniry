<div class="container">
    <div class="row">
      <div class="col-md-6">
        <a class='btn btn-primary' href="<?= base_url(); ?>index.php/dashboard/artikel_event/index"><i class="fas fa-chevron-left"></i> Artikel & Event</a>
      </div>
    </div>
</div>
  <?= $this->session->flashdata('flash');?>
  <form enctype="multipart/form-data" action="<?= base_url('index.php/dashboard/artikel_event/prosesUbahArtikel');?>" method="post" class="needs-validation" novalidate>
  <input type="hidden" name="id" value="<?= $artikel['id'];?>">
  <input type="hidden" name="cover" value="<?= $artikel['cover'];?>">
<div class="container">
  <div class="row mt-5">
      <div class="col-md-10">
        <div class="card-body shadow bg-white mb-4">
          <div class="col-md-12">
              <div class="form-group">
                <label for="fotosampul">Foto Sampul *</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="fotosampul" name="fotosampul" required>
                  <label class="custom-file-label" for="fotosampul">Pilih foto...</label>
                  <small class="mt-2"> Ukuran file maksimal 2MB.</small>
                  <div class="invalid-feedback">
                  Foto Sampul harus diisi.
                  </div>
                </div>
              </div>
          </div>
        </div>
    </div>
      <div class="col-md-10">
        <div class="card-body shadow bg-white">
          <div class="col-md-12">
              <div class="form-group">
                <label for="judul">Judul *</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?= $artikel['judul'];?>" required>
                <div class="invalid-feedback">
                Judul harus diisi.
                </div>
              </div>
              <div class="form-group">
                <label for="konten">Konten *</label>
                <textarea class="form-control" id="konten" name="konten" rows="10" required><?= $artikel['judul'];?></textarea>
                <div class="invalid-feedback">
                Konten harus diisi.
                </div>
              </div>
              <div class="form-group">
              <label for="tanda">Tanda *</label>
                <select class="custom-select" id="tanda" name="tanda" required>
                <?php foreach ($tanda as $Td) : ?>
                <?php if ( $Td == $artikel['tanda'] ) : ?>
                <option value="<?= $Td; ?>" selected><?= $Td; ?></option>
                <?php else : ?>
                <option value="<?= $Td; ?>"><?= $Td; ?></option>
                <?php endif; ?>
                <?php endforeach; ?> 
                </select>
                <div class="invalid-feedback">
                Tanda harus diisi.
                </div>
              </div>
          </div>
        </div>
    </div>
  </div>
  <div class="row mt-5">
      <div class="col-md-10">
        <div class="card-body shadow bg-white">
          <div class="col-md-12">
              <div class="form-group">
                <label for="title">Title *</label>
                <input type="text" class="form-control" id="title" name="title" value="<?= $artikel['title'];?>" required>
                <div class="invalid-feedback">
                Title is required.
                </div>
              </div>
              <div class="form-group">
                <label for="content">Content *</label>
                <textarea class="form-control" id="content" name="content" rows="10" required><?= $artikel['content'];?></textarea>
                <div class="invalid-feedback">
                Content is required.
                </div>
              </div>
              <div class="form-group">
              <label for="tag">Tag*</label>
                <select class="custom-select" id="tag" name="tag" required>
                <?php foreach ($tag as $Tg) : ?>
                <?php if ( $Tg == $artikel['tag'] ) : ?>
                <option value="<?= $Tg; ?>" selected><?= $Tg; ?></option>
                <?php else : ?>
                <option value="<?= $Tg; ?>"><?= $Tg; ?></option>
                <?php endif; ?>
                <?php endforeach; ?> 
                </select>
                <div class="invalid-feedback">
                Tag is required.
                </div>
              </div>
              
              <div class="form-group d-flex flex-row-reverse">
                <button type="submit" class='btn btn-primary mt-5'>Simpan</button>
                <a href="<?= base_url('index.php/dashboard/artikel_event');?>" role="button" class='btn btn-secondary mt-5 mr-2'>Kembali</a>
              </div>
            
          </div>
        </div>
    </div>
  </div>
</div>
</form>


