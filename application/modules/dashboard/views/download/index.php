<div class="container">
  <div class="row">
    <div class="col-md-6">
      <a class='btn btn-primary mr-2' href="<?= base_url(); ?>index.php/dashboard/download/tambah_file"><i class="fas fa-plus"></i> File</a>
    </div>
  </div>
</div>

<div class="container">
<div class="flash-data-download" data-flashdata="<?= $this->session->flashdata('flash');?>"></div>
  <div class="row mt-5">
    <?php foreach($download as $dwnld): ?>
      <div class="col-md-4">
        <div class="card shadow mb-4">
          <div class="card-body py-3">
            <a href="<?= base_url(); ?>index.php/dashboard/download/detail/<?= $dwnld['id'];?>" style='text-decoration: none'><h6 class="mt-0 font-weight-bold text-primary"><?=word_limiter($dwnld['judul'],7," ...");?></h6></a>
            </div>
          <div class="card-footer py-2">
            <span class="m-0 font-weight-bold text-primary views"><i class="fas fa-download"></i>
              <?= $this->db->where('download_id',$dwnld['id'])->from('downloadlogs')->count_all_results() ?>
            </span>
            <a href="<?= base_url();?>index.php/dashboard/download/hapus/<?= $dwnld['id'];?>" class='btn btn-danger btn-sm float-right tombol-hapus' role='button'><i class="fas fa-trash"></i> Hapus</a>
          </div>
        </div>
      </div>
    <?php endforeach;?>
  </div>
</div>