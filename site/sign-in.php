<?php
if ($cms->is_post_back()) {
    if ($action == "runoriginal-login") {
        $chkUser = $cms->getSingleresult("SELECT COUNT(*) FROM #_user WHERE username = '$lusername' AND password = '$password' ");
        if($chkUser){
            $sql = $cms->db_query("SELECT * FROM #_user WHERE username = '$lusername' AND password = '$password' ");
            $res = $cms->db_fetch_array($sql);
            $_SESSION['uid'] = $res['pid'];
            $_SESSION['email'] = $res['email'];
            $_SESSION['username'] = $res['username'];
            $cms->redir(SITE_PATH.$_SESSION[username]."/profile",true);
        }else{
            $header_alert = "Invalid username or password - Remember to use your username, not your email address.";
        }
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Sign In - Run Original</title><!--%%title%%-->
    <base href="<?=SITE_PATH?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="keywords" content="Sign In - Run Original" />
    <meta name="description" content="Sign In - Run Original" />
	
    <?php include_once "inc/common_css.php"; ?>
</head>
<body>

<?php include_once "inc/header.php"; ?>

<section class="sign-in">
    <div class="container">
        <div class="row">
            <div class="col-md-4">

                <div class="box-left">
                    <form action="" method="post">
                        <h3>Sign In</h3>

                        <div class="form-group">
                            <input type="text" name="lusername" class="form-control" id="usr" placeholder="User Name">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" id="pwd" placeholder="Password">
                        </div>

                        <label class="checkbox-inline"><input type="checkbox" value=""><span style="font-size:12px;">Remeber Me</span>
                        <span style="float:right"><a href="#" style="color:#666; text-decoration:underline;">Lost
                                Password</a></span></label>

                        <input type="submit" value="SIGN IN" class="btn btn-danger"/>
                        <input type="hidden" name="action" value="runoriginal-login"/>

                    </form>
                    <span class="facebook-or">OR</span>

                    <div class="facebook-auth">
                        <a href="#" id="facebook-signin" class="rb-button fb-blue" alt="Sign in with Facebook"
                           data-facebook-signup-button="">
                            <i class="fa fa-facebook"></i> Sign in with Facebook
                        </a>

                        <form accept-charset="UTF-8" action="#" data-new-facebook-signup-url="#"
                              id="facebook-login-form" method="post">
                            <div style="margin:0;padding:0;display:inline">
                                <input name="utf8" type="hidden" value="✓">
                                <input name="authenticity_token" type="hidden" value=""></div>
                            <input id="access_token" name="access_token" type="hidden">
                            <input id="next_action" name="next_action" type="hidden" value="">
                        </form>
                    </div>

                </div>
                <!--end of box left-->

            </div>
            <div class="col-md-8">
                <div class="box-right">
                    <h3>Sign Up</h3>

                    <p>Sign up to Redbubble and you'll not only unlock the door to a lovely community of talented
                        artists and designers, you'll be able to follow the artists you love and be the first to see
                        their new works. Enjoy regular servings of inspiration, receive excellent and entertaining email
                        updates, access the fancy blog full of creative brain fodder and don't forget, sell some of your
                        own work if you want.</p>

                    <p style="padding-top:20px;">There's much more but don't take our word for it. Go on, pick yourself
                        a username.</p>

                    <hr/>

                    <a class="btn btn-default" href="register">Sign Up For Free</a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <img src="images/description/1.jpg" class="img-responsive"/>
            </div>

        </div>

    </div>
</div>

<div id="myModal1" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <img src="images/description/1-back.jpg" class="img-responsive"/>
            </div>
        </div>

    </div>
</div>

<div id="myModal2" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>

            <div class="modal-body">
                <img src="images/description/1-design.jpg" class="img-responsive"/>
            </div>

        </div>

    </div>
</div>

<!--end Modal-->

<?php include_once "inc/footer.php"; ?>
</body>
<?php include_once "inc/common_js.php" ?>
</html>
