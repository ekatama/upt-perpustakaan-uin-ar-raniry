 <div class="kingster-page-title-wrap  kingster-style-medium kingster-center-align">
    <div class="kingster-header-transparent-substitute"></div>
    <div class="kingster-page-title-overlay"></div>
    <div class="kingster-page-title-container kingster-container">
        <div class="kingster-page-title-content kingster-item-pdlr">
            <div class="kingster-page-caption">Artikel, Kegiatan dan Event</div>
            <h1 class="kingster-page-title">Semua Berita</h1></div>
    </div>
</div>

<div class="kingster-breadcrumbs">
    <div class="kingster-breadcrumbs-container kingster-container">
        <div class="kingster-breadcrumbs-item kingster-item-pdlr"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Kembali ke Beranda" href="<?= site_url("homepage");?>" class="home"><span property="name">Beranda</span></a>
            <meta property="position" content="1">
            </span>&gt;<span property="itemListElement" typeof="ListItem"><span property="name">Kegiatan</span>
            <meta property="position" content="2">
            </span>
        </div>
    </div>
</div>



 <div class="kingster-page-wrapper" id="kingster-page-wrapper">
    <div class="kingster-content-container kingster-container">
        <div class=" kingster-sidebar-wrap clearfix kingster-line-height-0 kingster-sidebar-style-both">
            <div class=" kingster-sidebar-center kingster-column-45 kingster-line-height">
                <div class="gdlr-core-page-builder-body">
                    <div class="gdlr-core-pbf-section">
                        <div class="gdlr-core-pbf-section-container gdlr-core-container clearfix">
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-full" style="padding-bottom: 40px ;">

                                    <?php foreach ($kegiatan as $val ) : ?>
                                        <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                            <div class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-mglr gdlr-core-style-left">
                                                <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                    <a href="<?= site_url("homepage/");?>single_post/<?= $val['id']; ?>"><img src="<?= base_url();?>/assets/uploads/galleries/8-g.jpg" width="1100" height="490"  alt="" />
                                                    </a>
                                                </div>
                                                <div class="gdlr-core-blog-full-head clearfix">
                                                    <div class="gdlr-core-blog-full-head-right">
                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 28px ;font-weight: 800 ;letter-spacing: 0px ;">
                                                            <a href="<?= site_url("homepage/");?>single_post/<?= $val['id'];?>">
                                                                <?= $val['judul']; ?>
                                                            </a>
                                                        </h3>
                                                         <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                            <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><?= date("d M Y", strtotime($val['created_at'])) ; ?>
                                                            </span>
                                                            <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author">
                                                                <span class="gdlr-core-head"><?= $val['tanda'];  ?></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="gdlr-core-blog-content">
                                                    <?= word_limiter($val['konten'], 40); ?>
                                                    <div class="clear"></div>
                                                    <a class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle" href="<?= site_url("homepage/");?>single_post/<?= $val['id'];?>">
                                                        Baca selengkapnya
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>

                                    <div class="gdlr-core-pagination  gdlr-core-style-circle gdlr-core-left-align gdlr-core-item-pdlr">
                                        <!-- <span class='page-numbers'>
                                            <a class='page-numbers current'>
                                            </a>
                                        </span> -->
                                                <?= $this->pagination->create_links();?>
                                        <!-- <a class='page-numbers' href='page/2/index.html'>2</a> 
                                        <a class='page-numbers' href='page/3/index.html'>3</a>
                                        <a class="next page-numbers" href="page/2/index.html"></a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</div>


<!-- 
<div class="kingster-page-wrapper" id="kingster-page-wrapper"> 
    <div class="kingster-content-container kingster-container">
        <div class=" kingster-sidebar-wrap clearfix kingster-line-height-0 kingster-sidebar-style-both">
            <div class="gdlr-core-page-builder-body">
                <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                    <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                        <div class="kingster-page-wrapper" id="kingster-page-wrapper">
                            <div class="gdlr-core-page-builder-body">
                                <div class="gdlr-core-pbf-sidebar-wrapper ">
                                    <div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
                                        <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-40 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left" style="padding: 60px 10px 30px 0px;">
                                            <div class="gdlr-core-pbf-background-wrap" style="background-color: #f7f7f7 ;"></div>
                                            <div class="gdlr-core-pbf-sidebar-content-inner">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-full-with-frame" style="padding-bottom: 40px ;">
                                                        
                                                        <?php foreach ($kegiatan as $val) : ?>
                                                            <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                                                <div class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-mglr gdlr-core-style-left">
                                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                        <a href="<?= site_url("homepage/");?>single_post/<?= $val['id']; ?>"><img src="<?= base_url();?>/assets/uploads/galleries/8-g.jpg" width="900" height="500"  alt="" />
                                                                        </a>
                                                                    </div>
                                                                    <div class="gdlr-core-blog-full-frame gdlr-core-skin-e-background">
                                                                        <div class="gdlr-core-blog-full-head clearfix">
                                                                            <div class="gdlr-core-blog-full-head-right">
                                                                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 33px ;font-weight: 700 ;letter-spacing: 0px ;"><a href="<?= site_url("homepage/");?>single_post/<?= $val['id']; ?>" ><?= $val['judul']; ?></a></h3>
                                                                                <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                                    <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><?= date("d M Y", strtotime($val['created_at'])) ; ?>
                                                                                    </span>
                                                                                    <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author">
                                                                                        <span class="gdlr-core-head"><?= $val['tanda'];  ?></span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="gdlr-core-blog-content"><?= word_limiter($val['konten'], 40); ?>
                                                                            <div class="clear"></div><a class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle" href="<?= site_url("homepage/");?>single_post/<?= $val['id'];?>">Baca selengkapnya</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; ?>
  
                                                    <div class="gdlr-core-pagination  gdlr-core-style-round gdlr-core-left-align gdlr-core-item-pdlr">
                                                        <span aria-current='page'><?= $this->pagination->create_links();?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->



<!-- <div class="gdlr-core-pbf-wrapper " style="padding: 80px 0px 65px 0px;">
    <div class="gdlr-core-pbf-background-wrap"></div>
    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">

            <?php foreach ($kegiatan as $val) : ?>
                <div class="gdlr-core-pbf-column gdlr-core-column-20">
                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding-bottom: 20px;">
                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 33px ;">
                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-round" style="border-radius: 2px;-moz-border-radius: 2px;-webkit-border-radius: 2px;border-width: 0px;">
                                        <a class="gdlr-core-lightgallery gdlr-core-js " href="<?= site_url("homepage/");?>single_post/<?= $val['id']; ?>"><img src="<?= base_url();?>/assets/uploads/galleries/8-g.jpg" width="900" height="500"  alt="" /><span class="gdlr-core-image-overlay " style="border-radius: 2px;-moz-border-radius: 2px;-webkit-border-radius: 2px;"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding: 0px 20px;">
                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 18px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;">
                                            <a href="<?= site_url("homepage/");?>single_post/<?= $val['id']; ?>">
                                                <?= $val['judul']; ?>
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider" style="padding: 12px 0px;">
                                        <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><?= date("d M Y", strtotime($val['created_at'])) ; ?>
                                        </span>
                                        <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author">
                                            <span class="gdlr-core-head"><?= $val['tanda'];  ?></span>
                                        </span>
                                    </div>
                                </div>

                            </div>
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 2px ;">
                                    <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;text-transform: none ;color: #8f8f8f ;">
                                        <p><?= word_limiter($val['konten'], 22); ?></p>
                                    </div>

                                </div>
                            </div>
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"><a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href="<?= site_url("homepage/");?>single_post/<?= $val['id']; ?>" style="font-size: 16px ;font-weight: 400 ;letter-spacing: 0px ;color: #3db166 ;padding: 0px 0px 0px 0px;text-transform: none ;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;"><span class="gdlr-core-content" >Baca selengkapnya</span><i class="gdlr-core-pos-right arrow_right" style="font-size: 21px ;color: #3db166;"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div> -->