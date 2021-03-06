
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <a class='btn btn-primary mr-2' href="<?= base_url(); ?>index.php/dashboard/galeri/tambah_album"><i class="fas fa-plus"></i> Album</a>
    </div>
  </div>
</div>

<div class="container">
  <div class="flash-data-album" data-flashdata="<?= $this->session->flashdata('flash');?>"></div>
    <div class="row mt-5">
      <?php foreach($album as $albm):?> 
      <div class="col-md-3">
          <div class="card shadow mb-4" style="min-height:150px;">
            <!-- Card Header - Dropdown -->
            <div class="card-header bg-white py-2 d-flex flex-row align-items-center justify-content-between">
              <span class="text-muted">Dibuat oleh: <span class='m-0 font-weight-bold text-muted'><?= $this->session->get_userdata()['fullname'];?></span></span>              
              <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-ellipsis-v fa-sm text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow bg-danger border-0 animated--fade-in" aria-labelledby="dropdownMenuLink" style="transform: translate3d(-85px, 23px, 0px); min-width: 6rem;">
                  <a class="dropdown-item text-white tombol-hapus" href="<?= base_url();?>index.php/dashboard/galeri/hapus/<?= $albm['id'];?>"> <i class="fas fa-trash"></i> Hapus</a>
                </div>
              </div>
            </div>
            <!-- Card Body -->
            <div class="card-body py-3">
              <a href="<?= base_url();?>index.php/dashboard/galeri/detail/<?= $albm['id'];?>" style="text-decoration:none"> <h6 class="m-0 font-weight-bold text-primary"><?= word_limiter($albm['name'],7," ...");?></h6></a>
            </div>
            <div class="card-footer py-2">
                <span class="m-0 font-weight-bold date"><i class="far fa-calendar-alt"></i> <?= date('d-m-y', strtotime($albm['created_at']));?></span>
                <a href="<?= base_url(); ?>index.php/dashboard/galeri/tambah_foto/<?= $albm['id'];?>" class='btn btn-success btn-sm float-right' role='button'><i class="fas fa-plus"></i> Tambah Foto</a>
              </div>
          </div>
      </div>
      <?php endforeach; ?>
      
    </div>
</div>




