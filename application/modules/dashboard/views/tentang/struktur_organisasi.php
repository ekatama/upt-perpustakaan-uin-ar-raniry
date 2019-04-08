<div class="container-fluid">
  <div class="row mt-5">
      <div class="col-md-6">
        <div class="card-body shadow bg-white">
          <div class="flash-data-tentang" data-flashdata="<?= $this->session->flashdata('flash');?>"></div>
            <form enctype="multipart/form-data" action="<?= base_url('index.php/dashboard/tentang/prosesUbahStrukturId');?>" method="post" class="needs-validation" novalidate>
            <h6>Bahasa Indonesia</h6>
            <img src="<?= base_url('assets/uploads/');?><?=$tentang['konten'];?>" alt="Foto Struktur Organisasi" style="width:60%; margin-bottom:15px;">
              <div class="form-group">
              <input type="hidden" name="tipe" value="<?= $tentang['tipe'];?>">
                  <label for="struktur_id">Unggah Foto *</label>
                  <div class="custom-file">
                    <input accept="image/jpg" type="file" class="custom-file-input" id="struktur_id" name="struktur_id" required>
                    <label class="custom-file-label" for="struktur_id">Pilih foto...</label>
                    File harus berekstensi .jpg
                    <div class="invalid-feedback">
                    File Foto harus diisi.
                    </div>
                  </div>
              </div>
              <div class="form-group d-flex flex-row-reverse">
                <button class='btn btn-primary' type="submit" href="">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      <div class="col-md-6">
        <div class="card-body shadow bg-white">
            <form enctype="multipart/form-data" action="<?= base_url('index.php/dashboard/tentang/prosesUbahStrukturEn');?>" method="post" class="needs-validation" novalidate>        
            <h6>English Version</h6>
            <img src="<?= base_url('assets/uploads/');?><?=$tentang['content'];?>" alt="Foto Struktur Organisasi" style="width:60%; margin-bottom:15px;">
              <div class="form-group">
                <label for="struktur_en">Upload Photo *</label>
                <div class="custom-file">
                  <input accept="image/jpg" type="file" class="custom-file-input" id="struktur_en" name="struktur_en" required>
                  <label class="custom-file-label" for="struktur_en">Choice photo...</label>
                  File must be extension .jpg
                  <div class="invalid-feedback">
                  Upload Photo is required.
                  </div>
                </div>
            </div>
            <div class="form-group d-flex flex-row-reverse">
              <button class='btn btn-primary' type="submit" href="">Simpan</button>
            </div>
          </form>
      </div>
    </div>
  </div>
</div>