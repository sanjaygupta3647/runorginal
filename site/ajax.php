<?php
if($cms->is_post_back()){
    $ajaxArray = array();
    if($action == "Registration"){
        $chkUser = $cms->getSingleresult("SELECT COUNT(*) username FROM #_user WHERE username = '$username'");
        if(!$chkUser){
            $chkEmail = $cms->getSingleresult("SELECT COUNT(*) username FROM #_user WHERE email = '$email'");
            if(!$chkEmail){
                $reg_time = time();
                $cms->db_query("INSERT INTO #_user SET username='$username', email='$email', password='$password', news='$news', coupon='$coupon', reg_time='$reg_time'");
                $ajaxArray['success'] = 'success';
                $ajaxArray['message'] = 'Registration Successfull, You Will be redirected to login.';
                $ajaxArray['trig'] = 'sign-in';
            }else{
                $ajaxArray['success'] = 'fail';
                $ajaxArray['message'] = 'Email Alreday Registred.';
                $ajaxArray['trig'] = 'email';
            }
        }else{
            $ajaxArray['success'] = 'fail';
            $ajaxArray['message'] = 'Username Alreday Exist. Please Enter Another.';
            $ajaxArray['trig'] = 'username';
        }
        echo json_encode($ajaxArray);
    }
}
?>