<div class="kingster-page-wrapper" id="kingster-page-wrapper">
    <div class="kingster-blog-title-wrap kingster-style-custom kingster-feature-image" style="background-image: url(<?= base_url();?>/assets/uploads/galleries/g-a-4.jpg);">
        <div class="kingster-header-transparent-substitute"></div>
        <div class="kingster-blog-title-overlay" style="opacity: 0.01 ;"></div>
        <div class="kingster-blog-title-bottom-overlay"></div>
        <div class="kingster-blog-title-container kingster-container">
            <div class="kingster-blog-title-content kingster-item-pdlr" style="padding-top: 400px ;padding-bottom: 80px ;">
                <header class="kingster-single-article-head clearfix">
                    <div class="kingster-single-article-date-wrapper  post-date updated">
                        <div class="kingster-single-article-date-day"><?= date("d", strtotime($single_post['created_at'])) ; ?></div>
                        <div class="kingster-single-article-date-month"><?= date("M", strtotime($single_post['created_at'])); ?></div>
                    </div>
                    <div class="kingster-single-article-head-right">
                        <h1 class="kingster-single-article-title"><?= $single_post['title']; ?></h1>
                        <div class="kingster-blog-info-wrapper">
                            <div class="kingster-blog-info kingster-blog-info-font kingster-blog-info-author vcard author post-author "><span class="kingster-head"><a href="<?= site_url("homepage/");?>kegiatan"><?= $single_post['tag'] ?></a></span><span class="kingster-head">/</span><span class="kingster-head">By Admin</span></div>
                        </div>
                    </div>
                </header>
            </div>
        </div>
    </div>
    <div class="kingster-breadcrumbs">
        <div class="kingster-breadcrumbs-container kingster-container">
            <div class="kingster-breadcrumbs-item kingster-item-pdlr"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Kembali ke Beranda" href="index.html" class="home"><span property="name">Home</span></a>
                <meta property="position" content="1">
                </span>&gt;<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Kembali ke Kegiatan" href="<?= site_url("homepage/");?>kegiatan" class="taxonomy category"><span property="name"><?= $single_post['tag']; ?></span></a>
                <meta property="position" content="2">
                </span>&gt;<span property="itemListElement" typeof="ListItem"><span property="name"><?= $single_post['title'];?></span>
                <meta property="position" content="3">
                </span>
            </div>
        </div>
    </div>
    <div class="kingster-content-container kingster-container">
        <div class=" kingster-sidebar-wrap clearfix kingster-line-height-0 kingster-sidebar-style-none">
            <div class=" kingster-sidebar-center kingster-column-60 kingster-line-height">
                <div class="kingster-content-wrap kingster-item-pdlr clearfix">
                    <div class="kingster-content-area">
                        <article id="post-1268" class="post-1268 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-post-format tag-news">
                            <div class="kingster-single-article clearfix">
                                <div class="kingster-single-article-content">
                                    <p><?= $single_post['content'];?></p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>