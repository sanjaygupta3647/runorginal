<?php
/**
 * Created by PhpStorm.
 * User: arunsingh
 * Date: 4/14/2016
 * Time: 12:17 AM
 */
$ssid = session_id();
foreach($_SESSION as $seskey=>$sesval){
    $_SESSION[$seskey] = "";
}
session_destroy();
$cms->redir(SITE_PATH,true);
?>
