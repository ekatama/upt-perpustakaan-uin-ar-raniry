    <div class="container">
        <div class="row">
            <div class="col-md-6">
              <a class='btn btn-primary mr-2' href="<?= base_url(); ?>index.php/dashboard/galeri/tambah_album"><i class="fas fa-plus"></i> Album</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-5">
          <?php foreach($galeri as $glr):?> 
          <div class="col-md-3">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-2 d-flex flex-row align-items-center justify-content-between">
                  <span class="text-muted">Dibuat oleh: <span class='m-0 font-weight-bold text-primary'>Admin</span></span>              
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow bg-danger border-0 animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item text-white" href="#"><i class="fas fa-trash"></i> Hapus</a>
                    </div>
                  </div>
                </div>
                <img src="<?= base_url(); ?>assets/images/16-g.png" style='width:100%' alt="buku">
                <!-- Card Body -->
                <div class="card-body py-3">
                  <a href="" style="text-decoration:none"> <h6 class="m-0 font-weight-bold text-primary"><?= $glr['album'];?></h6></a>
                </div>
                <div class="card-footer py-2">
                    <span class="m-0 font-weight-bold text-primary date"><i class="far fa-calendar-alt"></i> 03-03-19</span>
                    <a href="<?= base_url(); ?>index.php/dashboard/galeri/tambah_foto" class='btn btn-success btn-sm float-right' role='button'><i class="fas fa-plus"></i> Tambah Foto</a>
                  </div>
              </div>
          </div>
          <?php endforeach; ?>
          
        </div>
    </div>




