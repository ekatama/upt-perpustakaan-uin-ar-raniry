<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <a class='btn btn-primary mr-2' href="<?= base_url(); ?>index.php/dashboard/layanan/index"><i class="fas fa-chevron-left"></i> Layanan</a>
    </div>
  </div>
</div>

<form action="" method="post" class="needs-validation" novalidate>
<div class="container-fluid">
	<div class="row mt-5">
		<div class="col-md-6">
      <div class="card-body shadow bg-white">
        <h6>Bahasa Indonesia</h6>
        <div class="form-group" >
            <label for="judul">Judul *</label>
            <input type="text" class="form-control" id="judul" name="judul" required>
            <div class="invalid-feedback">
            Judul harus diisi.
            </div>
        </div>
        <div class="form-group">
            <label for="konten">Konten *</label>
            <textarea class="form-control" id="konten" name="konten" rows="5" required></textarea>
            <div class="invalid-feedback">
            Konten harus diisi.
            </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card-body shadow bg-white">
        <h6>English Version</h6>
        <div class="form-group" >
            <label for="title">Title *</label>
            <input type="text" class="form-control" id="title" name="title" required>
            <div class="invalid-feedback">
            Title is required.
            </div>
        </div>
        <div class="form-group">
            <label for="content">Content *</label>
            <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
            <div class="invalid-feedback">
            Content is required.
            </div>
        </div>
			</div>
		</div>
    <div class="col-md-12 mt-4">
      <div class="card-body shadow bg-white">
        <div class="form-group">
          <label for="jadwal">Jadwal</label>
          <input type="text" class="form-control" id="jadwal" name="jadwal" placeholder="08.15 - 10.15" required>
          <div class="invalid-feedback">
          Jadwal harus diisi.
        </div>
        <div class="form-group d-flex flex-row-reverse mt-3">
          <button type="submit" class='btn btn-primary'>Buat Layanan</button>
        </div>
      </div>
    </div>
</form>        