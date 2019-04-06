<div class="kingster-page-title-wrap  kingster-style-medium kingster-center-align">
    <div class="kingster-header-transparent-substitute"></div>
    <div class="kingster-page-title-overlay"></div>
    <div class="kingster-page-title-container kingster-container">
        <div class="kingster-page-title-content kingster-item-pdlr">
            <div class="kingster-page-caption">Library Documents</div>
            <h1 class="kingster-page-title">Download</h1></div>
    </div>
</div>

<div class="kingster-breadcrumbs">
    <div class="kingster-breadcrumbs-container kingster-container">
        <div class="kingster-breadcrumbs-item kingster-item-pdlr"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Kembali ke Beranda" href="<?= site_url("homepage");?>" class="home"><span property="name">Home</span></a>
            <meta property="position" content="1">
            </span>&gt;<span property="itemListElement" typeof="ListItem"><span property="name">Download</span>
            <meta property="position" content="2">
            </span>
        </div>
    </div>
</div>

<div class="kingster-page-wrapper" id="kingster-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-wrapper " style="padding: 60px 0px 50px 0px;">
            <div class="gdlr-core-pbf-background-wrap"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">


                    <div class="gdlr-core-pbf-column gdlr-core-column-30">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 40px ;">
                                        
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 40px ;">
                                        <div class="gdlr-core-text-box-item-content" style="text-transform: none ;">
                                            <div style="overflow-x: auto;">
                                                <table style="min-width: 700px;">
                                                    <tbody>
                                                        <tr>
                                                            <th>No.</th>
                                                            <th>File Name</th>
                                                            <th>Categories</th>
                                                            <th>Download File</th>
                                                            
                                                        </tr>
                                                        <?php foreach ($unduh as $val) : ?>
                                                            <tr>
                                                                <td><?= $val['id']; ?></td>
                                                                <td><?= $val['title']; ?></td>    
                                                                <td><?= $val['categories']; ?></td>
                                                                <td>
                                                                    <a href="<?= base_url("homepage/downloading/");?><?=$val['id'];?>" class="gdlr-core-button  gdlr-core-button-solid gdlr-core-button-no-border">Download</a>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
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