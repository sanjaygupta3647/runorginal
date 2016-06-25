<?php 
error_reporting(1);
 
if(isset($_POST['title']) && $_POST['title'] !=""){ 
    $_POST['title'] = trim($_POST['title']); 
	$_POST['tag'] = trim($_POST['tag']); 
    if($_POST['title']==""){
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
		
		
		if($_POST['tag']!=""){
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
    
    text-align: center;
    
    width: 100% !important;
    z-index: 1;} 
.demo{width:150px; padding:5px;cursor: move;  position:absolute;top:280px;left:300px}
.demo:hover { border: 1px solid black;}
.demo:after { border: 0px solid black;}
#content{padding-bottom:3em}
.selectColor{height:25px;width:25px;padding:10px;float:left; margin:5px; cursor:pointer;border:1px solid gray}

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
		
		<div class="row"  style="text-align:center" id="changeImageDiv" > 
		 
         </div> 
		 
		 
		 <br/>
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
					 		?> <div  id="image<?=$p[pid]?>" style="max-width: 364px;max-height: 300px; " ><img width="364" height="300"  src="<?=$UserGraphichImage?>"  /></div> <?php
					 } else{?>
					 	<div id="image<?=$p[pid]?>" style="max-width: 364px;box-sizing: border-box; -webkit-box-sizing: border-box;-moz-box-sizing: border-box;max-height: 300px;border: 1px solid #e6e6e6;cursor: pointer;position: relative;overflow: hidden;" >
					 	   <img class="canvs" style="width:auto;"  src="<?=$graphichImage?>"  />
                    	   <img src="<?=SITE_PATH?>uploaded_files/orginal/<?=$p[front]?>" width="364" height="300"  /> 
						  </div>
						  
					 <?php
					 } ?> 
					 
                    <h4><?=$p[title]?></h4> <h6>07/Enabled</h6>

                    <div class="text-center edit-ena">
                        <a href="javascript:void(0);" onclick="javascript:loadChangeDiv('<?=SITE_PATH?>uploaded_files/orginal/<?=$p[front]?>','<?php echo $graphichImage;?>','<?=$p[pid]?>');" class="btn btn-default"   ><i class="fa fa-edit"></i> Edit</a>  
						 <?php if(isset($graph)){
						 $product_graphics_id = $cms->getSingleresult("select pid from #_user_graphics_products where graphich_id='".$_GET['image']."' and user_id = '".$_SESSION['uid']."'  and porduct_id='".$p[pid]."'");
						 $statusP = $cms->getSingleresult("select status from #_user_graphics_products where graphich_id='".$_GET['image']."' and user_id = '".$_SESSION['uid']."'  and porduct_id='".$p[pid]."'");
						 ?>
                        <a href="javascript:void(0);" lang="<?=$product_graphics_id?>"  class="btn btn-success inableDisable" 
						<?=($statusP=='Active')?"":'style="background-color: lightgray;"'?> ><i class="fa fa-<?=($statusP=='Active')?'minus':'plus'?>-circle"></i>  <?=($statusP=='Active')?'Disable':'Enable'?></a>
						<?php }?>
                    </div>
                </div>
            </div>
			
			<?php }?>
            
			</div> 
            
</div>
</section>



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

 
<script src="<?php echo SITE_PATH?>asset/js/jquery-ui.min-google.js" type="text/javascript"></script>
<script src="<?php echo SITE_PATH?>asset/js/validate.js" type="text/javascript"></script>


 <script src="<?php echo SITE_PATH?>asset/js/canvas/html2canvas.js" type="text/javascript"></script>
 <script src="<?php echo SITE_PATH?>asset/js/canvas/base64.js" type="text/javascript"></script>
 <script src="<?php echo SITE_PATH?>asset/js/canvas/canvas2image.js" type="text/javascript"></script>
 <link rel="stylesheet" type="text/css" href="<?php echo SITE_PATH?>asset/css/jquery-ui.css"/>
 

<script> 
$('[data-load-remote]').on('click',function(e) {
    e.preventDefault();
    var $this = $(this);
    var remote = $this.data('load-remote');
    if(remote) {
        $($this.data('remote-target')).load(remote);
    }
});


$(document).on("click",".selectColor", function(){ 
	var getId = $(this).attr('id'); 
	var html = $(this).html(); 
	if(html){
		$(this).html('');
		$('#checkbox'+getId).val('');
	}  
	else {
	    $('#checkbox'+getId).val(getId);
		$(this).html('<i class="rb-font-icon icon-check"></i>'); 
	}
	 

})
$(document).on("click",".inableDisable", function(){ 
	var getId = $(this).attr('lang'); 
	var formData = {pid:getId};  
	$.ajax({
		url : "<?=SITE_PATH?>ms_file/pass/?action=changeStatus",
		type: "POST",
		data : formData,
		success: function(data, textStatus, jqXHR){
			data = $.trim(data);
			if(data=='1') window.location.reload();
		},
		error: function (jqXHR, textStatus, errorThrown){
				alert(errorThrown);
		}
	});

})
function loadChangeDiv(image1,image2,product_id){ 
	var formData = {'product_id':product_id, 'image1':image1,"image2":image2};  
	$.ajax({
		url : "<?=SITE_PATH?>ms_file/pass/?action=imageWork",
		type: "POST",
		data : formData,
		 beforeSend: function() { 
        	$("#changeImageDiv").html('<image src="<?=SITE_PATH?>images/ajax-loader.gif">');
   		 },
		success: function(data, textStatus, jqXHR){ 
			  $("#changeImageDiv").html(data);
			  $('.demo').draggable().resizable();
			  $('html,body').animate({
				scrollTop: $("#changeImageDiv").offset().top},
				'slow');
				},
		error: function (jqXHR, textStatus, errorThrown){
				alert(errorThrown);
		}
	});
}
</script>

<script>
$(function(){   
		
		
	  
	    $(document).on("click","#btnSave", function(){ 
			       $(".ui-resizable-se").hide();
			  	   html2canvas($("#imagecontainer"), {
					onrendered: function(canvas) {
						theCanvas = canvas;
						//document.body.appendChild(canvas);
                        $("#imagecontainer").removeAttr('style');
						  
						$("#imagecontainer").html(canvas);
						 
						$("canvas").attr("id","testCanvas");
						$("#canvasimage").val('1');
						$("#btnSave").hide();
						$("#imagesave").show();
						$('html,body').animate({
						scrollTop: $("#changeImageDiv").offset().top},
						'slow');
					}
				});
			 
			
		});

		 
	       $(document).on("click","#imagesave", function(){ 
		   $("#imagesave").val('Saving Changes....');
			var canvasData = testCanvas.toDataURL("image/png");
				//alert(canvasData); 
				var colors = "";
				$(".hiddenColor").each(function(){
					if($(this).val()){
						colors += $(this).val()+',';
					}
					
				});
				var product_id = $("#product_id").val();
				var ajax = new XMLHttpRequest();
				ajax.open("POST",'<?=SITE_PATH?>ms_file/pass/?action=saveChanges&graphich_id=<?=$graphich_id?>&porduct_id='+product_id+'&colors='+colors,false);
				ajax.onreadystatechange = function() {
					if (ajax.readyState == XMLHttpRequest.DONE) {
						var data = JSON.parse(ajax.responseText);
						//$("#imagepath").val(x.thumbpath); 
						//alert(data.image);
						var changeDiv = '#<?=$change_div?>';
						$(changeDiv).removeAttr('style');
						var imagepath = '<img src="'+data.image+'" width="364" height="300"  />';
						$(changeDiv).html(imagepath);
						$("#btnSave").show();
						$("#imagesave").hide();
						window.location.reload(); 

					}
				}
				ajax.setRequestHeader('Content-Type', 'application/upload');
				ajax.send(canvasData);
			
		});  
});
</script>

</body>

</html>
