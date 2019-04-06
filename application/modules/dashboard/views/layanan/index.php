<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <a class='btn btn-primary mr-2' href="<?= base_url(); ?>index.php/dashboard/layanan/tambah_layanan"><i class="fas fa-plus"></i> Layanan</a>
    </div>
  </div>
</div>

<div class="container-fluid">
<div class="flash-data-layanan" data-flashdata="<?= $this->session->flashdata('flash');?>"></div>
  <div class="row mt-5">
    <?php foreach($layanan as $lyanan): ?>
      <div class="col-md-4">
        <div class="card shadow mb-4">
          <div class="card-body py-3">
            <a href="<?= base_url(); ?>index.php/dashboard/layanan/detail/<?= $lyanan['id'];?>" style='text-decoration: none'><h6 class="mt-0 font-weight-bold text-primary"><?=word_limiter($lyanan['judul'],7," ...");?></h6></a>
            </div>
          <div class="card-footer py-2">
            <span class="m-0 font-weight-bold text-primary views"><i class="fas fa-clock"></i> <?= $lyanan['jadwal'];?></span>
            <a href="<?= base_url();?>index.php/dashboard/layanan/hapus/<?= $lyanan['id'];?>" class='btn btn-danger btn-sm float-right tombol-hapus' role='button'><i class="fas fa-trash"></i> Hapus</a>
          </div>
        </div>
      </div>
    <?php endforeach;?>
  </div>
</div>