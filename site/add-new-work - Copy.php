<?php  die('test');
if($cms->is_post_back()){ 
    $err = "";
    if(empty(trim($_POST['title']))){
		$err .= "Please enter title";
	} 
	if(!$err){	 
	    $_POST[user_id] = $_SESSION['uid'];
		$_POST[graphich_id] = $_GET['image'];
		if($_POST['submission_id']){
			$lastid = $_POST['submission_id']; 
		    $cms->sqlquery("rs","user_submission",$_POST,"pid",$lastid); 
			$cms->sessset('Successfull updated submission!', 's');
		}else{
		 	$cms->sqlquery("rs","user_submission",$_POST); 
			$lastid = mysql_insert_id(); 
			$cms->sessset('Successfull submission!', 's');
		}
		
		
		if(!empty(trim($_POST[tag]))){
		    $cms->db_query("delete from #_product_tags where submission_id='".$lastid."'"); 
			$tags = explode(",",$_POST[tag]);
			foreach($tags as $val){
				if($val){
				    $arr = array();
					$arr['submission_id'] = $lastid;
					$arr['tag'] = trim($val);
					$cms->sqlquery("rs","product_tags",$arr); 
				}
			}
		} 
		
	}else{
		$cms->sessset($err, 'e');
	}  
} 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Add New Work - Run Original</title> 
    <base href="<?=SITE_PATH?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="keywords" content="Add New Work- Run Original" />
    <meta name="description" content="Add New Work - Run Original" />
	
    <?php include_once "inc/common_css.php"; ?>
	<link href="<?php echo SITE_PATH?>asset/css/dropzone.css" rel="stylesheet">

</head>
<body>

<?php include_once "inc/header.php"; //print_r($_SESSION); die; ?>

<script src="<?php echo SITE_PATH?>asset/js/dropzone.js"></script>
<script type="text/javascript" > 
	$(function() { 
		Dropzone.autoDiscover = false;  
		$("#dropzone_multiple_url").dropzone({ 
			acceptedFiles: "image/jpeg,image/png",
			url: '<?=SITE_PATH?>ms_file/upload',
			maxFiles: 1, // Number of files at a time
			maxFilesize: 1, //in MB
			maxfilesexceeded: function(file) {
				alert('You have uploaded more than 1 Image. Only the first file will be uploaded!');
			},
			success: function (response) { 
				var x = JSON.parse(response.xhr.responseText);
				if(x.image){
					window.location.href = "<?=SITE_PATH?>add-new-work/?image="+x.image;
				} 
			},		
			addRemoveLinks: true,
			removedfile: function(file) {
			var _ref;
					 return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;  
			 }	
		}); 
	}); 
	$("#changeimage").click(function(){
		var image  = $("#imagepath").val();  
		var getId = '<?php echo $_GET['id'];?>';
		var img = '<img src="'+image+'" width="100"/>';
		$("#"+getId).html(img); 
		$('.close').trigger('click');
		 
	})
	</script>
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
            <form enctype="multipart/form-data" id="dropzone_multiple_url" action="<?=SITE_PATH?>ms_file/upload" class="dropzone" > </form>
        </div>
	</div> 
</section> 

<section class="upload-work-help">
    <a href="#" class="help-upload" target="_blank">Need Help Uploading?</a>
</section>
<style>
.canvs{ z-index:1; border: 0 none !important;left:129px;position: absolute;top: 113px;width: 12% !important; position:absolute; }
</style>
<style>
.canvs2{ border: 0 none !important;
    position: relative;
    right: 40%;
    text-align: center;
    top: 70%;
    width: 100% !important;
    z-index: 1;} 
.demo{width:150px; padding:5px; position:absolute;top:150px;left:300px}
#content{padding-bottom:3em}
</style>

<?php if(isset($_GET[image])){ ?>
<form method="post" action="" onSubmit="return formvalid(this);">
<section class="privew-upload">
    <div class="container">
        <div class="row">
		    <?php $cms->showmess(); ?>
            <div class="col-md-12 text-center">
                <h3>Product Preview</h3>
            </div>
        </div>
        <div class="row">
		<?php
		$graphichImage = SITE_PATH."uploaded_files/graphics/".$cms->getSingleresult("select image  from #_user_graphics where pid='".$_GET['image']."' and user_id = '".$_SESSION['uid']."' ");
		$rsAdmin=$cms->db_query("select pid,front,title,cat_id,url from #_products where status='Active'");
	    while($p=$cms->db_fetch_array($rsAdmin)){
		 
		?> 
            <div class="col-md-4" style="margin-bottom:20px;">
                <div class="preview-box">
				     <?php
					 
					 $graph = $cms->getSingleresult("select image  from #_user_graphics_products where graphich_id='".$_GET['image']."' and user_id = '".$_SESSION['uid']."'  and porduct_id='".$p[pid]."'");
					 if($graph){ $UserGraphichImage = SITE_PATH."uploaded_files/user-graphics/".$graph;}
					 ?>
				     
					 <?php if(isset($graph)){
					 		?> <div  id="image<?=$p[pid]?>"><img width="364" height="300"  src="<?=$UserGraphichImage?>"  /></div> <?php
					 } else{?>
					 	<div id="image<?=$p[pid]?>" style="width: 364px;box-sizing: border-box; -webkit-box-sizing: border-box;-moz-box-sizing: border-box;height: 300px;border: 1px solid #e6e6e6;cursor: pointer;position: relative;overflow: hidden;" >
					 	   <img class="canvs" style="width:auto;"  src="<?=$graphichImage?>"  />
                    	   <img src="<?=SITE_PATH?>uploaded_files/orginal/<?=$p[front]?>" width="364" height="300"  /> 
						  </div>
						  
					 <?php
					 } ?> 
					 
                    <h4><?=$p[title]?></h4> <h6>07/Enabled</h6>

                    <div class="text-center edit-ena">
                        <a href="#myModal" role="button" class="btn btn-default" data-toggle="modal" data-load-remote="<?=SITE_PATH?>ms_file/edit-product?image1=<?=$p[front]?>&image2=<?=$graphichImage?>&graphich_id=<?=$_GET[image]?>&porduct_id=<?=$p[pid]?>&change_div=image<?=$p[pid]?>" data-remote-target="#myModal .modal-body"><i class="fa fa-edit"></i> Edit</a>  
						 <?php if(isset($graph)){ ?>
                        <a href="javascript:void(0);" class="btn btn-success"><i class="fa fa-minus-circle"></i> Disable</a>
						<?php }?>
                    </div>
                </div>
            </div>
			
			<?php }?>
            
			</div>
             
            
</div>
</section>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
             
            <div class="modal-body"> 
			<!-- Remote Body Part --> 
			</div>
            <div class="modal-footer">
                <button type="button" id="closePopup"  class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="button" id="btnSave" class="btn btn-primary" value="Apply Changes"> 
				<input type="button" id="imagesave" class="btn btn-primary" value="Save Changes" style="display:none;"> 
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<section class="detail-upload">
    <div class="container">
        <div class="row">
            <div class="12">
                <p class="detils-text">We're now in German! Well...it's really only for our buyers at this stage, but
                    don't worry. We'll automatically translate the description and tags of your awesome design. In the
                    meantime, we're working on updates that will let you manage this yourself.</p>
            </div>
        </div>
		<?php 
		$tags = "";
		$data=$cms->db_query("select *  from #_user_submission where user_id='".$_SESSION['uid']."' and graphich_id = '".$_GET['image']."'");
		if(mysql_num_rows($data)){
		       
	    	    $p=$cms->db_fetch_array($data); extract($p);
				 ?><input type="hidden" value="<?=$pid?>" name="submission_id"   /><?php
			    $tagQry=$cms->db_query("select tag from #_product_tags where submission_id='".$pid."' ");
				if(mysql_num_rows($tagQry)){
					while($t=$cms->db_fetch_array($tagQry)){
						$tags .= $t[tag].",";
					}
					$tags = substr($tags,0,-1); 
				}
		}
		
		?>
		 
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="usr">Title:</label>
                    <input type="text" class="form-control" name="title" lang="R" value="<?=$title?>" title="Title" id="usr" placeholder="Title - 4 to 8 words is best" /> 
                </div>
				
                <div class="form-group">
                    <label for="usr">Descriptions:</label>
                    <textarea  name="body" lang="R"  placeholder="Descriptions about your graphic"  title="Description"  class="form-control" rows="15" id="comment"><?=$body?></textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group" style="margin-bottom:70px;">
                </div>
                <div class="form-group">
                    <label for="usr">Tags:</label>
                    <textarea class="form-control" name="tag" placeholder="Please enter tags comma seperated " lang="R" title="Tags"  rows="4" id="comment"><?=$tags?></textarea>
                </div> 

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group text-center">
                    <input type="submit" value="Save Work" class="btn btn-success"/>
                </div>
            </div>
        </div>
    </div>
</section>
</form>
<?php }?>
<?php  include_once "inc/footer.php"; ?>

<?php  include_once "inc/common_js.php" ?>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js" type="text/javascript"></script> 
<script src="<?php echo SITE_PATH?>asset/js/validate.js" type="text/javascript"></script>
<script>
$('[data-load-remote]').on('click',function(e) {
    e.preventDefault();
    var $this = $(this);
    var remote = $this.data('load-remote');
    if(remote) {
        $($this.data('remote-target')).load(remote);
    }
});
</script>

</body>

</html>
