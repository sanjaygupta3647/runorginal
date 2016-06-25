<?php 
if($action == "saveChanges"){
	//print_r($_SESSION); die;
	if (isset($GLOBALS["HTTP_RAW_POST_DATA"]))
	{
	  
	  $imageData=$GLOBALS['HTTP_RAW_POST_DATA'];
	 
	  $filteredData=substr($imageData, strpos($imageData, ",")+1);
	 
	  $unencodedData=base64_decode($filteredData);
	  
	  $arr['graphich_id'] = $_GET['graphich_id'];
	  $arr['user_id'] = $_SESSION['uid'];
	  $arr['porduct_id'] = $_GET['porduct_id'];
	  $arr['colors'] = substr($_GET['colors'],0,-1);
	  $filename = $cms->getSingleresult("select image  from #_user_graphics_products where graphich_id='".$_GET['graphich_id']."' and user_id = '".$_SESSION['uid']."'  and porduct_id='".$_GET['porduct_id']."'");  
	  if(!$filename){
		$start =  $_SESSION['uid'];
		$filename = $start."_".time().".png";
		$arr['image'] = $filename;
		$cms->sqlquery("rs","user_graphics_products",$arr); 
	  } 
	  $fp = fopen(UP_FILES_USER_GRAPHICS.'/'.$filename, 'wb' );
	  fwrite( $fp, $unencodedData);
	  fclose( $fp );
	  $file['image'] = SITE_PATH."uploaded_files/user-graphics/".$filename; 

	  echo json_encode($file); die;
	}	 
}


if($action == "changeStatus"){
	//print_r($_SESSION); die;
	if (isset($_POST["pid"])){  
	  $getStatus = $cms->getSingleresult("select status  from #_user_graphics_products where pid='".$_POST['pid']."'  ");  
	  if($getStatus=='Active') $status = 'Inactive'; else $status = 'Active';
	  $cms->db_query("update #_user_graphics_products set status= '$status' where pid='".$_POST["pid"]."'");
      echo "1"; die;
	   
	}else{
		echo "Invalid Attempt"; die;
	}	 
}

if($action == "imageWork"){

?> 
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet"> 
<table width="100%" border='1'><tr>
		<td width="75%"> 
		<div id="imagecontainer" style="background-image:url(<?=$_POST[image1]?>); width:100%; height:700px; background-repeat:no-repeat;background-position: center;">  
		<div id="resizeDiv" class="demo">
		<img src="<?=$_POST[image2]?>" style="width:100%;" class="canvs2">   
		</div>
		</div>
		
		</td>
		<td width="25%" valign="top">
		         <input type="hidden" id="product_id" name="product_id" value="<?=$_POST[product_id]?>" />
				 <input type="hidden" id="colors" name="colors" value="" />
		         <div class="color" style="padding:10px;">
				       <h3> Select Color</h3>
						 <?php
							$colors = $cms->getSingleresult("select colors from fz_products where pid = '".$_POST[product_id]."' ");
							if($colors){
							$rsColor=$cms->db_query("select pid, colorcode from #_color  where pid in (".$colors.") and status = 'Active' ");
							while($color=$cms->db_fetch_array($rsColor)){
							
							?><div class="selectColor" id="<?=$color[pid]?>" style="background-color: #<?=$color[colorcode]?>;  "><i class="rb-font-icon icon-check"></i></div>
							  <input id="checkbox<?=$color[pid]?>" class="hiddenColor" type="hidden"   name="color[]" value="<?=$color[pid]?>">
							<?php
							}  	
							}
						 ?>
					      
                        <!--<i class="fa fa-check"></i>-->  
						
						  
                    </div>

					<input type="button" id="btnSave" class="btn btn-primary" value="Apply Changes" style="margin-top:25%; "> 
				    <input type="button" id="imagesave" class="btn btn-primary" value="Save Changes" style="margin-top:25%;display:none;"> 
					 
					
					
					</td>
					</tr></table>


<?php
} 
?>