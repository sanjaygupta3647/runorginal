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
	<?php include_once SITE_FS_PATH . "/common_css.php"; ?>
</head>
<body>
<div class="main-container">
	<?php include "header.php"; ?>


<section class="sign-up">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-head">
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
                        <input type="text" id="register-frm-username" class="register-frm form-control" placeholder="USERNAME"/>
                        <h6>Only digits, letters and '-'; no spaces. Between 4-15 characters</h6>
                        <input type="hidden" id="register-frm-load" class="register-frm">
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
            <input type="text" id="register-frm-email" class="register-frm form-control" placeholder="Email Address"/>
            <h6></h6>
        </div>

        <div class="form-group">
            <input type="text" data-validate="false" id="register-frm-password" class="register-frm form-control" placeholder="Password (At Least 8 Characters)"/>
            <h6></h6>
            <div class="strength-indicator" data-strength-indicator-for="signup">
                <ul class="strength-indicator_visualbar" data-strength="">
                    <li class="strength-indicator_segement"></li>
                    <li class="strength-indicator_segement"></li>
                    <li class="strength-indicator_segement"></li>
                    <li class="strength-indicator_segement"></li>
                </ul>
                <div class="strength-indicator_label">Password Strength: <strong id="password-strength"></strong>
                </div>
            </div>
        </div>

        <h6>Password Strength: <span style="font-weight:600;">Empty</span></h6>

        <div class="checkbox">
            <label><input type="checkbox" name="news" id="register-frm-news" class="register-frm" value="">Email me the artists and designers newsletter</label>
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="coupon" id="register-frm-coupon" class="register-frm" value="">Email me offers, discounts, coupons and news</label>
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
<?php include "footer.php"; ?>

</body>
<?php include SITE_FS_PATH."/common_js.php"; ?>
<script type="text/javascript">
    (function($){
        function CheckPasswordStrength(password) {
            var regex = new Array();
            regex.push("[A-Z]"); //Uppercase Alphabet.
            regex.push("[a-z]"); //Lowercase Alphabet.
            regex.push("[0-9]"); //Digit.
            regex.push("[$@$!%*#?&]"); //Special Character.

            var passed = 0;

            //Validate for each Regular Expression.
            for (var i = 0; i < regex.length; i++) {
                if (new RegExp(regex[i]).test(password)) {
                    passed++;
                }
            }

            //Validate for length of Password.
            if (passed > 2 && password.length > 4) {
                passed++;
            }
            return passed;
        }

        function passwordClass(passed){
            var strength = '';
            switch (passed) {
                case 0:
                    strength = '';
                    break;
                case 1:
                    strength = "Weak";
                    break;
                case 2:
                    strength = "Fair";
                    break;
                case 3:
                case 4:
                    strength = "Medium";
                    break;
                case 5:
                    strength = "Strong";
                    break;
            }
            return strength;
        }

        function validateEmail(email) {
            if(email.trim() == ""){ return false;}
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }
        function validateUsername(user){
            if(user.trim() == ""){ return false;}
            var re = /^([a-z\d]{4,})$/;
            return re.test(user);
        }
        if($("input.register-frm#register-frm-load").length){
            var username = $("input.register-frm#register-frm-username");
            var email = $("input.register-frm#register-frm-email");
            var password = $("input.register-frm#register-frm-password");

            var news = $("input.register-frm#register-frm-news");
            var coupon = $("input.register-frm#register-frm-coupon");
            var strength = $("div.strength-indicator");
            var show_indcator = strength.find("div strong#password-strength");
            var indecator = strength.find("ul.strength-indicator_visualbar");

            var $checkValidate = true;

            $.fn.valide = function(){
                $(this).css("border","1px solid #B0D201");
                $(this).next("h6").css({"color":"#b94a48;"}).hide();
            }

            $.fn.invalide = function(){
                $(this).css({"color":"#b94a48;", "border-color":"#b94a48"});
                $(this).next("h6").css("color","#b94a48");
                $(this).next("h6").show();
            }

            $.fn.passwordValidate = function(){

            }

            username.blur(function(){
                if(validateUsername(username.val())){
                    //$(this).valide();
                    var option = {"username":$(this).val(), "action":"check-username"};
                    $.ajax({
                        url:"ms_file/ajax",
                        type:"post",
                        data:option,
                        success: function (res) {
                            var js = JSON.parse(res);
                            if(js.success == "success"){
                                username.valide();
                            }else{
                                username.invalide();
                                username.next("h6").text(js.message);
                                username.next("h6").show();
                            }
                        }
                    });
                }else{
                    $(this).invalide();
                }
            });
            email.blur(function(){
                if(validateEmail(email.val())){
                    //$(this).valide();
                    var option = {"email":$(this).val(), "action":"check-email"};
                    $.ajax({
                        url:"ms_file/ajax",
                        type:"post",
                        data:option,
                        success: function (res) {
                            var js = JSON.parse(res);
                            if(js.success == "success"){
                                email.valide();
                            }else{
                                email.invalide();
                                email.next("h6").text(js.message);
                                email.next("h6").show();
                            }
                        }
                    });
                }else{
                    $(this).invalide();
                    $(this).next("h6").text('Please provide a valid email address.');
                    $(this).next("h6").show();
                }
            });
            password.keyup(function(){
                var score = CheckPasswordStrength($(this).val());
                var pclass = passwordClass(parseInt(score));
                indecator.attr("data-strength",pclass);
                show_indcator.text(pclass);
                if(score > 1){
                    $(this).attr("data-validate","true");
                }else{
                    $(this).attr("data-validate","false");
                }
            });
            password.blur(function(){
                if($(this).attr("data-validate") === 'true'){
                    $(this).valide();
                }else{
                    $(this).invalide();
                    $(this).next("h6").text('Please provide a password greater than 8 characters.');
                    $(this).next("h6").show();
                }
            });
            $("input.register-frm#register-frm-submit").click(function(){
                if(username.val().trim() != ''){
                    username.valide();
                    $checkValidate = true;
                }else{
                    username.invalide();
                    $checkValidate = false;
                }

                if(validateEmail(email.val())){
                    email.valide();
                    $checkValidate = true;
                }else{
                    email.invalide();
                    email.next("h6").text('Please provide a valid email address.');
                    email.next("h6").show();
                    $checkValidate = false;
                }
                if(password.attr("data-validate") === 'true'){
                    password.valide();
                    $checkValidate = true;
                }else{
                    password.invalide();
                    password.next("h6").text('Please provide a password greater than 8 characters.');
                    password.next("h6").show();
                    $checkValidate = false;
                }
                console.log();
                if($checkValidate){
                    var optionData = {"username":username.val(), "email":email.val(), "password":password.val(), "news":((news.prop("checked"))?"Yes":"No"), "coupon":(coupon.prop("checked"))?"Yes":"No", "action":"Registration"};
                    $.ajax({
                        url:"ms_file/ajax",
                        type:"post",
                        data:optionData,
                        success:function(res){
                            var js = JSON.parse(res);
                            if(js.success == 'success'){
                                $("#reg-final-message h3").css("color","#B0D201");
                                $("#reg-final-message h3").text(js.message);
                                $("#reg-final-message h3").show();
                                setTimeout(function(){
                                    location.href = js.trig;
                                },5000);
                            }else{
                                var vlidator = "";
                                if(js.trig == "email"){
                                    vlidator = email;
                                }else if(js.trig == "username"){
                                    vlidator = username;
                                }
                                vlidator.next("h6").text(js.message);
                                vlidator.invalide();
                            }
                        }
                    });
                }
            });
        }

    })(jQuery);
</script>
</html>