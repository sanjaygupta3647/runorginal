<header>
<link rel="icon" href="images/favicon.ico" type="image/ico" sizes="16x16">
<div class="top-bar">
<div class="container">
<div class="row">
<div class="col-md-6">
<a href="#" class="pull-left">Sell Your Cart</a>
</div>
<div class="col-md-6 profile-menu">
<ul class="nav pull-right">
					<?php if(isset($_SESSION['uid']) && $_SESSION['uid'] > 0){
					
					$userData =$cms->db_query("select * from #_user where pid='".$_SESSION['uid']."' ");
					$u=$cms->db_fetch_array($userData); extract($u);
					 
					
					
					?>
					  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, <?=$username?> <b class="caret"></b></a>
                        <ul class="dropdown-menu"> 
                            <li><a href="<?=SITE_PATH_USER?>profile">Profile Summary</a></li>
							<li><a href="<?=SITE_PATH_USER?>edit-profile">Edit Profile</a></li>
                            <li><a href="sign-out">Sign out</a></li>
                        </ul>
                    </li> 
                    <?php }else{?>
                        <li><a href="sign-in" class="pull-right">sign in</a></li>
                    <?php }?>
                    
</ul>                    
</div><!--end of col-6-->
</div><!--end of row-->
</div><!--end of container-->
</div><!--end of top bar-->

<div class="mid-bar">
<div class="container">
<div class="row">
<div class="col-md-3"><a href="index.html"><img src="images/logo.png" /></a></div>
<div class="col-md-9">
<div class="cart"><img src="images/cart.png">
 </div>
<div class="search-panel">
<label><img src="images/search.png"> </label>
<input type="text" value="" placeholder="Search products, artworks and themes">
</div><!--end of search pannel-->
</div>
</div><!--end of row-->
</div><!--end of container-->
</div><!--end of mid bar-->
<div class="menu-bar">
<div class="container">
<div class="row">
<div class="col-md-12">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active dropdown"><a class="first" href="#">Men's</a>
        <ul class="dropdown-menu">
          <li><a href="#">T-Shirts</a></li>
    	  <li><a href="#">V-Neck</a></li>
    	  <li><a href="#">Long Sleeves</a></li>
    	  <li><a href="#">Baseball ¾ Sleeves</a></li>
    	  <li><a href="#">Hoodies</a></li>
    	  <li><a href="#">Sweatshirts</a></li>
        </ul>
        </li>
        <li><a href="#">Women's</a></li>
        <li><a href="#">Kids</a></li> 
        <li><a href="#">Cases & Skins</a></li> 
        <li><a href="#">Stickers</a></li>
        <li><a href="#">Wall Art</a></li>
        <li><a href="#">Home Decor</a></li>   
        <li><a href="#">Stationery</a></li>  
        <li><a href="#">Bags</a></li>           
      </ul>
      
    </div>
    
    
  </div>
</nav>
</div>
</div>
</div>
</div><!--end of menu bar-->
</header>