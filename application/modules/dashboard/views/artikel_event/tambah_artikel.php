<div class="container">
      <div class="row">
        <div class="col-md-6">
          <a class='btn btn-primary' href="<?= base_url(); ?>index.php/dashboard/artikel_event/index"><i class="fas fa-chevron-left"></i> Artikel & Event</a>
        </div>
      </div>
  </div>

<form enctype="multipart/form-data" action="<?= base_url('index.php/dashboard/artikel_event/prosesTambahArtikel');?>" method="post" class="needs-validation" novalidate>
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
                <input type="text" class="form-control" id="judul" name="judul" required>
                <div class="invalid-feedback">
                Judul harus diisi.
                </div>
              </div>
              <div class="form-group">
                <label for="konten">Konten *</label>
                <textarea class="form-control" id="konten" name="konten" rows="10" required></textarea>
                <div class="invalid-feedback">
                Konten harus diisi.
                </div>
              </div>
              <div class="form-group">
              <label for="tanda">Tanda *</label>
                <select class="custom-select" id="tanda" name="tanda" required>
                <option></option>
                <option value="Event">Acara</option>
                <option value="Kegiatan">Kegiatan</option>
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
                <input type="text" class="form-control" id="title" name="title" required>
                <div class="invalid-feedback">
                Title is required.
                </div>
              </div>
              <div class="form-group">
                <label for="content">Content *</label>
                <textarea class="form-control" id="content" name="content" rows="10" required></textarea>
                <div class="invalid-feedback">
                Content is required.
                </div>
              </div>
              <div class="form-group">
              <label for="tag">Tag *</label>
                <select class="custom-select" id="tag" name="tag" required>
                <option></option>
                <option value="Kegiatan">Event</option>
                <option value="Event">Activities</option>
                </select>
                <div class="invalid-feedback">
                Tag is required.
                </div>
              </div>
              <div class="form-group d-flex flex-row-reverse">
                <button type="submit" class='btn btn-primary mt-5'>Posting Artikel</button>
                <a href="<?= base_url('index.php/dashboard/artikel_event');?>" role="button" class='btn btn-secondary mt-5 mr-2'>Kembali</a>
              </div>
            
          </div>
        </div>
    </div>
  </div>
</div>
</form>