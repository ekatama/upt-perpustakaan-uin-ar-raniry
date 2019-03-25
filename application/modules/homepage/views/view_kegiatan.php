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
            <div class="gdlr-core-page-builder-body">
                <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                    <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                        <!-- Kegiatan -->
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
                                                                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 33px ;font-weight: 700 ;letter-spacing: 0px ;"><a href="<?= site_url("homepage/");?>single_post/<?= $val['id']; ?>" ><?= $val['title']; ?></a></h3>
                                                                                <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                                    <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><?= date("d M Y", strtotime($val['created_at'])) ; ?>
                                                                                    </span>
                                                                                    <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author">
                                                                                        <span class="gdlr-core-head"><?= $val['tag'];  ?></span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="gdlr-core-blog-content"><?= word_limiter($val['content'], 40); ?>
                                                                            <div class="clear"></div><a class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle" href="<?= site_url("homepage/");?>single_post/<?= $val['id']; ?>">Baca selengkapnya</a></div>
                                                                    </div>
                                                                </div>                                                            
                                                            </div>
                                                        <?php endforeach; ?>
                                                        
                                                            

                                                    <div class="gdlr-core-pagination  gdlr-core-style-round gdlr-core-left-align gdlr-core-item-pdlr">
                                                        <span aria-current='page' class='page-numbers current'>1</span>
                                                        <a class='page-numbers' href='page/2/<?= $links; ?>'>2</a>
                                                        <a class='page-numbers' href='page/3/<?= $links; ?>'>3</a>
                                                        <a class="next page-numbers" href="page/2/index.html"></a>
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
    </div>
</div>