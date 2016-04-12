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

//ob_start();
?>

	<?php include_once $loadpage; ?>
	
<?php
//---- this script to parse all content and parse to replace keys
/*$templateContent = ob_get_contents();
ob_end_clean();
$templateContent = str_replace("%%title%%",SITE_TITLE,$templateContent);
//$templateContent = str_replace("%%title%%",$metaTitle,$templateContent);
if($items[0]=="detail" || $items[0]=="event" || $items[0]=="article" || $items[0]=="page" || $items[0]=="partner_detail"){
	$templateContent = str_replace("%%pagetitle%%",$metaTitle . " - ",$templateContent);
}else{
	$templateContent = str_replace("%%pagetitle%%","",$templateContent);
}
$templateContent = str_replace("%%description%%",$metaIntro,$templateContent);
$metaDate=str_replace(' ','TO',$metaDate) . '+00:00';
$templateContent = str_replace("%%datetime%%",$metaDate,$templateContent);
$metaURI="http://www." . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$templateContent = str_replace("%%uri%%",$metaURI,$templateContent);
$templateContent = str_replace("%%lang%%",$_SESSION['lang'],$templateContent);
$templateContent = str_replace("%%keywords%%",$metaKeyword,$templateContent);
echo $templateContent;*/

?>
