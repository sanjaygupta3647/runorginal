<?php  
 
if(!empty($_FILES)){  
	 
	 
	$end = end(explode(".",$_FILES['file']['name']));
	$rep = ".".$end; 
	$start = $_SESSION['uid'];
	$fileName = $start."_".$cms->baseurl21(str_replace($rep,"",$_FILES['file']['name']))."-".rand().".".$end;
	 
	 
	$targetFile = UP_FILES_GRAPHICS."/".$fileName;
 
		 
	if(move_uploaded_file($_FILES['file']['tmp_name'],$targetFile)){
		//insert file information into db table
		$time = date("Y-m-d h:i:s");
		$cms->db_query("INSERT INTO  #_user_graphics set user_id = '".$_SESSION['uid']."',image= '$fileName', createTime = '$time'  ");
		$lastid = mysql_insert_id();
		$arr['path'] = $targetFile;
		$arr['image'] = $lastid;
		 
		echo json_encode($arr);
		 
	} 
	
}
?>