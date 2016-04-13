<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Run Original</title><!--%%title%%-->
    <base href="<?= SITE_PATH ?>">
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
