<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>UPT Perpustakaan - <?= $title;?></title>

  <!-- Custom fonts for this template-->
  <!-- <link href="assets/dashboard/vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css"> -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url(); ?>assets/dashboard/css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="<?= base_url(); ?>assets/dashboard/css/custom.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/dashboard/css/dragndrop/basic.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/dashboard/css/dragndrop/dropzone.min.css">



</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>index.php/dashboard/index">
          <img src="<?= base_url(); ?>assets/images/logo-uin.png" style="width:20%" alt="logo uin">
        <div class="sidebar-brand-text text-left mx-2" style="font-size:14px;">UPT Perpustakaan</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <?php if ($title == 'Dashboard') : ?>
      <li class="nav-item active">
      <?php else : ?>
      <li class="nav-item">
      <?php endif; ?>
        <a class="nav-link" href="<?= base_url(); ?>index.php/dashboard/index">
          <i class="fas fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu Utama
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <?php if ($title == 'Tentang') : ?>
      <li class="nav-item active">
      <?php else : ?>
      <li class="nav-item">
      <?php endif; ?>
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTentang" aria-expanded="true" aria-controls="collapseTentang">
          <i class="fas fa-info-circle"></i>
          <span>Tentang</span>
        </a>
        <div id="collapseTentang" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Components:</h6>
            <a class="collapse-item" href="<?= base_url(); ?>index.php/dashboard/tentang/tentang_perpustakaan">Tentang Perpustakaan</a>
            <a class="collapse-item" href="<?= base_url(); ?>index.php/dashboard/tentang/visi">Visi</a>
            <a class="collapse-item" href="<?= base_url(); ?>index.php/dashboard/tentang/misi">Misi</a>
            <a class="collapse-item" href="<?= base_url(); ?>index.php/dashboard/tentang/tujuan">Tujuan</a>
            <a class="collapse-item" href="<?= base_url(); ?>index.php/dashboard/tentang/struktur_organisasi">Struktur Organisasi</a>
            <a class="collapse-item" href="<?= base_url(); ?>index.php/dashboard/tentang/tugas_pokok">Tugas Pokok</a>
            <a class="collapse-item" href="<?= base_url(); ?>index.php/dashboard/tentang/fungsi">Fungsi</a>
            <a class="collapse-item" href="<?= base_url(); ?>index.php/dashboard/tentang/program_sasaran">Program Sasaran</a>
            <a class="collapse-item" href="<?= base_url(); ?>index.php/dashboard/tentang/kegiatan">Kegiatan</a>
          </div>
        </div>
      </li>

      <?php if ($title == 'Layanan') : ?>
      <li class="nav-item active">
      <?php else : ?>
      <li class="nav-item">
      <?php endif; ?>
        <a class="nav-link" href="<?= base_url(); ?>index.php/dashboard/layanan/index">
          <i class="fas fa-cog"></i>
          <span>Layanan</span></a>
      </li>

      <!-- Nav Item - Download -->
      <?php if ($title == 'Download') : ?>
      <li class="nav-item active">
      <?php else : ?>
      <li class="nav-item">
      <?php endif; ?>
        <a class="nav-link" href="<?= base_url(); ?>index.php/dashboard/download/index">
          <i class="fas fa-file-download"></i>
          <span>Download</span></a>
      </li>

      <!-- Nav Item - Regulasi -->
      <?php if ($title == 'Regulasi') : ?>
      <li class="nav-item active">
      <?php else : ?>
      <li class="nav-item">
      <?php endif; ?>
        <a class="nav-link" href="<?= base_url(); ?>index.php/dashboard/regulasi/index">
          <i class="fas fa-gavel"></i>
          <span>Regulasi</span></a>
      </li>

      <!-- Nav Item - Artikel & Event -->
      <?php if ($title == 'Artikel / Event') : ?>
      <li class="nav-item active">
      <?php else : ?>
      <li class="nav-item">
      <?php endif; ?>
        <a class="nav-link" href="<?= base_url(); ?>index.php/dashboard/artikel_event/index">
          <i class="fas fa-newspaper"></i>
          <span>Artikel & Event</span></a>
      </li>

      <!-- Nav Item - Video Tour -->
      <?php if ($title == 'Video Tour') : ?>
      <li class="nav-item active">
      <?php else : ?>
      <li class="nav-item">
      <?php endif; ?>
        <a class="nav-link" href="<?= base_url(); ?>index.php/dashboard/video_tour/index">
          <i class="fas fa-play-circle"></i>
          <span>Video Tour</span></a>
      </li>

      <!-- Nav Item - Galeri -->
      <?php if ($title == 'Galeri') : ?>
      <li class="nav-item active">
      <?php else : ?>
      <li class="nav-item">
      <?php endif; ?>
        <a class="nav-link" href="<?= base_url(); ?>index.php/dashboard/galeri/index">
          <i class="fas fa-image"></i>
          <span>Galeri</span></a>
      </li>

      <!-- Nav Item - Weblink -->
      <?php if ($title == 'Weblink') : ?>
      <li class="nav-item active">
      <?php else : ?>
      <li class="nav-item">
      <?php endif; ?>
        <a class="nav-link" href="<?= base_url(); ?>index.php/dashboard/weblink/index">
          <i class="fas fa-link"></i>
          <span>Weblink</span></a>
      </li>

      <!-- Nav Item - FAQ -->
      <?php if ($title == 'FAQ') : ?>
      <li class="nav-item active">
      <?php else : ?>
      <li class="nav-item">
      <?php endif; ?>
        <a class="nav-link" href="<?= base_url(); ?>index.php/dashboard/faq/index">
          <i class="fas fa-question-circle"></i>
          <span>FAQ</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        User
      </div>

      <!-- Nav Item - Logs -->
      <?php if ($title == 'Logs') : ?>
      <li class="nav-item active">
      <?php else : ?>
      <li class="nav-item">
      <?php endif; ?>
        <a class="nav-link" href="<?= base_url(); ?>index.php/dashboard/logs/index">
          <i class="fas fa-table"></i>
          <span>Logs</span></a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          PENGUNJUNG <iframe src="<?= base_url(); ?>counter/hit_counter" frameborder="0" style="height: 58px;"></iframe>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">


          <!-- Dropdown - Messages -->
          <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Cari..." aria-label="Search" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                      <i class="fas fa-search fa-sm"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </li>
            

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="d-none d-lg-inline text-gray-600 small piped"><?= $this->session->get_userdata()['fullname'];?></span>
                <img class="img-profile rounded-circle" src="<?= base_url(); ?>assets/images/logo-uin.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?= base_url('index.php/dashboard/logs/index');?>">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item tombol-logout" href="<?= base_url('index.php/dashboard/login/logout');?>">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->