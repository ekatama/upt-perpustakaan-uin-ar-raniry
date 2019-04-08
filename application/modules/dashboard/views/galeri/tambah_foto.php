<div class="container">
      <div class="row">
        <div class="col-md-6">
          <a class='btn btn-primary' href="<?= base_url(); ?>index.php/dashboard/galeri/detail/<?= $this->uri->segment(4);?>"><i class="fas fa-chevron-left"></i> Album</a>
        </div>
      </div>
  </div>

<div class="container">
  <div class="row mt-5">
      <div class="col-md-10">
        <div class="card-body  shadow bg-white">
          <div class="col-md-12">
            <h4 class="text-dark mb-5">Peresmian Website UPT Perpustakaan</h4>
            <form enctype="multipart/form-data" action="<?= base_url('index.php/dashboard/galeri/prosesTambahFoto');?>" method="post" class="dropzone" id="dragndrop">
            <input type="hidden" name="album" value="<?= $this->uri->segment(4);?>">
            </form>
            
          </div>
        </div>
    </div>
  </div>
</div>