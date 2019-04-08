    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <a class='btn btn-primary mr-2' href="<?= base_url(); ?>index.php/dashboard/artikel_event/tambah_artikel"><i class="fas fa-plus"></i> Artikel / Event</a>
          <form action="" method="get" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search float-right">
            <div class="input-group">
              <input type="text" class="form-control border-0 small" name="keyword" placeholder="Cari artikel..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="flash-data-artikel" data-flashdata="<?= $this->session->flashdata('flash');?>"></div>
        <div class="row mt-5">
        <?php foreach($artikel as $artkl): ?>
            <div class="col-md-3 col-sm-6">
              <div class="card shadow mb-4">
              <div class="card-header py-2">
                    <span class="text-muted">Dibuat oleh: </span>
                    <span class='m-0 font-weight-bold text-primary'><?= $this->session->get_userdata()['fullname'];?></span>
                  </div>
                    <img src="<?= base_url('assets/uploads/artikel_event/').$artkl['cover']; ?>" style='width:100%'>
                  <div class="card-body py-3"  style="height: 150px;">
                    <a href="<?= base_url();?>index.php/dashboard/artikel_event/detail/<?= $artkl['id'];?>" style='text-decoration: none'><h6 class="mt-0 font-weight-bold text-primary"><?= character_limiter($artkl['judul'],40," ...");?></h6></a>
                    <p class='mb-0'><?= character_limiter($artkl['konten'],50," ...");?></p>
                  </div>
                  <div class="card-footer py-2">
                    <span class="m-0 font-weight-bold text-primary views"><i class="far fa-eye"></i> <?=$artkl['view'];?> views</span>
                    <a href="<?= base_url();?>index.php/dashboard/artikel_event/hapus/<?= $artkl['id'];?>" class='btn btn-danger btn-sm float-right tombol-hapus' role='button'><i class="fas fa-trash"></i> Hapus</a>
                  </div>
                </div>
            </div>
            <?php endforeach;?>
            
        </div>
    </div>




