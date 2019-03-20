<!DOCTYPE html>
<html class="no-js kingster-mmenu-right">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?= ucfirst($title) ?></title>

    <!-- CSS -->  
        <link rel="stylesheet" href="<?= base_url()?>/assets/plugins/goodlayers-core/plugins/combine/style.css" type="text/css" media="all">  
        <link rel="stylesheet" href="<?= base_url()?>/assets/plugins/goodlayers-core/include/css/page-builder.css" type="text/css" media="all">  
        <link rel="stylesheet" href="<?= base_url()?>/assets/plugins/revslider/public/assets/css/settings.css" type="text/css" media="all">  
        <link rel="stylesheet" href="<?= base_url()?>/assets/css/style-core.css" type="text/css" media="all">  
        <link rel="stylesheet" href="<?= base_url()?>/assets/css/kingster-style-custom.css" type="text/css" media="all"> 

    <!-- Custom Google Web Font -->  
        <link rel="stylesheet" id="redux-google-fonts-be_themes_data-css" href="http://fonts.googleapis.com/css?family=Montserrat%3A700%2C400%7CCrimson+Text%3A400italic%7CRaleway%3A400%2C600%7CSource+Sans+Pro%3A400&subset=latin&ver=1428407938" type="text/css" media="all">

</head>
<body class="home page-template-default page page-id-2039 gdlr-core-body woocommerce-no-js tribe-no-js kingster-body kingster-body-front kingster-full  kingster-with-sticky-navigation  kingster-blockquote-style-1 gdlr-core-link-to-lightbox">
<!-- Mobile -->
    <div class="kingster-mobile-header-wrap">
        <div class="kingster-mobile-header kingster-header-background kingster-style-slide kingster-sticky-mobile-navigation " id="kingster-mobile-header">
            <div class="kingster-mobile-header-container kingster-container clearfix">
                <div class="kingster-logo  kingster-item-pdlr">
                    <div class="kingster-logo-inner">
                        <a class="" href="index.php"><img src="<?= base_url();?>/assets/images/logo-upt-perpus-uin.png" alt="" /></a>
                    </div>
                </div>
                <div class="kingster-mobile-menu-right">
                    <div class="kingster-main-menu-search" id="kingster-mobile-top-search"><i class="fa fa-search"></i></div>
                    <div class="kingster-top-search-wrap">
                        <div class="kingster-top-search-close"></div>
                        <div class="kingster-top-search-row">
                            <div class="kingster-top-search-cell">
                                <form role="search" method="get" class="search-form" action="#">
                                    <input type="text" class="search-field kingster-title-font" placeholder="Search..." value="" name="s">
                                    <div class="kingster-top-search-submit"><i class="fa fa-search"></i></div>
                                    <input type="submit" class="search-submit" value="Search">
                                    <div class="kingster-top-search-close"><i class="icon_close"></i></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="kingster-mobile-menu"><a class="kingster-mm-menu-button kingster-mobile-menu-button kingster-mobile-button-hamburger" href="#kingster-mobile-menu"><span></span></a>
                        <div class="kingster-mm-menu-wrap kingster-navigation-font" id="kingster-mobile-menu" data-slide="right">
                            <ul id="menu-main-navigation" class="m-menu">
                                <li class="menu-item menu-item-home <?= ( $title == "homepage") ? 'current-menu-item' : '' ; ?> menu-item-has-children"><a href="<?= base_url(); ?>">Beranda</a>
                                </li>
                                <li class="menu-item <?= ( $title == "tentang") ? 'current-menu-item' : '' ; ?> menu-item-has-children"><a href="<?= site_url("homepage/");?>tentang">Tentang</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="about-us.html">Visi</a></li>
                                        <li class="menu-item"><a href="gallery.html">Misi</a></li>
                                        <li class="menu-item"><a href="price-table.html">Tujuan</a></li>
                                        <li class="menu-item"><a href="maintenance.html">Struktur Organisasi</a></li>
                                        <li class="menu-item"><a href="maintenance.html">Tupoksi</a></li>
                                        <li class="menu-item"><a href="coming-soon.html">Program dan Sasaran</a></li>
                                        <li class="menu-item"><a href="coming-soon.html">Kegiatan</a></li>
                                        <li class="menu-item"><a href="404.html">404 Page</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item <?= ( $title == "layanan") ? 'current-menu-item' : '' ; ?> menu-item-has-children"><a href="<?= site_url("homepage/");?>layanan">Layanan</a>
                                </li>
                                <li class="menu-item <?= ( $title == "koleksi") ? 'current-menu-item' : '' ; ?> menu-item-has-children"><a href="http://opac.ar-raniry.ac.id">Koleksi</a>
                                </li>
                                <li class="menu-item <?= ( $title == "regulasi") ? 'current-menu-item' : '' ; ?> menu-item-has-children"><a href="<?= site_url("homepage/");?>regulasi">Regulasi</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="course-list-1.html">Undang-undang</a></li>
                                        <li class="menu-item"><a href="course-list-2.html">Peraturan</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item <?= ( $title == "unduh") ? 'current-menu-item' : '' ; ?> menu-item-has-children"><a href="<?= site_url("homepage/")?>">Unduh</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-has-children"><a></a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="bachelor-of-science-in-business-administration.html">Business Administration</a></li>
                                                <li class="menu-item"><a href="school-of-law.html">School Of Law</a></li>
                                                <li class="menu-item"><a href="engineering.html">Engineering</a></li>
                                                <li class="menu-item"><a href="medicine.html">Medicine</a></li>
                                                <li class="menu-item"><a href="art-science.html">Art &#038; Science</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children"><a href="#">Graduate Program</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="hospitality-management.html">Hospitality Management</a></li>
                                                <li class="menu-item"><a href="physics.html">Physics</a></li>
                                                <li class="menu-item"><a href="#">Chemistry</a></li>
                                                <li class="menu-item"><a href="#">Music</a></li>
                                                <li class="menu-item"><a href="#">Computer Science</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children"><a href="#">Resources</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="bachelor-of-science-in-business-administration.html">Department Page</a></li>
                                                <li class="menu-item"><a href="finance.html">Major Page</a></li>
                                                <li class="menu-item"><a href="finance-faculty.html">Faculty Page</a></li>
                                                <li class="menu-item"><a href="john-hagensy-phd.html">Single Instructor</a></li>
                                                <li class="menu-item"><a href="introduction-to-financial-accounting.html">Single Course</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item"><a href="#">Logo</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item <?= ( $title == "galeri") ? 'current-menu-item' : '' ; ?> "><a href="<?= site_url("homepage/");?>galeri">Galeri</a></li>
                                <li class="menu-item <?= ( $title == "situs") ? 'current-menu-item' : '' ; ?> "><a href="<?= site_url("homepage/");?>situs">Situs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Nav TOP -->
    <div class="kingster-body-outer-wrapper">
        <div class="kingster-body-wrapper clearfix  kingster-with-frame">
            <div class="kingster-top-bar">
                <div class="kingster-top-bar-background"></div>
                <div class="kingster-top-bar-container kingster-container ">
                    <div class="kingster-top-bar-container-inner clearfix">
                        <div class="kingster-top-bar-left kingster-item-pdlr"><i class="fa fa-envelope-open-o" id="i_fd84_0"></i> UPT-Perpustakaan@UIN-Ar-raniry.edu <i class="fa fa-phone" id="i_fd84_1"></i> +62-3435-2356-222</div>
                        <div class="kingster-top-bar-right kingster-item-pdlr">
                            <ul id="kingster-top-bar-menu" class="sf-menu kingster-top-bar-menu kingster-top-bar-right-menu">
                                <li class="menu-item kingster-normal-menu"><a href="#">Alumni</a></li>
                                <li class="menu-item kingster-normal-menu"><a href="#">Kalender</a></li>
                                <li class="menu-item kingster-normal-menu"><a href="#">Opac</a></li>
                            </ul>
                            <div class="kingster-top-bar-right-social"></div><a class="kingster-top-bar-right-button" href="#" target="_blank">FAQ</a></div>
                    </div>
                </div>
            </div>

<!-- Desktop -->
    <header class="kingster-header-wrap kingster-header-style-plain  kingster-style-menu-right kingster-sticky-navigation kingster-style-fixed" data-navigation-offset="75px">
        <div class="kingster-header-background"></div>
        <div class="kingster-header-container  kingster-container">
            <div class="kingster-header-container-inner clearfix">
                <div class="kingster-logo  kingster-item-pdlr">
                    <div class="kingster-logo-inner">
                        <a class="" href="index.html"><img src="<?= base_url();?>/assets/images/logo-upt-perpus-uin.png" alt="" /></a>
                    </div>
                </div>
                <div class="kingster-navigation kingster-item-pdlr clearfix ">
                    <div class="kingster-main-menu" id="kingster-main-menu">
                        <ul id="menu-main-navigation-1" class="sf-menu">
                            <li class="menu-item menu-item-home <?= ( $title == "homepage") ? 'current-menu-item' : '' ; ?> menu-item-has-children kingster-normal-menu"><a href="<?= base_url();?>" class="sf-with-ul-pre sf-with-ul">Beranda</a>
                            </li>
                            <li class="menu-item <?= ( $title == "tentang") ? 'current-menu-item' : '' ; ?> menu-item-has-children kingster-normal-menu"><a href="<?= site_url("homepage/");?>tentang" class="sf-with-ul-pre">Tentang</a>
                                <ul class="sub-menu">
                                    <li class="menu-item" data-size="60"><a href="<?= site_url('homepage/');?>tentang">Visi</a></li>
                                    <li class="menu-item" data-size="60"><a href="<?= site_url('homepage/');?>tentang">Misi</a></li>
                                    <li class="menu-item" data-size="60"><a href="<?= site_url('homepage/');?>tentang">Tujuan</a></li>
                                    <li class="menu-item" data-size="60"><a href="<?= site_url('homepage/');?>tentang">Struktur Organisasi</a></li>
                                    <li class="menu-item" data-size="60"><a href="<?= site_url('homepage/');?>tentang">Tupoksi</a></li>
                                    <li class="menu-item" data-size="60"><a href="<?= site_url('homepage/');?>tentang">Program Sasaran</a></li>
                                    <li class="menu-item" data-size="60"><a href="<?= site_url('homepage/');?>tentang">Kegiatan</a></li>
                                </ul>
                            </li>
                            <li class="menu-item <?= ( $title == "layanan") ? 'current-menu-item' : '' ; ?> menu-item-has-children kingster-normal-menu"><a href="<?= site_url("homepage/");?>layanan" class="sf-with-ul-pre">Layanan</a>
                            </li>
                            <li class="menu-item <?= ( $title == "koleksi") ? 'current-menu-item' : '' ; ?> menu-item-has-children"><a href="http://opac.ar-raniry.ac.id">Koleksi</a>
                            </li>
                            <li class="menu-item <?= ( $title == "regulasi") ? 'current-menu-item' : '' ; ?> menu-item-has-children kingster-normal-menu"><a href="<?= site_url("homepage/");?>regulasi" class="sf-with-ul-pre">Regulasi</a>
                                <ul class="sub-menu">
                                    <li class="menu-item " data-size="60"><a href="course-list-1.html">Policy</a></li>
                                    <li class="menu-item" data-size="60"><a href="course-list-2.html">Undang-undang peraturan Perpustakaan</a></li>
                                </ul>
                            </li>
                            <li class="menu-item <?= ( $title == "unduh") ? 'current-menu-item' : '' ; ?>  kingster-mega-menu"><a href="<?= site_url("homepage/");?>unduh">Unduh</a>
                                <div class="sf-mega sf-mega-full megaimg">
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-has-children" data-size="15">
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="bachelor-of-science-in-business-administration.html">Business Administration</a></li>
                                                <li class="menu-item"><a href="school-of-law.html">School Of Law</a></li>
                                                <li class="menu-item"><a href="engineering.html">Engineering</a></li>
                                                <li class="menu-item"><a href="medicine.html">Medicine</a></li>
                                                <li class="menu-item"><a href="art-science.html">Art &#038; Science</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children" data-size="15">
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="hospitality-management.html">Hospitality Management</a></li>
                                                <li class="menu-item"><a href="physics.html">Physics</a></li>
                                                <li class="menu-item"><a href="#">Chemistry</a></li>
                                                <li class="menu-item"><a href="#">Music</a></li>
                                                <li class="menu-item"><a href="#">Computer Science</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children" data-size="15">
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="bachelor-of-science-in-business-administration.html">Department Page</a></li>
                                                <li class="menu-item"><a href="finance.html">Major Page</a></li>
                                                <li class="menu-item"><a href="finance-faculty.html">Faculty Page</a></li>
                                                <li class="menu-item"><a href="john-hagensy-phd.html">Single Instructor</a></li>
                                                <li class="menu-item"><a href="introduction-to-financial-accounting.html">Single Course</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item" data-size="15">
                                            <div class="kingster-mega-menu-section-content"><img src="<?= base_url();?>/assets/uploads/galleries/" id="img_fd84_0" alt="" /> <span id="span_fd84_0">Academic offerings include 95 majors, 86 minors, and more than 100 in-major specializations</span></div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item <?= ( $title == "galeri") ? 'current-menu-item' : '' ; ?> kingster-mega-menu"><a href="<?= site_url("homepage/");?>galeri">Galeri</a>
                                <div class="sf-mega sf-mega-full megaimg">
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-has-children" data-size="15"><a class="sf-with-ul-pre">Album Kegiatan</a>
                                            <ul class="sub-menu">
                                                <img src="<?= base_url();?>/assets/uploads/galleries/g-a-2.jpg">
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children" data-size="15"><a href="#" class="sf-with-ul-pre">Album Event</a>
                                            <ul class="sub-menu">
                                                <img src="<?= base_url();?>/assets/uploads/galleries/g-a-6.jpg">
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children" data-size="15"><a href="#" class="sf-with-ul-pre">Album Perpustakaan</a>
                                            <ul class="sub-menu">
                                                <img src="<?= base_url();?>/assets/uploads/galleries/g-a-1.jpg">
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children" data-size="15"><a href="#" class="sf-with-ul-pre">Video Tour</a>
                                            <ul class="sub-menu">
                                                <img src="<?= base_url();?>/assets/uploads/galleries/g-a-3.jpg">
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item <?= ( $title == "situs") ? 'current-menu-item' : '' ; ?> kingster-normal-menu"><a href="<?= site_url("homepage/");?>situs">Situs</a></li>
                            

                        </ul>
                        <div class="kingster-navigation-slide-bar" id="kingster-navigation-slide-bar"></div>
                    </div>
                    <div class="kingster-main-menu-right-wrap clearfix ">
                        <div class="kingster-main-menu-search" id="kingster-top-search"><i class="icon_search"></i></div>
                        <div class="kingster-top-search-wrap">
                            <div class="kingster-top-search-close"></div>
                            <div class="kingster-top-search-row">
                                <div class="kingster-top-search-cell">
                                    <form role="search" method="get" class="search-form" action="#">
                                        <input type="text" class="search-field kingster-title-font" placeholder="Cari..." value="" name="s">
                                        <div class="kingster-top-search-submit"><i class="fa fa-search"></i></div>
                                        <input type="submit" class="search-submit" value="Search">
                                        <div class="kingster-top-search-close"><i class="icon_close"></i></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>