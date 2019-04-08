 <div class="kingster-page-title-wrap  kingster-style-medium kingster-center-align">
    <div class="kingster-header-transparent-substitute"></div>
    <div class="kingster-page-title-overlay"></div>
    <div class="kingster-page-title-container kingster-container">
        <div class="kingster-page-title-content kingster-item-pdlr">
            <div class="kingster-page-caption">Articles, Activities and Events</div>
            <h1 class="kingster-page-title">All News</h1></div>
    </div>
</div>

<div class="kingster-breadcrumbs">
    <div class="kingster-breadcrumbs-container kingster-container">
        <div class="kingster-breadcrumbs-item kingster-item-pdlr"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Kembali ke Beranda" href="<?= site_url("en");?>" class="home"><span property="name">Home</span></a>
            <meta property="position" content="1">
            </span>&gt;<span property="itemListElement" typeof="ListItem"><span property="name">Activities</span>
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
                                                    <a href="<?= site_url("en/");?>single_post/<?= $val['id']; ?>"><img src="<?= base_url();?>/assets/uploads/artikel_event/<?= $val['cover'];?>" width="1100" height="490"  alt="" />
                                                    </a>
                                                </div>
                                                <div class="gdlr-core-blog-full-head clearfix">
                                                    <div class="gdlr-core-blog-full-head-right">
                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 28px ;font-weight: 800 ;letter-spacing: 0px ;">
                                                            <a href="<?= site_url("en/");?>single_post/<?= $val['id'];?>">
                                                                <?= $val['title']; ?>
                                                            </a>
                                                        </h3>
                                                         <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                            <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><?= date("d M Y", strtotime($val['created_at'])) ; ?>
                                                            </span>
                                                            <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author">
                                                                <span class="gdlr-core-head"><?= $val['tag'];  ?></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="gdlr-core-blog-content">
                                                    <?= word_limiter($val['content'], 40); ?>
                                                    <div class="clear"></div>
                                                    <a class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle" href="<?= site_url("en/");?>single_post/<?= $val['id'];?>">
                                                        Read More
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>

                                    <div class="gdlr-core-pagination  gdlr-core-style-circle gdlr-core-left-align gdlr-core-item-pdlr">
                                        <?= $this->pagination->create_links();?>
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