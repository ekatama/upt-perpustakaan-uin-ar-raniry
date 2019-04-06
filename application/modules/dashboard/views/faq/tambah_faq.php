<div class="container">
  <div class="row">
    <div class="col-md-6">
      <a class='btn btn-primary mr-2' href="<?= base_url(); ?>index.php/dashboard/faq/index"><i class="fas fa-chevron-left"></i> FAQ</a>
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
            <label for="pertanyaan">Pertanyaan *</label>
            <input type="text" class="form-control" id="pertanyaan" name="pertanyaan" required>
            <div class="invalid-feedback">
            Pertanyaan harus diisi.
            </div>
        </div>
        <div class="form-group">
            <label for="jawaban">Jawaban *</label>
            <textarea class="form-control" id="jawaban" name="jawaban" rows="5" required></textarea>
            <div class="invalid-feedback">
            Jawaban harus diisi.
            </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card-body shadow bg-white mb-5">
        <h6>English Version</h6>
        <div class="form-group" >
            <label for="question">Question *</label>
            <input type="text" class="form-control" id="question" name="question" required>
            <div class="invalid-feedback">
            Question is required.
            </div>
        </div>
        <div class="form-group">
            <label for="answer">Answer *</label>
            <textarea class="form-control" id="answer" name="answer" rows="5" required></textarea>
            <div class="invalid-feedback">
            Answer is required.
            </div>
        </div>
			</div>
		</div>

    <div class="form-group d-flex flex-row-reverse" style="bottom: 165px; right: 25px; position: absolute;">
      <button type="submit" class='btn btn-primary'>Buat FAQ</button>
    </div>

	</div>
</div>
</form>        