<div class="container">
  <div class="row">
    <div class="col-md-6">
      <a class='btn btn-primary mr-2' href="<?= base_url(); ?>index.php/dashboard/weblink/tambah_weblink"><i class="fas fa-plus"></i> Weblink</a>
    </div>
  </div>
</div>

<div class="container">
<div class="flash-data-weblink" data-flashdata="<?= $this->session->flashdata('flash');?>"></div>
  <div class="row mt-5">
    <?php foreach($weblink as $wblnk): ?>
      <div class="col-md-3">
        <div class="card shadow mb-4">
          <div class="card-body py-3">
            <a href="<?= base_url(); ?>index.php/dashboard/weblink/detail/<?= $wblnk['id'];?>" style='text-decoration: none'><h6 class="mt-0 font-weight-bold text-primary"><?=word_limiter($wblnk['name'],7," ...");?></h6></a>
            </div>
          <div class="card-footer py-2">
            <a href="<?= base_url();?>index.php/dashboard/weblink/hapus/<?= $wblnk['id'];?>" class='btn btn-danger btn-sm float-right tombol-hapus' role='button'><i class="fas fa-trash"></i> Hapus</a>
          </div>
        </div>
      </div>
    <?php endforeach;?>
  </div>
</div>