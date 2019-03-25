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
            <form enctype="multipart/form-data" action="<?= base_url('index.php/dashboard/artikel_event/prosesTambahArtikel');?>" method="post" class="needs-validation" novalidate>
              <div class="form-group">
                <label for="judul">Judul *</label>
                <input type="text" class="form-control" id="judul" name="judul" required>
                <div class="invalid-feedback">
                Judul harus diisi.
                </div>
              </div>
              <div class="form-group">
                <label for="fotosampul">Foto Sampul *</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="fotosampul" name="fotosampul" required>
                  <label class="custom-file-label" for="fotosampul">Pilih foto...</label>
                  <div class="invalid-feedback">
                  Foto Sampul harus diisi.
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="konten">Isi Konten *</label>
                <textarea class="form-control" id="konten" name="konten" rows="10" required></textarea>
                <div class="invalid-feedback">
                Isi Konten harus diisi.
                </div>
              </div>
              <div class="form-group">
              <label for="tag">Tag*</label>
                <select class="custom-select" id="tag" name="tag" required>
                <option></option>
                <option value="Kegiatan">Kegiatan</option>
                <option value="Event">Event</option>
                </select>
                <div class="invalid-feedback">
                Tag harus diisi.
                </div>
              </div>
              <div class="form-group d-flex flex-row-reverse">
                <button type="submit" class='btn btn-primary mt-3'>Posting Artikel</button>
              </div>
            </form>
            
          </div>
        </div>
    </div>
  </div>
</div>