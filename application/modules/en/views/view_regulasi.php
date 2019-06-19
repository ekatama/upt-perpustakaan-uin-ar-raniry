<div class="kingster-page-title-wrap  kingster-style-medium kingster-center-align">
    <div class="kingster-header-transparent-substitute"></div>
    <div class="kingster-page-title-overlay"></div>
    <div class="kingster-page-title-container kingster-container">
        <div class="kingster-page-title-content kingster-item-pdlr">
            <div class="kingster-page-caption">Law & Policy</div>
            <h1 class="kingster-page-title">Regulation</h1></div>
    </div>
</div>

<div class="kingster-breadcrumbs">
    <div class="kingster-breadcrumbs-container kingster-container">
        <div class="kingster-breadcrumbs-item kingster-item-pdlr"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Back to Homepage" href="<?= site_url("homepage");?>" class="home"><span property="name">Home</span></a>
            <meta property="position" content="1">
            </span>&gt;<span property="itemListElement" typeof="ListItem"><span property="name">Regulation</span>
            <meta property="position" content="2">
            </span>
        </div>
    </div>
</div>

<div class="kingster-page-wrapper" id="kingster-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 50px 0px;">
            <div class="gdlr-core-pbf-background-wrap"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">

                    <div class="gdlr-core-pbf-column gdlr-core-column-30">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 35px ;">
                                        <div class="gdlr-core-title-item-title-wrap clearfix">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 24px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;color: #1a1a1a ;">
                                            <?php if ($_GET['module'] == 'regulasi') : ?>
                                                Documents about Library & Policy Regulations
                                            <?php endif; ?>
                                            <?php if ($_GET['module'] == 'uu-perpus') : ?>
                                                Documents about the Laws Regulations
                                            <?php endif; ?>
                                            <?php if ($_GET['module'] == 'policy') : ?>
                                                Documents about the Policy Regulations                                
                                            <?php endif; ?>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- UU Perpustakaan & Policy -->
                                <?php if ($_GET['module'] == 'regulasi') : ?>
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 40px ;">
                                            <div class="gdlr-core-text-box-item-content" style="text-transform: none ;">
                                                <div style="overflow-x: auto;">
                                                    <table style="min-width: 700px;">
                                                        <tbody>
                                                            <tr>
                                                                <th style="width: 70px;">No.</th>
                                                                <th>File Name</th>
                                                                <th>Category</th>
                                                                <th>Download File</th>
                                                            </tr>
                                                            <?php $no = 1; ?>
                                                            <?php foreach ($regulasi as $val) : ?>
                                                                <tr>
                                                                    <td><?= $no; ?></td>
                                                                    <td title="<?= $val['title']; ?>"><?= word_limiter($val['title'], 10," . . ."); ?></td>    
                                                                    <td><?= $val['categories']; ?></td>
                                                                    <td>
                                                                        <a href="<?= base_url("homepage/downloading/");?><?=$val['id'];?>" class="gdlr-core-button  gdlr-core-button-solid gdlr-core-button-no-border">Download</a>
                                                                    </td>
                                                                </tr>
                                                            <?php $no++; ?>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <!-- UU Perpustakaan -->
                                <?php if ($_GET['module'] == 'uu-perpus') : ?>
                                   <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 40px ;">
                                            <div class="gdlr-core-text-box-item-content" style="text-transform: none ;">
                                                <div style="overflow-x: auto;">
                                                    <table style="min-width: 700px;">
                                                        <tbody>
                                                            <tr>
                                                                <th style="width: 70px;">No.</th>
                                                                <th>File Name</th>
                                                                <th>Category</th>
                                                                <th>Download File</th>
                                                            </tr>
                                                            <?php $no = 1; ?>
                                                            <?php foreach ($regulasi as $val) : ?>
                                                                <tr>
                                                                    <td><?= $no; ?></td>
                                                                    <td title="<?= $val['title']; ?>"><?= word_limiter($val['title'], 10," . . ."); ?></td>    
                                                                    <td><?= $val['categories']; ?></td>
                                                                    <td>
                                                                        <a href="<?= base_url("homepage/downloading/");?><?=$val['id'];?>" class="gdlr-core-button  gdlr-core-button-solid gdlr-core-button-no-border">Download</a>
                                                                    </td>
                                                                </tr>
                                                            <?php $no++; ?>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <!-- Policy Perpustakaan -->
                                <?php if ($_GET['module'] == 'policy') : ?>
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 40px ;">
                                            <div class="gdlr-core-text-box-item-content" style="text-transform: none ;">
                                                <div style="overflow-x: auto;">
                                                    <table style="min-width: 700px;">
                                                        <tbody>
                                                            <tr>
                                                                <th style="width: 70px;">No.</th>
                                                                <th>File Name</th>
                                                                <th>Category</th>
                                                                <th>Download File</th>
                                                            </tr>
                                                            <?php $no = 1; ?>
                                                            <?php foreach ($regulasi as $val) : ?>
                                                                <tr>
                                                                    <td><?= $no; ?></td>
                                                                    <td title="<?= $val['title']; ?>"><?= word_limiter($val['title'], 10," . . ."); ?></td>    
                                                                    <td><?= $val['categories']; ?></td>
                                                                    <td>
                                                                        <a href="<?= base_url("homepage/downloading/");?><?=$val['id'];?>" class="gdlr-core-button  gdlr-core-button-solid gdlr-core-button-no-border">Download</a>
                                                                    </td>
                                                                </tr>
                                                            <?php $no++; ?>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>