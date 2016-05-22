<?php 
	$cms->checkLogin();
	 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>User Profile - Run Original</title> 
    <base href="<?=SITE_PATH?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="keywords" content="User Profile - Run Original" />
    <meta name="description" content="User Profile - Run Original" />
	
    <?php include_once "inc/common_css.php"; ?>
</head>
<body>

<?php include_once "inc/header.php"; ?>

<section class="publication">
    <div class="container">
        <div class="col-md-12">
            <h2 class="p-warning">
                <b>You are not yet able to sell your work</b> - <a href="#" class="btn btn-success">Complete Payment
                    Details</a>
            </h2>
        </div>
        <!--end of col 12-->
    </div>
</section>

<section class="under-publication">
    <div class="container">
        <div class="col-md-12">
            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
			<?php
				if($image and is_file($_SERVER['DOCUMENT_ROOT'].SITE_SUB_PATH."uploaded_files/user/".$image)==true){
					$path = SITE_PATH."uploaded_files/user/".$image;
				}else{
					$path = SITE_PATH."images/profile1.png";
				}
					?>
					
                <img src="<?=$path?>" style="max-height:117px; max-width:117px;"/>

                <h2><?=$username?></h2>
                <h4><span><?=($city)?$city.',':''?></span><span>India</span></h4>
            </div>
             
            <!--end of pull right-->
        </div>
        <!--end of col 12-->
    </div>
</section>
<!--end of under plication-->

<section class="profile-tabs-new">
    <div class="pro-port">
        <div class="container">
            <div class="col-md-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#profile">Profile</a></li>
                    <li><a data-toggle="tab" href="#portfolio">Portfolio</a></li>
                    <li><a   href="<?=SITE_PATH_USER.$items[0]?>/shop">Shop</a></li>
                    <li><a data-toggle="tab" href="#journal">Journal</a></li>
                    <li><a data-toggle="tab" href="#favorite">Favorites</a></li>
                    <li><a data-toggle="tab" href="#following">Followig</a></li>
                </ul>
            </div>
            <!--end of col 12-->
        </div>
    </div>
    <!--end of pro-port-->
    <div class="pro-port-content">
        <div class="container">
            <div class="col-md-12">
                <div class="tab-content">
                    <div id="profile" class="tab-pane fade in active">
                        <div class="col-md-6">
                            <h3>Welcome to your very own corner of Run Orignal. Here you'll find your public profile,
                                portfolio & shop.</h3>
                            <h5>Tell us Little about yourself and your work.</h5>
                            <a href="<?=SITE_PATH_USER?>edit-profile"><i class="fa fa-edit"></i> EDIT</a>
                            <h5><span>Joined:</span> <?=date("d M, Y",$reg_time)?></h5>
                        </div>
                        <!--end of col 6-->
                        <div class="col-md-6">
                            <div id="custom-search-input">
                                <div class="input-group col-md-12">
                                    <input type="text" class="  search-query form-control" placeholder="Search"/>
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                                </div>
                            </div>
                            <!--end of custom search input-->
                            <div class="recently-work">
                                <h3>Recently work <a class="pull-right" href="<?=SITE_PATH_USER?>add-new-work">Add New Work <i
                                            class="fa fa-plus-circle"></i></a></h3>

                                <div class="recentwork-box"><?php
								$workQry=$cms->db_query("select pid, image from #_user_graphics where user_id='".$_SESSION['uid']."' order by pid desc ");
								if(mysql_num_rows($workQry)){
									while($w=$cms->db_fetch_array($workQry)){
										?><div class="col-md-4"><a href="<?=SITE_PATH_USER?>add-new-work/?image=<?=$w[pid]?>"><img src="<?=SITE_PATH?>uploaded_files/graphics/<?=$w[image]?>" width="100"  style="max-height:100px;" class="img-responsive"/></a></div> <?php
									}
									 
								}?>
                                    
                                </div>
                            </div>
                            <!--end of recently work-->
                        </div>
                        <!--end of col 6-->
                    </div>
                    <div id="portfolio" class="tab-pane fade">
                        <div class="col-md-12">
                            <h3>Portfolio</h3>
                        </div>
                        <!--end of col 12-->
                        <div class="col-md-12">
                            <div class="col-md-3">
                                <div class="portfolio-box-000">
                                    <h4>Collections</h4>
                                     

                                    <div class="under-box-000">
                                        <h4>Refine Your Search</h4>
                                        <h4 class="top-tags">Top Tags <i class="fa fa-plus"></i></h4>
										<ul style="list-style-type: none;">
										       <?php 
											    $tagArr = $cms->getAlltags($items[0]);  
												if(count($tagArr)){
													?> <?php
													foreach($tagArr as $val ){
														 ?> <li><a href="#" style="text-decoration: none;"><?=$val?></a></li><?php
													}	
												}else{
												    ?><li><a href="#" style="text-decoration: none;">No tags Available</a></li><?php
												}
												
												?> 
										     
										</ul>
                                      
										<div class="form-group">
											<label for="sel1">Filter by Median</label>
											<?php $catArr = $cms->getAvailableCategory($items[0]);
 ?>
											<select class="form-control" id="sel1">
											    
											    <?php 
												if(!count($catArr)) $catArr = array('0');
												$catQry=$cms->db_query("select pid, name from #_category where pid in   (".implode(',',$catArr).")");
												if(mysql_num_rows($catQry)){
													?><option value="">--Select category--</option><?php
													while($c=$cms->db_fetch_array($catQry)){
														 ?><option value="<?=$c[pid]?>"><?=$c[name]?></option><?php
													}	
												}else{
												    ?><option>No Further Filter Available</option><?php
												}
												
												?> 
											</select>
										</div>

                                         

                                    </div>
                                </div>
                            </div>
                            <!--end of col 3-->
                            <div class="col-md-9">
                                <div class="col-md-12">
                                    <ul class="nav nav-tabs">
                                        <li><a data-toggle="tab" href="#topselling">Top Selling</a></li>
                                        <li class="active"><a data-toggle="tab" href="#recent">Recent</a></li>
                                        <li><a data-toggle="tab" href="#allpopular">All Time Popular</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-12">
                                    <div class="tab-content">
                                        <div id="topselling" class="tab-pane fade">

										<?php
										$workQry=$cms->db_query("select pid, image from #_user_graphics where user_id='".$_SESSION['uid']."' order by rand()");
										if(mysql_num_rows($workQry)){
											while($w=$cms->db_fetch_array($workQry)){
												?><div class="col-md-4"><a href="<?=SITE_PATH?>add-new-work/?image=<?=$w[pid]?>"><img src="<?=SITE_PATH?>uploaded_files/graphics/<?=$w[image]?>" width="100"  style="max-height:100px;" class="img-responsive"/></a></div> <?php
											}
											 
										}?>
                                           

                                        </div>
                                        <!--end of topselling-->
                                        <div id="recent" class="tab-pane fade in active">
										<?php
										$workQry=$cms->db_query("select pid, image from #_user_graphics where user_id='".$_SESSION['uid']."' order by pid desc ");
										if(mysql_num_rows($workQry)){
											while($w=$cms->db_fetch_array($workQry)){
												?><div class="col-md-4"><a href="<?=SITE_PATH?>add-new-work/?image=<?=$w[pid]?>"><img src="<?=SITE_PATH?>uploaded_files/graphics/<?=$w[image]?>" width="100"  style="max-height:100px;" class="img-responsive"/></a></div> <?php
											}
											 
										}?>
                                           
                                        </div>
                                        <!--end of recent-->
                                        <div id="allpopular" class="tab-pane fade">

										<?php
										$workQry=$cms->db_query("select pid, image from #_user_graphics where user_id='".$_SESSION['uid']."' order by pid desc ");
										if(mysql_num_rows($workQry)){
											while($w=$cms->db_fetch_array($workQry)){
												?><div class="col-md-4"><a href="<?=SITE_PATH?>add-new-work/?image=<?=$w[pid]?>"><img src="<?=SITE_PATH?>uploaded_files/graphics/<?=$w[image]?>" width="100"  style="max-height:100px;" class="img-responsive"/></a></div> <?php
											}
											 
										}?>
                                           

                                        </div>
                                        <!--end of all popular-->
                                    </div>
                                    <!--end of tab pane-->
                                </div>
                            </div>
                            <!--end of col 9-->
                        </div>
                        <!--end of col 12-->
                    </div>
                    <!--end of portfolio-->
                    <div id="shop" class="tab-pane fade">
                        <h3>Menu 2</h3>

                        <p>Some content in menu 2.</p>
                    </div>
                    <div id="journal" class="tab-pane fade">
                        <h3>Menu 2</h3>

                        <p>Some content in menu 2.</p>
                    </div>
                    <div id="favorite" class="tab-pane fade">
                        <h3>Menu 2</h3>

                        <p>Some content in menu 2.</p>
                    </div>
                    <div id="following" class="tab-pane fade">
                        <h3>Menu 2</h3>

                        <p>Some content in menu 2.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end of pro port content-->

</section>
<!--end of profile tabs new-->
<?php include_once "inc/footer.php"; ?>
</body>
<?php include_once "inc/common_js.php" ?>
<script>
    var dm1Src = "images/brown-tshirt.jpg";
    var dm2Src = "images/brown-tshirt.jpg";
    var dm3Src = "images/brown-tshirt.jpg";
    var frontSrc = "images/description/1.jpg";
    var backSrc = "images/description/1-back.jpg";


    function changeImage(src) {
        document.getElementById("myImage").src = src;
    }

    function outImage(src) {
        document.getElementById("myImage").src = "img/megamenu_default.png";
    }

</script>

<script>
    $('#btn').click(function () {
        $("input[type='radio']:checked").each(function () {
            var idVal = $(this).attr("id");
            alert($("label[for='" + idVal + "']").text());
        });
    });
</script>

</html>