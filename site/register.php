<?php
 
if($cms->is_post_back()){ 
    $err = "";
    if(!eregi('^[A-Za-z_]{3,10}$',$_POST[username])){
		$err .= "Username must be between 3 to 10 characters and use only alphabets";
	} 
	if(!$err){	 
		$uids =  $cms->sqlquery("rs","user",$_POST); 
		$cms->sessset('Registartion successfull done!', 's');
	}else{
		$cms->sessset($err, 'e');
	}  
} 
?>
<!doctype html>
<html>
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
	<?php include_once "inc/common_css.php"; ?>
</head>
<body>
 
	<?php include "inc/header.php"; ?>


<section class="sign-up">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-head">
				   <?php $cms->showmess(); ?>
                    <h1>Join Run Orignal</h1>
                    <h6>A Global Marketplace For Independent Artists</h6>
                </div>
                <!--end of title head-->
            </div>
            <!--end of col 12-->
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>
<form method="post" action="" onSubmit="return formvalid(this);">

<section class="form-box">
    <div class="container box-12">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="left-form-box">
                    <h2>RunOrignal.com/people/</h2>
                </div>
                <!--left form box-->
                <div class="right-form-box">
                    <div class="form-group">
                        <input type="text" lang="RisUsername" title="Username" id="register-frm-username" name="username" class="register-frm form-control" placeholder="USERNAME"/>
                        
                      
                    </div>
                </div>
                <!--end of right form box-->
            </div>
        </div>
    </div>
</section>

<section class="form-box-2">
    <div class="col-md-6 col-md-offset-3 col-xs-12">
        <div id="reg-final-message" class="form-group" style="display: none;"><h3></h3></div>
        <div class="form-group">
            <input type="text" id="register-frm-email"  lang="RisEmail" name="email" title="Email Address" class="register-frm form-control" placeholder="Email Address"/> 
        </div> 
        <div class="form-group">
            <input type="password" data-validate="false" title="Password" name="password" lang="R" id="register-frm-password" class="register-frm form-control" placeholder="Password "/> 
        </div>  
    </div>

    <div class="bg-color">
        <h6 class="text-center" style="padding:15px 0;">By clicking Sign Up Now, you agree to our User Agreement</h6>
        <h6 class="text-center" style="padding-bottom:20px;">We hate spam just as much as you do — Privacy Policy</h6>

        <div class="form-group text-center">
            <input id="register-frm-submit" type="submit" class="register-frm btn btn-danger" value="Sign Up Now"/>
        </div>
    </div>
    <!--end of bg color-->

    <div class="after-bg-color">
        <div class="classy-or">OR</div>

        <a href="javascript:void(0)" id="facebook-signin" class="rb-button fb-blue" alt="Sign in with Facebook"
           data-facebook-signup-button="">
            <i class="fa fa-facebook"></i> Sign in with Facebook
        </a>

    </div>
    <!--end of after bg color-->

</section>
</form>
<?php include "inc/footer.php"; ?> 
</body>
<?php include "inc/common_js.php"; ?>
<script src="<?php echo SITE_PATH?>asset/js/validate.js" type="text/javascript"></script>
 
</html>