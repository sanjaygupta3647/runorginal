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
 
?>