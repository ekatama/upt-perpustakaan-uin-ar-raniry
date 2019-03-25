<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<a class='btn btn-primary' href="<?= base_url(); ?>index.php/dashboard/galeri/index"><i class="fas fa-chevron-left"></i> Galeri</a>
			<a class='btn btn-primary float-right' href="<?= base_url(); ?>index.php/dashboard/galeri/tambah_foto/<?= $this->uri->segment(4);?>"><i class="fas fa-plus"></i></i> Foto</a>
		</div>
	</div>
</div>

<div class="container-fluid">
      <div class="flash-data-foto" data-flashdata="<?= $this->session->flashdata('flash');?>"></div>
        <div class="row mt-5">
          <?php foreach($galeri as $glr):?> 
          <div class="col-md-3">
              <div class="card shadow">
                <!-- Card Header - Dropdown -->
                  <div class="dropdown no-arrow" style="position:absolute; top:8px; right:0;">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow bg-danger border-0 animated--fade-in" aria-labelledby="dropdownMenuLink" style="transform: translate3d(-85px, 23px, 0px); min-width: 6rem;">
                      <a class="dropdown-item text-white tombol-hapus" href="<?= base_url();?>index.php/dashboard/galeri/hapusGalleries/<?= $glr['id'];?>"> <i class="fas fa-trash"></i> Hapus</a>
                    </div>
                  </div>
                </div>
                <img src="<?= base_url('assets/dashboard/uploads/galeri/').$glr['img'];?>" style='width:100%' alt="buku">
          </div>
          <?php endforeach; ?>
    </div>