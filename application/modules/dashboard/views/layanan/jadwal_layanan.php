<div class="container-fluid">
	<div class="row mt-5">
  	<div class="col-md-10">
      <div class="card-body  shadow bg-white">
        <div class="col-md-12">
          <form action="" method="post" class="needs-validation" novalidate>
            <?= $this->session->flashdata('flash');?>
							<div class="form-group" >
									<label for="judul">Judul</label>
									<input type="text" class="form-control col-8" id="judul" name="judul" required>
									<div class="invalid-feedback">
									Judul harus diisi.
									</div>
              </div>
							<div class="form-group">
									<input type="hidden" name="type" value="">
									<label for="konten">Konten</label>
									<textarea class="form-control col-8" id="konten" name="konten" rows="5" required></textarea>
									<div class="invalid-feedback">
									Konten harus diisi.
									</div>
							</div>
							<div class="form-group">
									<label for="judul">Jadwal</label>
									<input type="text" class="form-control col-8" id="judul" name="judul" placeholder="08.15 - 10.15" required>
									<div class="invalid-feedback">
									Jadwal harus diisi.
									</div>
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