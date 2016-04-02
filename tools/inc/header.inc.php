<?php
if(!$_SESSION["ses_adm_id"]){$cms->redir(SITE_PATH_ADM."login");}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=">
<title>Welcome</title>
<link rel="icon" href="<?=SITE_PATH_M?>images/favicon.ico" />
<link rel="shortcut icon" href="<?=SITE_PATH_M?>images/favicon.ico" />
<link rel="stylesheet" href="<?=SITE_PATH_ADM?>css/style.css" type="text/css">
<!--[if IE]> <script type="text/javascript" src="js/html5.js"></script><![endif]-->
<!--[if lte IE 7]><script defer type="text/javascript" src="js/pngfix.js"></script><![endif]--> 
<script language="javascript" src="<?=SITE_PATH_ADM?>js/validate.js"></script>
<script type="text/javascript" src="<?=SITE_PATH?>js/jquery-1.4.4.min.js" ></script> 
<script type="text/javascript" src="<?=SITE_PATH_ADM?>js/jquery.popupWindow.js.js" ></script> 
<script type="text/javascript" src="<?=SITE_PATH?>lib/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?=SITE_PATH?>lib/ckfinder/ckfinder.js"></script>
<!-- for color picker-->
<link href="<?=SITE_PATH_ADM?>js/syronex-colorpicker.css" rel="stylesheet" type="text/css">  
<script type="text/javascript" src="<?=SITE_PATH_ADM?>js/syronex-colorpicker.js"></script> 
<script type="text/javascript" src="<?=SITE_PATH_ADM?>js/jscolor.js"></script>
<!-- for color picker--> 
<script src="<?=SITE_PATH_ADM?>SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<script src="<?=SITE_PATH_ADM?>SpryAssets/SpryAccordion.js" type="text/javascript"></script>
<link href="<?=SITE_PATH_ADM?>SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css"> 
<link href="<?=SITE_PATH_ADM?>SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css">
<?php include(SITE_FS_PATH.'/'.ADMIN_DIR."js/calc.php")?>
</head> 
<body>

<?=$cms->sform((($mode)?'onsubmit="return formvalid(this)"':'onsubmit="return formvalid(this)"'));?>
<?php 
	$permissions=$cms->getSingleresult("select permissions from #_administrator where aid='".$_SESSION[ses_adm_id]."'"); 
	if($permissions){
		$perm = explode(',',$permissions);
	} 
	if($_SESSION["ses_adm_type"]=='su') $perm = $allpage;
?>
<div class="wrap wrap2">
  <div class="admin-bar">
    <div class="logout"> <a href="<?=SITE_PATH_ADM?>logout.php">Logout</a> </div>
 <span id="big-nav">   <ul class="nav admin-settings" id="nav">
      <li > <a href="#" class="st"  ><img src="<?=SITE_PATH_ADM?>images/admin.png"   class="gear" alt="" width="18" height="18" /></a>
        <ul>
          <li <?=(!in_array('My Profile',$perm))?'style="display:none;"':''?>> <a href="<?=SITE_PATH_ADM?>setting.php?mode=true">My Profile</a> </li>
        <!--  <li> <a href="<?=SITE_PATH_ADM?>setting.php?mode=true">Administrator settings</a> </li>-->
          <li <?=(!in_array('User Settings',$perm))?'style="display:none;"':''?>> <a href="<?=SITE_PATH_ADM?>adm">User Settings</a> </li>
        </ul>
      </li>
    </ul>
    <div class="welcome"> Welcome to <span><?=$_SESSION["ses_adm_usr"]?></span></div></span>
    <div class="pro-thumb"> </div>
     <div class="logo"> <a href="<?=SITE_PATH_ADM?>index.php"><img src="<?=SITE_PATH_ADM?>images/logo.png"   alt=""></a></div>
    
  </div>
  <div class="container_for-domain">  
   
    <ul>
      <li> <a href="#">Collections</a>
        
          <ul> 
            <li ><a href="<?=SITE_PATH_ADM?>content/">Manage Pages</a> </li> 
			<li ><a href="<?=SITE_PATH_ADM?>color/">Manage Color</a> </li>
			<li ><a href="<?=SITE_PATH_ADM?>catalog/manage-category.php">Category</a></li> 
			<li ><a href="<?=SITE_PATH_ADM?>dimension">Size & Dimension</a></li> 
          </ul>
        
      </li> 
     
    <?php /* ?>  <li> <a href="<?=SITE_PATH_ADM?>seo/">SEO</a>
        </li><?php */?>
        
        <?php if($_SESSION["ses_adm_type"]=='su' or $_SESSION["ses_adm_type"]=='admin'){?>
    
            <li><a href="<?=SITE_PATH_ADM?>product/">Product</a>
                <ul> 
					<li ><a href="<?=SITE_PATH_ADM?>product">Product</a></li>
					 
					 
					
                </ul>
			</li> 
            <?php } ?> 
  
		<li><a href="<?=SITE_PATH_ADM?>city/">Manage</a>
			<ul>   
				
				  
				<!-- <li <?=(!in_array('E-mail Alerts',$perm))?'style="display:none;"':''?>><a href="<?=SITE_PATH_ADM?>catalog/subscribers.php">E-mail Alerts</a></li>-->
				 
			</ul>
		</li> 
		 
		<li><a href="<?=SITE_PATH_ADM?>slider/">Slide Banner</a>
			<ul>
				<!--<li <?=(!in_array('Slide Banner',$perm))?'style="display:none;"':''?>><a href="<?=SITE_PATH_ADM?>slider/">Slide Banner</a></li> -->
				 

			</ul>
		</li> 

	   <li>
			<a href="#">Others</a>
			<!-- <ul> 
				<li <?=(!in_array('Manage Country',$perm))?'style="display:none;"':''?>><a href="<?=SITE_PATH_ADM?>country/">Manage Country</a></li> 
				<li <?=(!in_array('Manage City',$perm))?'style="display:none;"':''?>><a href="<?=SITE_PATH_ADM?>city/">Manage City</a></li>
				<li <?=(!in_array('Manage Market',$perm))?'style="display:none;"':''?>><a href="<?=SITE_PATH_ADM?>market/">Manage Market</a></li> 
				<li <?=(!in_array('Shipping City',$perm))?'style="display:none;"':''?>><a href="<?=SITE_PATH_ADM?>ship-city">Shipping City</a></li> 
				<li <?=(!in_array('Shipping Area',$perm))?'style="display:none;"':''?>><a href="<?=SITE_PATH_ADM?>ship-area">Shipping Area</a></li> 
				 
				  
			</ul>-->
		</li>  
		  
     </ul>
</div>
<div class="cl"></div>
 