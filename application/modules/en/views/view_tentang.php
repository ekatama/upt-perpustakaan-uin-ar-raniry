<div class="kingster-page-title-wrap  kingster-style-medium kingster-center-align">
    <div class="kingster-header-transparent-substitute"></div>
    <div class="kingster-page-title-overlay"></div>
    <div class="kingster-page-title-container kingster-container">
        <div class="kingster-page-title-content kingster-item-pdlr">
            <div class="kingster-page-caption">Information about UIN Ar-Raniry library</div>
            <h1 class="kingster-page-title">About</h1>
        </div>
    </div>
</div>

<div class="kingster-breadcrumbs">
    <div class="kingster-breadcrumbs-container kingster-container">
        <div class="kingster-breadcrumbs-item kingster-item-pdlr">
            <span property="itemListElement" typeof="ListItem">
                <a property="item" typeof="WebPage" title="Kembali ke Beranda" href="<?= site_url("homepage");?>" class="home">
                <span property="name">Home</span></a>
                <meta property="position" content="1">
            </span>
            <!-- Module item -->
                <?php if ($_GET['module'] == 'about'): ?>
                    &gt;
                    <span property="itemListElement" typeof="ListItem">
                        <span property="name">About</span>
                        <meta property="position" content="2">
                    </span>
                <?php endif ?>
                <?php if ($_GET['module'] == 'activities'): ?>
                    &gt;
                    <span property="itemListElement" typeof="ListItem">
                        <span property="name">Activities</span>
                        <meta property="position" content="2">
                    </span>
                <?php endif ?>
                <?php if ($_GET['module'] == 'vision'): ?>
                    &gt;
                    <span property="itemListElement" typeof="ListItem">
                        <span property="name">Visions</span>
                        <meta property="position" content="2">
                    </span>
                <?php endif ?>
                <?php if ($_GET['module'] == 'mision'): ?>
                    &gt;
                    <span property="itemListElement" typeof="ListItem">
                        <span property="name">Misions</span>
                        <meta property="position" content="2">
                    </span>
                <?php endif ?>
                <?php if ($_GET['module'] == 'goals'): ?>
                    &gt;
                    <span property="itemListElement" typeof="ListItem">
                        <span property="name">Goals</span>
                        <meta property="position" content="2">
                    </span>
                <?php endif ?>
                <?php if ($_GET['module'] == 'structure'): ?>
                    &gt;
                    <span property="itemListElement" typeof="ListItem">
                        <span property="name">Structure</span>
                        <meta property="position" content="2">
                    </span>
                <?php endif ?>
                <?php if ($_GET['module'] == 'jobdesk'): ?>
                    &gt;
                    <span property="itemListElement" typeof="ListItem">
                        <span property="name">Jobdesk</span>
                        <meta property="position" content="2">
                    </span>
                <?php endif ?>
                <?php if ($_GET['module'] == 'program'): ?>
                    &gt;
                    <span property="itemListElement" typeof="ListItem">
                        <span property="name">Target Program</span>
                        <meta property="position" content="2">
                    </span>
                <?php endif ?>
                <?php if ($_GET['module'] == 'program'): ?>
                    &gt;
                    <span property="itemListElement" typeof="ListItem">
                        <span property="name">Target Program</span>
                        <meta property="position" content="2">
                    </span>
                <?php endif ?>
        </div>
    </div>
</div>
<div class="kingster-page-wrapper" id="kingster-page-wrapper">
    <div class="gdlr-core-page-builder-body">

    <?php if ($_GET['module'] == 'about'): ?>
        
    <!-- Tentang -->
        <div class="gdlr-core-pbf-wrapper " id="div_983a_3">
            <div class="gdlr-core-pbf-background-wrap"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" id="div_983a_4">
                                        <div class="gdlr-core-title-item-title-wrap clearfix">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_983a_0">About</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-left-align">
                                        <div class="gdlr-core-divider-container" id="div_983a_5">
                                            <div class="gdlr-core-divider-line gdlr-core-skin-divider" id="div_983a_6"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-40">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                        <div class="gdlr-core-text-box-item-content" id="div_983a_7">
                                            <p><?= $tentang['content']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php endif ?>


    <?php if ($_GET['module'] == 'activities'): ?>
        
    <!-- Kegiatan -->
            <div class="gdlr-core-pbf-wrapper " id="div_1dd7_79">
                <div class="gdlr-core-pbf-background-wrap" id="div_1dd7_80"></div>
                <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                    <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-tab-item gdlr-core-js gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-tab-style1-horizontal gdlr-core-item-pdlr">
                                
                                <div class="gdlr-core-tab-item-content-image-wrap clearfix">
                                    <div class="gdlr-core-tab-item-image  gdlr-core-active" data-tab-id="1">
                                            <span class="gdlr-core-tab-item-image-background" id="span_1dd7_1"></span>
                                    </div>
                                </div>

                                <div class="gdlr-core-tab-item-wrap">
                                    <div class="gdlr-core-tab-item-title-wrap clearfix gdlr-core-title-font">
                                        <div class="gdlr-core-tab-item-title  gdlr-core-active" data-tab-id="1">Activities</div>
                                    </div>
                                    <div class="gdlr-core-tab-item-content-wrap clearfix">
                                        <div class="gdlr-core-tab-item-content  gdlr-core-active" data-tab-id="1" >
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top">
                                                <div class="gdlr-core-title-item-title-wrap ">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_24">Discuss one of the routine activities<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                            </div>
                                            <p><?= $kegiatan['content'];?></p>  
                                            <div class="button">
                                                <a href="<?= site_url("en/");?>kegiatan" style="color: #3db166">See all activities</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    <?php endif ?>


    <?php if ($_GET['module'] == 'vision'): ?>
        
    <!-- Visi -->
        <div class="gdlr-core-pbf-wrapper " id="div_983a_3">
            <div class="gdlr-core-pbf-background-wrap"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" id="div_983a_4">
                                        <div class="gdlr-core-title-item-title-wrap clearfix">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_983a_0">Visions</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-left-align">
                                        <div class="gdlr-core-divider-container" id="div_983a_5">
                                            <div class="gdlr-core-divider-line gdlr-core-skin-divider" id="div_983a_6"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-40">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                        <div class="gdlr-core-text-box-item-content" id="div_983a_7">
                                            <p><?= $visi['content'];  ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php endif ?>


    <?php if ($_GET['module'] == 'mision'): ?>
        
    <!-- Misi -->
        <div class="gdlr-core-pbf-wrapper " id="div_983a_3">
            <div class="gdlr-core-pbf-background-wrap"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" id="div_983a_4">
                                        <div class="gdlr-core-title-item-title-wrap clearfix">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_983a_0">Misions</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-left-align">
                                        <div class="gdlr-core-divider-container" id="div_983a_5">
                                            <div class="gdlr-core-divider-line gdlr-core-skin-divider" id="div_983a_6"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-40">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                        <div class="gdlr-core-text-box-item-content" id="div_983a_7">
                                            <p><?= $misi['content'];  ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php endif ?>    


    <?php if ($_GET['module'] == 'goals'): ?>
        
    <!-- Tujuan -->
            <div class="gdlr-core-pbf-wrapper " id="div_983a_3">
                <div class="gdlr-core-pbf-background-wrap"></div>
                <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                    <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                        <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" id="div_983a_4">
                                            <div class="gdlr-core-title-item-title-wrap clearfix">
                                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_983a_0">Goals</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-left-align">
                                            <div class="gdlr-core-divider-container" id="div_983a_5">
                                                <div class="gdlr-core-divider-line gdlr-core-skin-divider" id="div_983a_6"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-column gdlr-core-column-40">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                            <div class="gdlr-core-text-box-item-content" id="div_983a_7">
                                                <p><?= $tujuan['content'];  ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <?php endif ?>


    <?php if ($_GET['module'] == 'structure'): ?>
        
    <!-- Struktur Organisasi -->
            <div class="gdlr-core-pbf-wrapper " id="div_983a_3">
                <div class="gdlr-core-pbf-background-wrap"></div>
                <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                    <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                        <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" id="div_983a_4">
                                            <div class="gdlr-core-title-item-title-wrap clearfix">
                                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_983a_0">Organizational Structure</h3></div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-left-align">
                                            <div class="gdlr-core-divider-container" id="div_983a_5">
                                                <div class="gdlr-core-divider-line gdlr-core-skin-divider" id="div_983a_6"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-column gdlr-core-column-40">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                            <div class="gdlr-core-text-box-item-content" id="div_983a_7">
                                                <div class="gdlr-core-portfolio-thumbnail-image-wrap ">
                                                    <img src="<?= base_url();?>/assets/uploads/struktur/<?= $struktur['content'];?>" width="700" height="450"  alt="" />
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

    <?php endif ?>

    
    <?php if ($_GET['module'] == 'jobdesk'): ?>

    <!-- Tupoksi -->
            <div class="gdlr-core-pbf-wrapper " id="div_983a_3">
                <div class="gdlr-core-pbf-background-wrap"></div>
                <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                    <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                        <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" id="div_983a_4">
                                            <div class="gdlr-core-title-item-title-wrap clearfix">
                                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_983a_0">Jobdesk</h3></div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-left-align">
                                            <div class="gdlr-core-divider-container" id="div_983a_5">
                                                <div class="gdlr-core-divider-line gdlr-core-skin-divider" id="div_983a_6"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-column gdlr-core-column-20">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                            <div class="gdlr-core-text-box-item-content" id="div_983a_7">
                                                <h3>Main Tasks</h3>
                                                <?= $tugas['content'];?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-column gdlr-core-column-20">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                            <div class="gdlr-core-text-box-item-content" id="div_983a_8">
                                                <h3>Function</h3>
                                                <p><?= $fungsi['content'];?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
    <?php endif ?>
   
    <?php if ($_GET['module'] == 'program'): ?>

    <!-- Program Sasaran -->
        <div class="gdlr-core-pbf-wrapper " id="div_983a_3">
            <div class="gdlr-core-pbf-background-wrap"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" id="div_983a_4">
                                        <div class="gdlr-core-title-item-title-wrap clearfix">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_983a_0">Target Program</h3></div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-left-align">
                                        <div class="gdlr-core-divider-container" id="div_983a_5">
                                            <div class="gdlr-core-divider-line gdlr-core-skin-divider" id="div_983a_6"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-40">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                        <div class="gdlr-core-text-box-item-content" id="div_983a_7">
                                            <h3></h3>
                                            <p><?= $program['content'];?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    <?php endif ?>
    
    </div>
</div>