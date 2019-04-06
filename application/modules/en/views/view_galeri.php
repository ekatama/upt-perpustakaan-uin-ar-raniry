<div class="kingster-page-title-wrap  kingster-style-medium kingster-center-align">
    <div class="kingster-header-transparent-substitute"></div>
    <div class="kingster-page-title-overlay"></div>
    <div class="kingster-page-title-container kingster-container">
        <div class="kingster-page-title-content kingster-item-pdlr">
            <div class="kingster-page-caption">Event & Activity Albums</div>
            <h1 class="kingster-page-title">Galleries</h1></div>
    </div>
</div>
<div class="kingster-breadcrumbs">
    <div class="kingster-breadcrumbs-container kingster-container">
        <div class="kingster-breadcrumbs-item kingster-item-pdlr"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Kembali ke Beranda" href="<?= site_url("homepage");?>" class="home"><span property="name">Home</span></a>
            <meta property="position" content="1">
            </span>&gt;<span property="itemListElement" typeof="ListItem"><span property="name">Galleries</span>
            <meta property="position" content="2">
            </span>
        </div>
    </div>
</div>
<div class="kingster-page-wrapper" id="kingster-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-wrapper ">
            <div class="gdlr-core-pbf-background-wrap" style="background-color: #f5f5f5 ;"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-portfolio-item gdlr-core-item-pdb clearfix  gdlr-core-portfolio-item-style-grid" style="padding-bottom: 10px;">

                            <div class="filter light-filter clearfix gdlr-core-filterer-wrap gdlr-core-js  gdlr-core-item-pdlr gdlr-core-style-text gdlr-core-center-align">
                                <ul>
                                    <li><a href="#" data-filter="*">All</a></li>
                                    <?php foreach ($album as $val) : ?>
                                        <li><a href="#" data-filter=".album-<?= $val['id']; ?>" ><?= $val['name'];?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>   

                            <div class="gdlr-core-portfolio-item-holder gdlr-core-js-2 filter-container clearfix" data-layout="fitrows">
                                <?php foreach ($album as $val) : ?>
                                    <div class="gdlr-core-item-list album-<?= $val['id'];?> gdlr-core-item-pdlr gdlr-core-column-15 ">
                                        <div class="gdlr-core-portfolio-grid  gdlr-core-left-align gdlr-core-style-with-frame gdlr-core-js" data-sync-height="portfolio-item-1">
                                            <div class="gdlr-core-portfolio-grid-frame gdlr-core-skin-e-background" style="opacity: 1 ;"></div>
                                            <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image  gdlr-core-style-title-icon">
                                                <div class="gdlr-core-portfolio-thumbnail-image-wrap  gdlr-core-zoom-on-hover"><img src="<?= base_url();?>/assets/uploads/galleries/album-7.jpg" width="700" height="450"  alt="" /><span class="gdlr-core-image-overlay  gdlr-core-portfolio-overlay gdlr-core-image-overlay-center-icon gdlr-core-js">
                                                    <span class="gdlr-core-image-overlay-content" >
                                                        <span class="gdlr-core-portfolio-title gdlr-core-title-font " style="font-size: 18px ;font-weight: 400 ;letter-spacing: 1px ;text-transform: none ;">
                                                            <a href="#"><?= $val['name'];?></a>
                                                        </span>
                                                        <span class="gdlr-core-portfolio-icon-wrap"><a class="gdlr-core-lightgallery gdlr-core-js "  href="<?= base_url();?>/assets/uploads/galleries/album-7.jpg" data-lightbox-group="gdlr-core-img-group-1"><i class="gdlr-core-portfolio-icon arrow_expand" ></i></a>
                                                        </span>
                                                    </span>
                                                </span>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-portfolio-content-wrap gdlr-core-skin-divider">
                                                <h3 class="gdlr-core-portfolio-title gdlr-core-skin-title" style="font-size: 21px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;"></h3><span class="gdlr-core-portfolio-info gdlr-core-portfolio-info-tag gdlr-core-info-font gdlr-core-skin-caption"><?= $val['name']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>