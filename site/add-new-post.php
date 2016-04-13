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

<section class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><i class="fa fa-angle-double-right"></i></li>
                    <li><a href="#">Jornal</a></li>
                    <li><i class="fa fa-angle-double-right"></i></li>
                    <li><a href="#">Add New Entry</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="add-jornal">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-8">
                <h3>Add Jornal Post</h3>

                <div class="form-group">
                    <div class="col-md-2"><label>Title</label></div>
                    <div class="col-md-10"><input type="text" class="form-control" id="usr"></div>
                </div>

                <div class="form-group">
                    <div class="col-md-2"><label for="comment">Content:</label></div>
                    <div class="col-md-10"><textarea class="form-control" rows="10" id="comment"></textarea></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-10" style="margin-top:5px;"><span
                            class="pull-left">Text Formating Help</span><input type="submit" value="Preview"
                                                                               class="btn btn-success pull-right"/>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-2"><label for="comment">Tags:</label></div>
                    <div class="col-md-10"><textarea class="form-control" rows="5" id="comment"></textarea></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-10" style="margin-top:5px;"><span>Up to 50 descriptive words or phrases, separated by commas. eg. landscape, sunset, new york</span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12"><p>Options</p></div>
                </div>

                <div class="form-group">
                    <div class="col-md-2"><label>Hidden</label></div>
                    <div class="col-md-10"><label class="checkbox-inline"><input type="checkbox" value="">Hide this work
                            from the public? (You can still see and buy it)</label></div>
                </div>

                <div class="form-group">
                    <div class="col-md-2"><label>Mature Content</label></div>
                    <div class="col-md-10"><label class="checkbox-inline"><input type="checkbox" value="">This work
                            contains mature content.</label></div>
                </div>

                <div class="form-group">
                    <div class="col-md-12"><a href="#">Should you tick this?</a></div>
                </div>

                <div class="form-group text-center">
                    <div class="col-md-12"><input type="submit" value="Create New Post" class="btn btn-danger"/></div>
                </div>


            </div>
            <!--end of col 8-->
        </div>
    </div>
</section>

<?php include_once "footer.php"; ?>
</body>
<?php include_once SITE_FS_PATH . "/common_js.php" ?>
</html>
