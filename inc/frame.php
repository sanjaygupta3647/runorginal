<?php
putenv("TZ=Asia/Calcutta");
if(count($pageurl)){
		if(count($items) >= 1){
			$page = $items[0].".php";
		}
		if($items[0]!="" && file_exists("site/".$page)){
			$loadpage=$page;
		} else if(in_array($items[0],$addsarr)){
			$purl=$items[0];
			$loadpage="detail.php";
		}else if($items[0] == ""){
			$loadpage="index.php";
		}else{
			$loadpage="page.php";
		}
}else{
	if(count($items) >= 1){
		$page = $items[0].".php";
	}
	if($items[0]!="" && file_exists("site/".$page)){
		$loadpage=$page;
	}else{
		$loadpage="index.php";
	}
} 
$loadpage="site/".$loadpage;
include_once $loadpage;
?>