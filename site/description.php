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

<section class="description-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="prod-img">
                    <img id="myImage" src="images/description/1.jpg" class="img-responsive"/>
                </div>
                <div class="thumb">
                    <ul>
                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-search-plus"></i></a>
                        </li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal1"><img
                                src="images/description/1-back.jpg" width="30px" height="30px"/></a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal2"><img
                                src="images/description/1-design.jpg" width="30px" height="30px"/></a></li>
                    </ul>
                </div>
            </div>
            <!--end of col 8-->
            <div class="col-md-4">
                <div class="product-information">
                    <h2>Product Name</h2>
                    <h4>Men's All Type TShirt</h4>
                    <ul class="infor-list">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-share-square-o"></i></a></li>
                    </ul>
                </div>
                <!--end of product information-->
                <div class="prod-style">
                    <div class="clothing-style">
                        <div class="form-group">
                            <label for="sel1">Clothing Style</label>
                            <select class="form-control" id="sel1">
                                <option>Unisex T-Shirt</option>
                                <option>Clasic T-Shirt</option>
                            </select>
                        </div>
                    </div>
                    <!--end of clothing style-->
                    <div class="color">
                        <ul>
                            <li><a href="#x" onclick="changeImage(dm1Src)"><img
                                    src="images/description/color/gray.png"/><i class="fa fa-check"></i></a></li>
                            <li><a href="#x" onclick="changeImage(dm1Src)"><img
                                    src="images/description/color/brown.png"/><i class="fa fa-check"></i></a></li>
                            <li><a href="#x" onclick="changeImage(dm1Src)"><img
                                    src="images/description/color/gray.png"/><i class="fa fa-check"></i></a></li>
                            <li><a href="#x" onclick="changeImage(dm1Src)"><img
                                    src="images/description/color/brown.png"/><i class="fa fa-check"></i></a></li>
                            <li><a href="#x" onclick="changeImage(dm1Src)"><img
                                    src="images/description/color/gray.png"/><i class="fa fa-check"></i></a></li>
                            <li><a href="#x" onclick="changeImage(dm1Src)"><img
                                    src="images/description/color/brown.png"/><i class="fa fa-check"></i></a></li>
                        </ul>
                    </div>
                    <!--end of color-->

                    <div class="size" id="rowclick1">
                        <ul>
                            <li>
                                <input id="radio1" name="radios" type="radio" value="S"/>
                                <label for="radio1">S</label>
                            </li>
                            <li>
                                <input id="radio2" name="radios" type="radio" value="M"/>
                                <label for="radio2">M</label>
                            </li>
                            <li>
                                <input id="radio3" name="radios" type="radio" value="L"/>
                                <label for="radio3">L</label>
                            </li>
                            <li>
                                <input id="radio4" name="radios" type="radio" value="XL"/>
                                <label for="radio4">XL</label>
                            </li>
                            <li>
                                <input id="radio5" name="radios" type="radio" value="2XL"/>
                                <label for="radio5">2XL</label>
                            </li>
                            <li>
                                <input id="radio6" name="radios" type="radio" value="3XL"/>
                                <label for="radio6">3XL</label>
                            </li>

                        </ul>
                    </div>
                    <!--end of color-->


                    <div class="front-back">
                        <ul>
                            <li><a href="#x" onclick="changeImage(frontSrc)" class="btn btn-success">Front</a></li>
                            <li><span>OR</span></li>
                            <li><a href="#x" onclick="changeImage(backSrc)" class="btn btn-success">Back</a></li>
                        </ul>
                    </div>
                    <!--end of front back -->

                    <div class="price-side">
                        <span class="fi">Rs</span>
                        <span class="se">24</span>
                        <span class="th">.80</span>
                    </div>
                    <!--end of price side-->

                    <div class="add-cart">
                        <a class="btn btn-primary">Add To Cart</a>
                    </div>


                </div>
                <!--end of prod style-->
            </div>
            <!--end of col 4-->
        </div>
    </div>
</section>
<!--end of description content-->

<section class="after-description-content">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="left"><a href="#"><img src="images/side-logo.jpg" width="80px" height="80px"/></a></div>
                <div class="right">
                    <h4><a href="#">Rob Price</a></h4>

                    <p>Loream Text, USA</p>
                    <a href="#" class="btn folows">FOLLOW</a>
                </div>
            </div>
            <!--end of col 4-->
            <div class="col-md-8">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#product-info">Product <br/> info<br/>
                        <i class="fa fa-info-circle"></i></a></li>
                    <li><a data-toggle="tab" href="#review">Reviews <span style="font-size:10px;">(210)</span><br/>
                        <br/> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                class="fa fa-star"></i> <i class="fa fa-star-half-o"></i>
                    </a></li>
                    <li><a data-toggle="tab" href="#ava-product">Available <br/> Products <span
                            style="font-size:30px; display:block;">32</span></a></li>
                    <li><a data-toggle="tab" href="#notes">Artist <br/> Notes <span
                            style="font-size:30px; display:block; padding-bottom:10px;"><i class="fa fa-file-text"></i></span></a>
                    </li>
                    <li><a data-toggle="tab" href="#comment">Available <br/> comment <span
                            style="font-size:30px; display:block;">8</span></a></li>

                </ul>
            </div>
            <!--end of col 8-->
        </div>
    </div>
</section>
<!--end of after description content-->

<section class="description-tab">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tab-content">
                    <div id="product-info" class="tab-pane fade in active">
                        <div class="col-md-6 text-center">
                            <h3>Sizing Information</h3>

                            <div class="sizing-information_content">
                                <table class="sizing-information_table">
                                    <thead>
                                    <tr class="sizing-information_row__header">
                                        <th class="sizing-information_cell__header sizing-information_cell__icon"></th>
                                        <th class="sizing-information_cell__header">S</th>
                                        <th class="sizing-information_cell__header">M</th>
                                        <th class="sizing-information_cell__header">L</th>
                                        <th class="sizing-information_cell__header">XL</th>
                                        <th class="sizing-information_cell__header">2XL</th>
                                        <th class="sizing-information_cell__header">3XL</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="sizing-information_row">
                                        <th class="sizing-information_cell__header">Chest</th>
                                        <td class="sizing-information_cell">36"</td>
                                        <td class="sizing-information_cell">40"</td>
                                        <td class="sizing-information_cell">44"</td>
                                        <td class="sizing-information_cell">48"</td>
                                        <td class="sizing-information_cell">52"</td>
                                        <td class="sizing-information_cell">56"</td>
                                    </tr>
                                    <tr class="sizing-information_row">
                                        <th class="sizing-information_cell__header">Length</th>
                                        <td class="sizing-information_cell">28"</td>
                                        <td class="sizing-information_cell">29"</td>
                                        <td class="sizing-information_cell">30"</td>
                                        <td class="sizing-information_cell">31"</td>
                                        <td class="sizing-information_cell">32"</td>
                                        <td class="sizing-information_cell">33"</td>
                                    </tr>
                                    </tbody>
                                </table>

                                <img src="images/t-shirts-mens-a07384a01867e65b6f4b60b9a12a761c.png" alt="Sizing chart"
                                     class="sizing-information_illustration__t-shirt">

                                <div class="sizing-information_size-note">Model wears a size L</div>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <h3>Features</h3>
                            <ul class="product-information_content">
                                <li class="product-information_detail">Plain colour t-shirts are 100% Cotton, Heather
                                    Grey is 90% Cotton/10% Polyester, Charcoal Heather is 52% Cotton/48% Polyester
                                </li>
                                <li class="product-information_detail">Ethically sourced</li>
                                <li class="product-information_detail">Slim fit, but if that's not your thing, order a
                                    size up
                                </li>
                                <li class="product-information_detail">4.2oz/145g, but if that's too light, try our
                                    heavier classic tee.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="review" class="tab-pane fade">
                        <div class="col-md-12 text-center">
                            <h3>Men's T-Shirt Reviews</h3>
                        </div>
                        <div class="col-md-12">
                            <ul class="reviews_content">
                                <li class="reviews_review">
                                    <h3 class="review_title">
                                        <span data-bind="html: title">Men's t-shirt</span>
        <span class="review_score review_score__individual">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </span>
                                    </h3>
                                    <h4 class="review_sub-title">
                                        <span class="review_name">Suzanne</span>
        <span class="review_date"><span>Mar 19, 2016</span>
      </span></h4>

                                    <p class="review_body">Having bought a few women's t-shirts now I am really
                                        impressed with how quickly the order is processed and the quality of the
                                        material. Although I am finding the small size is a bit bigger than it used to
                                        be and there is no option for an extra small.</p>
                                </li>

                                <li class="reviews_review">
                                    <h3 class="review_title">
                                        <span>Horse t shirts</span>
        <span class="review_score review_score__individual">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </span>
                                    </h3>
                                    <h4 class="review_sub-title">
                                        <span class="review_name">Philippa</span>
        <span class="review_date"><span>Mar 17, 2016</span>
      </span></h4>

                                    <p class="review_body">I have bought 3 t shirts recently and they are beautiful !
                                        All were lovely quality and unique prints you don't find in England . I'm sure
                                        I'll be ordering more .</p>
                                </li>

                                <li class="reviews_review">
                                    <h3 class="review_title">
                                        <span>The people at this site</span>
        <span class="review_score review_score__individual">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </span>
                                    </h3>
                                    <h4 class="review_sub-title">
                                        <span class="review_name">Margy A.</span>
        <span class="review_date"><span>Mar 3, 2016</span>
      </span></h4>

                                    <p class="review_body">The people at this site are wonderful.....when my shirt
                                        didn't fit, they just sent another one without even a return of the first
                                        order!! What a treat to have such service!</p>
                                </li>

                                <li class="reviews_review">
                                    <h3 class="review_title">
                                        <span>T-Shirt</span>
        <span class="review_score review_score__individual">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </span>
                                    </h3>
                                    <h4 class="review_sub-title">
                                        <span class="review_name">Robin</span>
        <span class="review_date"><span>Feb 17, 2016</span>
      </span></h4>

                                    <p class="review_body">Not what I expected.</p>
                                </li>

                                <li class="reviews_review">
                                    <h3 class="review_title">
                                        <span>Disappointed</span>
                                        <<span class="review_score review_score__individual">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </span>
                                    </h3>
                                    <h4 class="review_sub-title">
                                        <span class="review_name">ANNE</span>
        <span class="review_date"><span>Feb 16, 2016</span>
      </span></h4>

                                    <p class="review_body">The shirt was very poorly printed. I contacted Redbubble and
                                        they reimbursed me straight away . I managed to hand paint the Mabel shooting
                                        star on a long sleeved pink tshirt and my daughter was over the moon. It looks
                                        authentic and crisp.</p>
                                </li>
                            </ul>
                            <div class="load-review text-center">
                                <input type="submit" value="Read More Review" class="btn btn-default"/>
                            </div>
                        </div>
                    </div>
                    <div id="ava-product" class="tab-pane fade">
                        <div class="row text-center">
                            <div class="col-md-12">
                                <h3 class="text-center">Apparel</h3>
                            </div>
                            <div class="col-md-3"><a href="#"><img src="images/ava-product/1.jpg"
                                                                   class="img-responsive"/>
                                <h6>product name</h6>
                            </a></div>
                            <div class="col-md-3"><a href="#"><img src="images/ava-product/2.jpg"
                                                                   class="img-responsive"/>
                                <h6>product name</h6>
                            </a></div>
                            <div class="col-md-3"><a href="#"><img src="images/ava-product/3.jpg"
                                                                   class="img-responsive"/>
                                <h6>product name</h6>
                            </a></div>
                            <div class="col-md-3"></div>
                        </div>
                        <!--end of row-->
                        <div class="row text-center" style="padding-top:30px;">
                            <div class="col-md-12">
                                <h3 class="text-center">Stationery</h3>
                            </div>
                            <div class="col-md-3"><a href="#"><img src="images/ava-product/1.jpg"
                                                                   class="img-responsive"/>
                                <h6>product name</h6>
                            </a></div>
                            <div class="col-md-3"></div>
                            <div class="col-md-3"></div>
                            <div class="col-md-3"></div>
                        </div>
                        <!--end of row-->
                    </div>
                    <div id="notes" class="tab-pane fade">
                        <div class="col-md-12">
                            <h3 class="text-center"></h3>

                            <div class="description_content" data-bind="fancyboxWidget">
                                <p><a href="#">CHECK OUT MY FLICKR</a></p>

                                <p><a href="#">CHECK OUT MY DESIGNS</a></p>

                                <div class="col-md-2"><img src="images/artist/1.png"/></div>
                                <div class="col-md-2"><img src="images/artist/2.png"/></div>
                                <div class="col-md-2"><img src="images/artist/3.png"/></div>
                                <div class="col-md-2"><img src="images/artist/4.png"/></div>
                                <div class="col-md-2"><img src="images/artist/5.png"/></div>
                                <div class="col-md-2"><img src="images/artist/6.png"/></div>
                            </div>
                        </div>
                    </div>
                    <div id="comment" class="tab-pane fade">
                        <div class="col-md-12 mb-30"><h3 class="text-center">Artwork Comments</h3></div>
                        <form>
                            <div class="col-md-2">
                                <img src="images/login-person.png" class="img-circle"/>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <textarea class="form-control" rows="3" id="comment"></textarea>
                                </div>

                                <div class="form-group">
                                    <input type="submit" value="Add comment" class="btn btn-success pull-right"/>
                                </div>

                            </div>
                        </form>
                        <div class="col-md-12 mt-30">

                            <ul class="comments_list">
                                <li class="comment">
                                    <div class="comment_avatar">
                                        <a href="#" title="view ururuty's profile">
                                            <img alt="ururuty" class="comment_avatar-image" height="60"
                                                 src="images/comment.jpg" width="60"></a>
                                    </div>
                                    <div class="comment_metadata">
                                        <div class="comment_name">
                                            <a href="#">ururuty</a>
                                            <span class="comment_date">2 days ago</span>
                                        </div>
                                        <div class="comment_comment">
                                            <p>nice work</p>
                                        </div>

                                        <div class="comment_actions" data-id="60318636">

                                        </div>
                                    </div>
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end of description tab-->

<section class="slider2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="images/side-logo.jpg" class="img-circle mid" width="80px" height="80px"/>
            </div>
            <div class="col-md-12">
                <h3 class="text-center under-line">More Work by Rob Price</h3>
                <h4 class="text-center after-text">Rob Price's Portfolio</h4>
            </div>


        </div>
    </div>
</section>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <img src="images/description/1.jpg" class="img-responsive"/>
            </div>

        </div>

    </div>
</div>

<div id="myModal1" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <img src="images/description/1-back.jpg" class="img-responsive"/>
            </div>
        </div>

    </div>
</div>

<div id="myModal2" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>

            <div class="modal-body">
                <img src="images/description/1-design.jpg" class="img-responsive"/>
            </div>

        </div>

    </div>
</div>

<!--end Modal-->
<?php include_once "footer.php"; ?>
</body>
<?php include_once SITE_FS_PATH . "/common_js.php" ?>
</html>
