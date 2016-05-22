<?php
putenv("TZ=Asia/Calcutta"); 
if(count($items) >= 1){
	$page = $items[0].".php";
}
if($items[0]!="" && file_exists("site/".$page)){
	$loadpage=$page;
}else{
	if(!count($items)){
		$loadpage="index.php";;
	}else{
		$check = $cms->getSingleresult("select count(*) from #_user where username = '".$items[0]."' and status = 'Active'");
		if($check && $items[0]!=""){
			$loadpage = $items[1].".php";
		}else{ 
			if(count($items) > 1){
				header("Location:".SITE_PATH); die;
			}
			
		}
	}
	
	
}
 
$loadpage="site/".$loadpage;
include_once $loadpage;
?>