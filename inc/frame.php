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
<!doctype html>
<html>
<head>
	<title>Run Original</title><!--%%title%%-->
	<base href="<?=SITE_PATH?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="schema.DC" href="http://purl.org/dc/elements/1.1/" />
	<link rel="schema.DCTERMS" href="http://purl.org/dc/terms/" />
	<!-- Start: Meta Info -->
	<!--<meta property="og:image" content="" />-->
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	<meta name="google-site-verification" content="YF0StaN8k3nLmmL5Bh48YgpXGNioIy3luUyOqYVJB-E" />
	<meta name="DC.title" content="%%title%%" />
	<meta name="DC.creator" content="<?=(SITE_COMPANY)?SITE_COMPANY:''?> CDI" />
	<meta name="DC.subject" content="Meta-data" />
	<meta name="DC.description" content="%%description%%" />
	<meta name="DC.publisher" content="<?=(SITE_COMPANY)?SITE_COMPANY:''?> CDI" />
	<meta name="DC.contributor" content="<?=(SITE_COMPANY)?SITE_COMPANY:''?> CDI" />
	<meta name="DC.date" content="%%datetime%%" scheme="DCTERMS.W3CDTF" />
	<meta name="DC.type" content="Text" scheme="DCTERMS.DCMIType" />
	<meta name="DC.format" content="text/html" scheme="DCTERMS.IMT" />
	<meta name="DC.identifier" content="%%uri%%" scheme="DCTERMS.URI" />
	<meta name="DC.source" content="http://www.w3.org/TR/html401/struct/global.html#h-7.4.4" scheme="DCTERMS.URI" />
	<meta name="DC.language" content="%%lang%%" scheme="DCTERMS.RFC3066" />
	<meta name="DC.relation" content="http://dublincore.org/" scheme="DCTERMS.URI" />
	<meta name="DC.coverage" content="<?=(SITE_COMPANY)?SITE_COMPANY:''?> CDI" scheme="DCTERMS.TGN" />
	<meta name="DC.rights" content="All rights reserved" />
	<meta name="author" content="<?=(SITE_COMPANY)?SITE_COMPANY:''?> CDI" />
	<meta name="keywords" content="%%keywords%%" />
	<meta name="description" content="%%description%%" />
	<?php include_once "common_css.php"; ?>
</head>
<body>
<div class="main-container">
	<?php include "header.php"; ?>
	<?php include_once $loadpage; ?>
	<?php include "footer.php"; ?>
</body>
<?php include_once "common_js.php"; ?>
</html>
<?php
//---- this script to parse all content and parse to replace keys
$templateContent = ob_get_contents();
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
echo $templateContent;

?>
