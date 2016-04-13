<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
    <?php include_once SITE_FS_PATH . "/common_css.php"; ?>
</head>
<body>

<?php include_once "header.php"; ?>

<section class="title">
    <div class="container">
        <div class="col-md-12 text-center">
            <h1>Men's T-Shirts</h1>
            <h4>Men's t-shirts are printed with designs from independent artists. Funny, cool, or just plain weird, find
                uncommon artwork that smacks you in the heart.</h4>
        </div>
    </div>
</section>
<!--End section title-->

<section class="cate">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-xs-12">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a data-toggle="tab" href="#t-shirt">
                            <img src="images/t-shirt_mens.png"/>
                            <span>T-Shirt</span>
                        </a>
                    </li>
                    <li><a data-toggle="tab" href="#graphics-tshirt">
                            <img src="images/mens-graphic-t-shirt.png"/>
                            <span>Graphic T-<br/>Shirts</span>
                        </a></li>
                    <li><a data-toggle="tab" href="#menu1"><img src="images/t-shirt_vneck.png"/>
                            <span>V-Necks</span>
                        </a></li>
                    <li><a data-toggle="tab" href="#menu2"><img src="images/t-shirt_longsleeve.png"/>
                            <span>Logng<br/>Sleeves</span>
                        </a></li>
                    <li><a data-toggle="tab" href="#menu3"><img src="images/t-shirt_raglan.png"/>
                            <span>Baseball &frac34; <br/>Sleeves</span>
                        </a></li>
                    <li><a data-toggle="tab" href="#menu4"><img src="images/t-shirt_mhoodie.png"/>
                            <span>Hoodies</span>
                        </a></li>
                    <li><a data-toggle="tab" href="#menu5"><img src="images/t-shirt_pullover.png"/>
                            <span>Sweatshirts</span>
                        </a></li>
                </ul>
            </div>
        </div>
        <!--end of first row-->
        <div class="row">
            <div class="col-md-12">
                <div class="tab-content">
                    <div id="t-shirt" class="tab-pane fade in active">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img1.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg1.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img2.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg2.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img3.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg3.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                        </div>
                        <!--end of 1 row-->
                        <div class="row">
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img1.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg1.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img2.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg2.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img3.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg3.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                        </div>
                        <!--end of 2 row-->
                        <div class="row">
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img1.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg1.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img2.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg2.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img3.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg3.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                        </div>
                        <!--end of 3 row-->
                        <div class="row">
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img1.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg1.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img2.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg2.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img3.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg3.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                        </div>
                        <!--end of 4 row-->
                    </div>
                    <!--end of t-shirt id-->
                    <div id="graphics-tshirt" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img1.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg1.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img2.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg2.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img3.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg3.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                        </div>
                        <!--end of row-->
                    </div>
                    <!--end of graphics t shirt-->
                    <div id="menu1" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img1.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg1.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img2.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg2.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img3.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg3.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                        </div>
                        <!--end of row-->
                    </div>
                    <!--end of menu1-->
                    <div id="menu2" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img1.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg1.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img2.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg2.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img3.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg3.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                        </div>
                        <!--end of row-->
                    </div>
                    <!--end of menu 2-->
                    <div id="menu3" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img1.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg1.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img2.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg2.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img3.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg3.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                        </div>
                        <!--end of row-->
                    </div>
                    <!--end of menu 3-->
                    <div id="menu4" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img1.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg1.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img2.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg2.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img3.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg3.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                        </div>
                        <!--end of row-->
                    </div>
                    <!--end of menu 4-->
                    <div id="menu5" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img1.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg1.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img2.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg2.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                            <div class="col-md-3">
                                <div class="cat-box">
                                    <img class="album-pic" src="images/t-shirt-img3.jpg">

                                    <div class="overlay"><img class="album-pic-exit"
                                                              src="images/t-shirt-graphics-bg3.jpg"></div>
                                    <div class="price">
                                        <span class="a">$</span>
                                        <span class="b">24</span>
                                        <span class="c">.80</span>
                                    </div>
                                    <!--end of price-->
                                </div>
                            </div>
                            <!--end of col 3-->
                        </div>
                        <!--end of row-->
                    </div>
                    <!--end of menu 5-->

                </div>
            </div>
        </div>
        <!--end of second row-->
    </div>
</section>
<?php include_once "footer.php"; ?>
</body>
<?php include_once SITE_FS_PATH . "/common_js.php" ?>
</html>
