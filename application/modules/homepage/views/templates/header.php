<!DOCTYPE html>
<html class="no-js kingster-menu-right">
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
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700%2C400" rel="stylesheet" property="stylesheet" type="text/css" media="all">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CABeeZee%3Aregular%2Citalic&amp;subset=latin%2Clatin-ext%2Cdevanagari&amp;ver=5.0.3' type='text/css' media='all' />

</head>
<body class="home page-template-default page page-id-2039 gdlr-core-body woocommerce-no-js tribe-no-js kingster-body kingster-body-front kingster-full  kingster-with-sticky-navigation  kingster-blockquote-style-1 gdlr-core-link-to-lightbox">
<!-- Mobile -->
    <div class="kingster-mobile-header-wrap">
        <div class="kingster-mobile-header kingster-header-background kingster-style-slide kingster-sticky-mobile-navigation " id="kingster-mobile-header">
            <div class="kingster-mobile-header-container kingster-container clearfix">
                <div class="kingster-logo  kingster-item-pdlr">
                    <div class="kingster-logo-inner">
                        <a class="" href="index.php"><img src="<?= base_url();?>/assets/images/logo-uin-indo.png" alt="" /></a>
                    </div>
                </div>
                <div class="kingster-mobile-menu-right">
                    <div class="kingster-main-menu-search" id="kingster-mobile-top-search"><i class="fa fa-search"></i></div>
                    <div class="kingster-top-search-wrap">
                        <div class="kingster-top-search-close"></div>
                        <div class="kingster-top-search-row">
                            <div class="kingster-top-search-cell">
                                <form role="search" method="get" class="search-form" action="<?= base_url("homepage/")?>search">
                                    <input type="text" class="search-field kingster-title-font" placeholder="Cari artikel, event..." name="search">
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
                                <li class="menu-item menu-item-home <?= ( $title == "homepage") ? 'current-menu-item' : '' ; ?> menu-item-has-children"><a href="<?= base_url("homepage/"); ?>">Beranda</a>
                                </li>
                                <li class="menu-item <?= ( $title == "tentang") ? 'current-menu-item' : '' ; ?> menu-item-has-children"><a href="<?= site_url("homepage/");?>tentang?module=tentang">Tentang</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="<?= site_url("homepage/");?>tentang?module=visi">Visi</a></li>
                                        <li class="menu-item"><a href="<?= site_url("homepage/");?>tentang?module=misi">Misi</a></li>
                                        <li class="menu-item"><a href="<?= site_url("homepage/");?>tentang?module=tujuan">Tujuan</a></li>
                                        <li class="menu-item"><a href="<?= site_url("homepage/");?>tentang?module=struktur">Struktur Organisasi</a></li>
                                        <li class="menu-item"><a href="<?= site_url("homepage/");?>tentang?module=tupoksi">Tupoksi</a></li>
                                        <li class="menu-item"><a href="<?= site_url("homepage/");?>tentang?module=program-sasaran">Program dan Sasaran</a></li>
                                        <li class="menu-item"><a href="<?= site_url("homepage/");?>tentang?module=kegiatan">Kegiatan</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item <?= ( $title == "layanan") ? 'current-menu-item' : '' ; ?> menu-item-has-children"><a href="<?= site_url("homepage/");?>layanan">Layanan</a>
                                </li>
                                <li class="menu-item <?= ( $title == "koleksi") ? 'current-menu-item' : '' ; ?> menu-item-has-children"><a href="http://opac.ar-raniry.ac.id">Koleksi</a>
                                </li>
                                <li class="menu-item <?= ( $title == "regulasi") ? 'current-menu-item' : '' ; ?> menu-item-has-children"><a href="<?= site_url("homepage/");?>regulasi?module=regulasi">Regulasi</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="<?= site_url("homepage/");?>regulasi?module=policy">Policy</a></li>
                                        <li class="menu-item"><a href="<?= site_url("homepage/");?>regulasi?module=uu-perpus">UU Peraturan Perpustakaan</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item <?= ( $title == "unduh") ? 'current-menu-item' : '' ; ?> menu-item-has-children"><a href="<?= site_url("homepage/")?>unduh">Unduh</a>
                                </li>
                                <li class="menu-item <?= ( $title == "galeri") ? 'current-menu-item' : '' ; ?> "><a href="<?= site_url("homepage/");?>galeri">Galeri</a></li>
                                <li class="menu-item <?= ( $title == "situs") ? 'current-menu-item' : '' ; ?> "><a href="<?= site_url("homepage/");?>situs">Situs</a></li>
                                <li><a title="Change to English" href="<?= site_url("en");?>">EN</a></li>
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
                        <div class="kingster-top-bar-left kingster-item-pdlr"><i class="fa fa-envelope-open-o" id="i_fd84_0"></i> library@ar-raniry.ac.id<i class="fa fa-phone" id="i_fd84_1"></i> 0651-7557325</div>
                        <div class="kingster-top-bar-right kingster-item-pdlr">
                            <ul id="kingster-top-bar-menu" class="sf-menu kingster-top-bar-menu kingster-top-bar-right-menu">
                                <li class="menu-item <?= ( $title == "situs") ? 'current-menu-item' : '' ; ?> "><a href="<?= site_url("homepage/");?>situs">Situs</a></li>
                            </ul>
                            <ul id="kingster-top-bar-menu" class="sf-menu kingster-top-bar-menu kingster-top-bar-right-menu">
                                <li class="menu-item <?= ( $title == "situs") ? 'current-menu-item' : '' ; ?> "><a href="<?= site_url("homepage/");?>faq">FAQ</a></li>
                            </ul>
                            <div class="kingster-top-bar-right-social"></div><a class="kingster-top-bar-right-button" title="Change to English" href="<?= site_url("en");?>">EN</a>
                        </div>
                    </div>
                </div>
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
                        <a class="" href="index.html"><img src="<?= base_url();?>/assets/images/logo-uin-indo.png" alt="" /></a>
                    </div>
                </div>
                <div class="kingster-navigation kingster-item-pdlr clearfix ">
                    <div class="kingster-main-menu" id="kingster-main-menu">
                        <ul id="menu-main-navigation-1" class="sf-menu">
                            <li class="menu-item menu-item-home <?= ( $title == "homepage") ? 'current-menu-item' : '' ; ?> menu-item-has-children kingster-normal-menu"><a href="<?= base_url("homepage/");?>" class="sf-with-ul-pre sf-with-ul">Beranda</a>
                            </li>
                            <li class="menu-item <?= ( $title == "tentang") ? 'current-menu-item' : '' ; ?> menu-item-has-children kingster-normal-menu"><a href="<?= site_url("homepage/");?>tentang?module=tentang" class="sf-with-ul-pre">Tentang</a>
                                <ul class="sub-menu">
                                    <li class="menu-item" data-size="60"><a href="<?= site_url('homepage/');?>tentang?module=visi">Visi</a></li>
                                    <li class="menu-item" data-size="60"><a href="<?= site_url('homepage/');?>tentang?module=misi">Misi</a></li>
                                    <li class="menu-item" data-size="60"><a href="<?= site_url('homepage/');?>tentang?module=tujuan">Tujuan</a></li>
                                    <li class="menu-item" data-size="60"><a href="<?= site_url('homepage/');?>tentang?module=struktur">Struktur Organisasi</a></li>
                                    <li class="menu-item" data-size="60"><a href="<?= site_url('homepage/');?>tentang?module=tupoksi">Tupoksi</a></li>
                                    <li class="menu-item" data-size="60"><a href="<?= site_url('homepage/');?>tentang?module=program-sasaran">Program Sasaran</a></li>
                                    <li class="menu-item" data-size="60"><a href="<?= site_url('homepage/');?>tentang?module=kegiatan">Kegiatan</a></li>
                                </ul>
                            </li>
                            <li class="menu-item <?= ( $title == "layanan") ? 'current-menu-item' : '' ; ?> menu-item-has-children kingster-normal-menu"><a href="<?= site_url("homepage/");?>layanan" class="sf-with-ul-pre">Layanan</a>
                            </li>
                            <li class="menu-item <?= ( $title == "koleksi") ? 'current-menu-item' : '' ; ?> menu-item-has-children"><a href="http://opac.ar-raniry.ac.id">Koleksi</a>
                            </li>
                            <li class="menu-item <?= ( $title == "regulasi") ? 'current-menu-item' : '' ; ?> menu-item-has-children kingster-normal-menu"><a href="<?= site_url("homepage/");?>regulasi?module=regulasi" class="sf-with-ul-pre">Regulasi</a>
                                <ul class="sub-menu">
                                    <li class="menu-item " data-size="60"><a href="<?= site_url("homepage/");?>regulasi?module=policy">Policy</a></li>
                                    <li class="menu-item" data-size="60"><a href="<?= site_url("homepage/");?>regulasi?module=uu-perpus">UU Peraturan Perpustakaan</a></li>
                                </ul>
                            </li>
                            <li class="menu-item <?= ( $title == "unduh") ? 'current-menu-item' : '' ; ?>  kingster-mega-menu"><a href="<?= site_url("homepage/");?>unduh">Unduh</a>
                            </li>
                            <li class="menu-item <?= ( $title == "galeri") ? 'current-menu-item' : '' ; ?> kingster-mega-menu"><a href="<?= site_url("homepage/");?>galeri">Galeri</a>
                                
                            </li>

                            <div class="kingster-main-menu-right-wrap clearfix ">
                              <div class="kingster-main-menu-search" id="kingster-top-search">
                                <i class="icon_search"></i>
                              </div>
                              <div class="kingster-top-search-wrap">
                                <div class="kingster-top-search-close"></div>
                                <div class="kingster-top-search-row">
                                  <div class="kingster-top-search-cell">
                                    <form role="search" method="get" class="search-form" action="<?= base_url("homepage/")?>search">
                                      <input type="text" class="search-field kingster-title-font" placeholder="Cari artikel, event..." name="search">
                                      <div class="kingster-top-search-submit"><i class="fa fa-search"></i></div>
                                      <input type="submit" class="search-submit" value="Search">
                                      <div class="kingster-top-search-close"><i class="icon_close"></i></div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </ul>
                        <div class="kingster-navigation-slide-bar" id="kingster-navigation-slide-bar"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
</html>