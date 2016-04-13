<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Run Original</title><!--%%title%%-->
    <base href="<?=SITE_PATH?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="schema.DC" href="http://purl.org/dc/elements/1.1/" />
    <link rel="schema.DCTERMS" href="http://purl.org/dc/terms/" />
    <!-- Start: Meta Info -->
    <!--<meta property="og:image" content="" />-->
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
    <meta name="google-site-verification" content="YF0StaN8k3nLmmL5Bh48YgpXGNioIy3luUyOqYVJB-E" />
    <meta name="DC.title" content="%%title%%" />
    <meta name="DC.creator" content="<?=(SITE_COMPANY)?SITE_COMPANY:''?> CDI" />
    <meta name="DC.subject" content="Meta-data" />
    <meta name="DC.description" content="%%description%%" />
    <meta name="DC.publisher" content="<?=(SITE_COMPANY)?SITE_COMPANY:''?> CDI" />
    <meta name="DC.contributor" content="<?=(SITE_COMPANY)?SITE_COMPANY:''?> CDI" />
    <meta name="DC.date" content="%%datetime%%" scheme="DCTERMS.W3CDTF" />
    <meta name="DC.type" content="Text" scheme="DCTERMS.DCMIType" />
    <meta name="DC.format" content="text/html" scheme="DCTERMS.IMT" />
    <meta name="DC.identifier" content="%%uri%%" scheme="DCTERMS.URI" />
    <meta name="DC.source" content="http://www.w3.org/TR/html401/struct/global.html#h-7.4.4" scheme="DCTERMS.URI" />
    <meta name="DC.language" content="%%lang%%" scheme="DCTERMS.RFC3066" />
    <meta name="DC.relation" content="http://dublincore.org/" scheme="DCTERMS.URI" />
    <meta name="DC.coverage" content="<?=(SITE_COMPANY)?SITE_COMPANY:''?> CDI" scheme="DCTERMS.TGN" />
    <meta name="DC.rights" content="All rights reserved" />
    <meta name="author" content="<?=(SITE_COMPANY)?SITE_COMPANY:''?> CDI" />
    <meta name="keywords" content="%%keywords%%" />
    <meta name="description" content="%%description%%" />
    <?php include_once SITE_FS_PATH . "/common_css.php"; ?>
</head>
<body>

<?php include_once "header.php"; ?>

<section class="upload-work">
    <div class="container">
        <div class="col-md-12">
            <h1 class="head-upload">Add New Work</h1>
        </div>
    </div>
</section>

<section class="upload-file">
    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            <div class="single-upload with-uploader" data-work-url="">
                <div class="circle-progress" data-value="0">
                    <div class="circle">
                        <div class="mask">
                            <div class="fill"></div>
                        </div>
                        <div class="half">
                            <div class="fill"></div>
                            <div class="fix"></div>
                        </div>
                        <div class="inset"></div>
                    </div>
                </div>

                <div class="spinner"></div>

                <div id="dvPreview">

                    </span>

  <span class="single-upload-select">
    <i class="fa fa-cloud-upload"></i>
    Upload to all products
  </span>

                    <input type="file" id="select-image-single" class="file-upload html5-upload-input" accept="image/*"
                           capture="">

                    <span class="upload-error-message"></span>
                </div>
            </div>
        </div>
</section>

<?php include_once "footer.php"; ?>
</body>
<?php include_once SITE_FS_PATH . "/common_js.php" ?>
</html>
