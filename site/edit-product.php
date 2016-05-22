<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>  
<script src="<?php echo SITE_PATH?>asset/js/jquery-1.12.3.min.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo SITE_PATH?>asset/css/jquery-ui.css"/>
  
  -->
  <?php
$data = getimagesize(UP_FILES_FS_PATH."/orginal/".$image1);

?>
  <style type="text/css">
   @media screen and (min-width: 768px) {
        .modal-dialog {
          width: 48%;  
        }
        .modal-sm {
          width: 48%;  
        }
    }
    @media screen and (min-width: 992px) {
        .modal-lg {
          width: 48%;  
        }
    }  
	
</style>
 <script src="<?php echo SITE_PATH?>asset/js/canvas/html2canvas.js" type="text/javascript"></script>
 <script src="<?php echo SITE_PATH?>asset/js/canvas/base64.js" type="text/javascript"></script>
 <script src="<?php echo SITE_PATH?>asset/js/canvas/canvas2image.js" type="text/javascript"></script>
<!-- <link rel="stylesheet" type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/themes/base/jquery-ui.css"/>-->

<link rel="stylesheet" type="text/css" href="<?php echo SITE_PATH?>asset/css/jquery-ui.css"/>
 
 

						<div id="imagecontainer" style="background-image:url(<?=SITE_PATH?>uploaded_files/orginal/<?=$image1?>); height:500px; width:607px;background-repeat:no-repeat;background-position: center center;">
						 <div class="demo" id="resizeDiv"><img class="canvs2" style="width:100%;"  src="<?=$image2?>"  /></div>
						  <!--<img src="<?=SITE_PATH?>trunk/uploaded_files/orginal/<?=$image1?>" style="width: 100%; max-height:500px; top:0 !important" />-->
					 
	
					 </div>


 
 <script>
$(function(){  
	 
		$('.demo').draggable().resizable(); 
		$("#btnSave").click(function() {  
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
					}
				});
			 
			
		});

		$("#imagesave").click(function() { 
			var canvasData = testCanvas.toDataURL("image/png");
				//alert(canvasData); 
				var ajax = new XMLHttpRequest();
				ajax.open("POST",'<?=SITE_PATH?>ms_file/pass/?action=saveChanges&graphich_id=<?=$graphich_id?>&porduct_id=<?=$porduct_id?>',false);
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
						$('#closePopup').trigger('click');

					}
				}
				ajax.setRequestHeader('Content-Type', 'application/upload');
				ajax.send(canvasData);
			
		});
 
	 
	
});
</script>
