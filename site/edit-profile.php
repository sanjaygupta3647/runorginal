<?php
if($cms->is_post_back()){ 
	if($_SESSION['uid']){	
	    if(count($_POST['sub'])){
		    $cms->db_query("delete from #_subscription where user_id = '".$_SESSION['uid']."' ");
			foreach($_POST['sub'] as $val){
				$cms->db_query("insert into #_subscription set user_id = '".$_SESSION['uid']."'  , stype = '$val' ");
			}
		}
		$path = UP_FILES_FS_PATH."/user";
		if($_FILES[image][name]){
			$ext=end(explode('.',$_FILES[image][name]));
			$imgname=rand().rand().'.'.$ext; 
			$bool = move_uploaded_file($_FILES[image][tmp_name],$path.'/'.$imgname); 
			$_POST[image] = $imgname; 
			$image =  $cms->getSingleresult("select image from #_user where pid = '".$_SESSION['uid']."' ");
			if($image and is_file($_SERVER['DOCUMENT_ROOT'].SITE_SUB_PATH."uploaded_files/user/".$image)==true){
				unlink($_SERVER['DOCUMENT_ROOT'].SITE_SUB_PATH."uploaded_files/user/".$image);
			}
			//$cms->make_thumb_gd($path."/".$_POST['image'], $path."/".$_POST['image'],560,300); 
		}
		$uids =  $cms->sqlquery("rs","user",$_POST,'pid',$_SESSION['uid']); 
		$cms->sessset('Record has been updated', 's');
	}  
} 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Edit Profile - Run Original</title><!--%%title%%-->
    <base href="<?=SITE_PATH?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="keywords" content="User Profile - Run Original" />
    <meta name="description" content="User Profile - Run Original" />
	
    <?php include_once "inc/common_css.php"; ?>
</head>
<body>

<?php include_once "inc/header.php"; ?>

<section class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul>
                    <li><a href="<?=SITE_PATH?>">Home</a></li>
                    <li><i class="fa fa-angle-double-right"></i></li>
                    <li><a href="#">Edit Profile</a></li>
                    
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="add-jornal">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
			 
			<form method="post" enctype="multipart/form-data" action="">
            <div class="col-md-8">
			    <?php $cms->showmess(); ?>
                <h3>Profile Detail</h3>

                <div class="form-group">
                    <div class="col-md-2"><label>First Name</label></div>
                    <div class="col-md-10"><input type="text" class="form-control" value="<?=$fname?>" name="fname"></div>
                </div>
				
				<div class="form-group">
                    <div class="col-md-2"><label>Last Name</label></div>
                    <div class="col-md-10"><input type="text" class="form-control" value="<?=$lname?>" name="lname"></div>
                </div><?php
				if($image and is_file($_SERVER['DOCUMENT_ROOT'].SITE_SUB_PATH."uploaded_files/user/".$image)==true){
					?>
					<div class="form-group">
					<div class="col-md-2"><label>&nbsp;</label></div>
					<div class="col-md-10"><img src="<?=SITE_PATH?>uploaded_files/user/<?=$image?>"  height="100" /></div>
					</div>
					<?php
				}?>
				
				 <div class="form-group">
                    <div class="col-md-2"><label>Image</label></div>
                    <div class="col-md-10"><input type="file" class="form-control" name="image"/></div>
                </div>
				
				<div class="form-group">
                    <div class="col-md-2"><label>Email</label></div>
                    <div class="col-md-10"><input type="text" class="form-control" value="<?=$email?>" name="email"></div>
                </div>
				
				<div class="form-group">
                    <div class="col-md-2"><label for="comment">City:</label></div>
                     <div class="col-md-10"><input type="text" class="form-control" value="<?=$city?>" name="city"></div>
                     
                </div> 
				
				
				<div class="form-group">
                    <div class="col-md-2"><label>D.O.B.</label></div>
                    <div class="col-md-10">
					<input class="datepicker form-control" value="<?=$dob?>" placeholder="yyyy-mm-dd" title="yyyy-mm-dd" /> 
					
					
					<?php /*?><select name="date" class="form-control"  style="width: 30%;float:left; margin-right:5%; "><?php 
					for($i = 1; $i<=31;$i++){
					?><option value="<?=$i?>"><?=$i?></option><?php
					} 
					?></select>
					
					
					<select name="month" class="form-control" style="width: 30%; float:left; margin-right:5%;"><?php 
					for($i = 1; $i<=12;$i++){
					?><option value="<?=$i?>"><?=$i?></option><?php
					} 
					?></select>
					
					<select name="year" class="form-control" style="width: 30%;float:left;     "><?php 
					for($i = 1950; $i<=date('Y');$i++){
					?><option value="<?=$i?>"><?=$i?></option><?php
					} 
					?></select><?php */?>
					
					</div>
                </div>

                <div class="form-group">
                    <div class="col-md-2"><label for="comment">Public Profile:</label></div>
                    <div class="col-md-10"><textarea class="form-control" rows="8" id="pf" name="public_profile"><?=$public_profile?></textarea></div>
                    <div class="col-md-2"></div>
                     
                </div>
				
				
				
				<div class="form-group">
                    <div class="col-md-2"><label for="comment">Short Bio:</label></div>
                    <div class="col-md-10"><textarea class="form-control" rows="4" id="pf" name="shot_bio"><?=$shot_bio?></textarea></div>
                    <div class="col-md-2"></div>
                     
                </div> 
                

                <div class="form-group">
				    <?php $list  = $cms->getSubscriptionlist($_SESSION['uid']);?>
                    <div class="col-md-2"><label>Email Subscriptions</label></div>
                    <div class="col-md-10"> 
					<label class="checkbox-inline"><input type="checkbox" <?=(in_array("artist_designer",$list))?'checked':''?> name="sub[]" value="artist_designer">Artists and designers newsletter</label><br/>
					<label class="checkbox-inline"><input type="checkbox" <?=(in_array("offer_discount_coupon_news",$list))?'checked':''?> name="sub[]" value="offer_discount_coupon_news">Offers, discounts, coupons and news</label><br/>
					<label class="checkbox-inline"><input type="checkbox" <?=(in_array("message",$list))?'checked':''?> name="sub[]" value="message">Messages</label><br/>
					<label class="checkbox-inline"><input type="checkbox" <?=(in_array("comment",$list))?'checked':''?> name="sub[]" value="comment">Comment and reply notifications</label><br/>
					 
					
					</div>
                </div> 
				
				 <div class="form-group">
                    <div class="col-md-2"><label>New Things from People You Follow</label></div>
                    <div class="col-md-10">
					<label><input type="radio"  name="sub[]" value="newthings_daily" <?=(in_array("newthings_daily",$list))?'checked':''?>>Daily</label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<label ><input type="radio"  name="sub[]" value="newthings_weekely" <?=(in_array("newthings_weekely",$list))?'checked':''?>>Weekly</label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					<label ><input type="radio"  name="sub[]" <?=(!in_array("newthings_weekely",$list) && !in_array("newthings_daily",$list))?'checked':''?> value="">Never</label>  
					</div>
                </div> 
                <div class="form-group text-center">
                    <div class="col-md-12"><input type="submit" name="submit" value="Update Profile" class="btn btn-danger"/></div>
                </div>


            </div>
			</form>
            <!--end of col 8-->
        </div>
    </div>
</section>

<?php include_once "inc/footer.php"; ?>
<?php include_once "inc/common_js.php" ?>
<script src="<?php echo SITE_PATH?>asset/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script>
$('.datepicker').datepicker({
    format: 'yyyy-mm-dd',
    startDate: '-3d'
});
</script>
</body>

</html>
