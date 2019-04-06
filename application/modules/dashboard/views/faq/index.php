<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <a class='btn btn-primary mr-2' href="<?= base_url(); ?>index.php/dashboard/faq/tambah_faq"><i class="fas fa-plus"></i> FAQ</a>
    </div>
  </div>
</div>

<div class="container-fluid">
<div class="flash-data-faq" data-flashdata="<?= $this->session->flashdata('flash');?>"></div>
  <div class="row mt-5">
    <?php foreach($faq as $Faq): ?>
      <div class="col-md-4">
        <div class="card shadow mb-4" style="min-height:128px;">
          <div class="card-body py-3">
            <a href="<?= base_url(); ?>index.php/dashboard/faq/detail/<?= $Faq['id'];?>" style='text-decoration: none'><h6 class="mt-0 font-weight-bold text-primary"><?=word_limiter($Faq['pertanyaan'],7," ...");?></h6></a>
            </div>
          <div class="card-footer py-2">
            <span class="m-0 font-weight-bold date"><i class="far fa-calendar-alt"></i> <?= date('d-m-y', strtotime($Faq['created_at']));?></span>
            <a href="<?= base_url();?>index.php/dashboard/faq/hapus/<?= $Faq['id'];?>" class='btn btn-danger btn-sm float-right tombol-hapus' role='button'><i class="fas fa-trash"></i> Hapus</a>
          </div>
        </div>
      </div>
    <?php endforeach;?>
  </div>
</div>