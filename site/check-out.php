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
    <?php include_once SITE_FS_PATH . "/common_css.php"; ?>
</head>
<body>
<div class="main-container">
    <?php include "header.php"; ?>


    <section class="cart-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3><i class="fa fa-lock"></i> Secure Checkout</h3>
            </div>
        </div>
        <!--end of first row-->

        <div class="row">
            <div class="col-md-12">
                <div class="check-box">
                    <h3 class="check-box-head">Delivery & Shipping</h3>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Recipient Details</label>
                        </div>
                        <!--end of form group-->
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="First name"/>
                        </div>
                        <!--end of form group-->
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Last name"/>
                        </div>
                        <!--end of form group-->
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone No."/>
                        </div>
                        <!--end of form group-->
                        <div class="form-group">
                            <label>Email Address</label>
                        </div>
                        <!--end of form group-->
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="email@example.com"/>
                        </div>
                        <!--end of form group-->
                        <div class="form-group">
                            <ul>
                                <li>Your receipt will be emailed to this address</li>
                                <li>We won't pass your email on to anyone else</li>
                                <li>We hate spam too</li>
                            </ul>
                        </div>
                        <!--end of form group-->
                    </div>
                    <!--end of col 4-->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Shipping Address</label>
                        </div>
                        <!--end of form group-->
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Address Line 1"/>
                        </div>
                        <!--end of form group-->
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Address Line 2 (optional)"/>
                        </div>
                        <!--end of form group-->
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="City or suburb"/>
                        </div>
                        <!--end of form group-->
                        <div class="form-group">
                            <select class="form-control" id="sel1">
                                <option value="">State, Region or Province</option>
                                <option value="">Alaska</option>
                                <option value="">Alabama</option>
                                <option value="">Arkansas</option>
                                <option value="">American Samoa</option>
                                <option value="">Arizona</option>
                                <option value="">California</option>
                                <option value="">Colorado</option>
                                <option value="">Connecticut</option>
                                <option value="">District of Columbia</option>
                                <option value="">Delaware</option>
                                <option value="">Florida</option>
                                <option value="">Georgia</option>
                                <option value="">Guam</option>
                                <option value="">Hawaii</option>
                                <option value="">Iowa</option>
                                <option value="">Idaho</option>
                                <option value="">Illinois</option>
                                <option value="">Indiana</option>
                                <option value="">Kansas</option>
                                <option value="">Kentucky</option>
                                <option value="">Louisiana</option>
                                <option value="">Massachusetts</option>
                                <option value="">Maryland</option>
                                <option value="">Maine</option>
                                <option value="">Michigan</option>
                                <option value="">Minnesota</option>
                                <option value="">Missouri</option>
                                <option value="">Northern Mariana Islands</option>
                                <option value="">Mississippi</option>
                                <option value="">Montana</option>
                                <option value="">North Carolina</option>
                                <option value="">North Dakota</option>
                                <option value="">Nebraska</option>
                                <option value="">New Hampshire</option>
                                <option value="">New Jersey</option>
                                <option value="">New Mexico</option>
                                <option value="">Nevada</option>
                                <option value="">New York</option>
                                <option value="">Ohio</option>
                                <option value="">Oklahoma</option>
                                <option value="">Oregon</option>
                                <option value="">Pennsylvania</option>
                                <option value="">Puerto Rico</option>
                                <option value="">Rhode Island</option>
                                <option value="">South Carolina</option>
                                <option value="">South Dakota</option>
                                <option value="">Tennessee</option>
                                <option value="">Texas</option>
                                <option value="">United States Minor Outlying Islands</option>
                                <option value="">Utah</option>
                                <option value="">Virginia</option>
                                <option value="">Virgin Islands</option>
                                <option value="">Vermont</option>
                                <option value="">Washington</option>
                                <option value="">Wisconsin</option>
                                <option value="">West Virginia</option>
                                <option value="">Wyoming</option>
                                <option value="">Armed Forces Americas (except Canada)</option>
                                <option value="">Armed Forces Africa, Canada, Europe, Middle East</option>
                                <option value="">Armed Forces Pacific</option>
                            </select>
                        </div>
                        <!--end of form group-->
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Zip Or Postcode"/>
                        </div>
                        <!--end of form group-->
                        <div class="form-group">
                            <select class="form-control" id="sel1">
                                <option value="">Country</option>
                                <option value="">Australia</option>
                                <option value="">New Zealand</option>
                                <option value="">United Kingdom</option>
                                <option value="">United States</option>
                                <option value="">Germany</option>
                                <option value=""></option>
                                <option value="">Afghanistan</option>
                                <option value="">Åland Islands</option>
                                <option value="">Albania</option>
                                <option value="">Algeria</option>
                                <option value="">American Samoa</option>
                                <option value="">Andorra</option>
                                <option value="">Angola</option>
                                <option value="">Anguilla</option>
                                <option value="">Antarctica</option>
                                <option value="">Antigua and Barbuda</option>
                                <option value="">Argentina</option>
                                <option value="">Armenia</option>
                                <option value="">Aruba</option>
                                <option value="">Australia</option>
                                <option value="">Austria</option>
                                <option value="">Azerbaijan</option>
                                <option value="">Bahamas</option>
                                <option value="">Bahrain</option>
                                <option value="">Bangladesh</option>
                                <option value="">Barbados</option>
                                <option value="">Belarus</option>
                                <option value="">Belgium</option>
                                <option value="">Belize</option>
                                <option value="">Benin</option>
                                <option value="">Bermuda</option>
                                <option value="">Bhutan</option>
                                <option value="">Bolivia</option>
                                <option value="">Bosnia and Herzegovina</option>
                                <option value="">Botswana</option>
                                <option value="">Bouvet Island</option>
                                <option value="">Brazil</option>
                                <option value="">British Indian Ocean Territory</option>
                                <option value="">Brunei Darussalam</option>
                                <option value="">Bulgaria</option>
                                <option value="">Burkina Faso</option>
                                <option value="">Burundi</option>
                                <option value="">Cambodia</option>
                                <option value="">Cameroon</option>
                                <option value="">Canada</option>
                                <option value="">Cape Verde</option>
                                <option value="">Cayman Islands</option>
                                <option value="">Central African Republic</option>
                                <option value="">Chad</option>
                                <option value="">Chile</option>
                                <option value="">China</option>
                                <option value="">Christmas Island</option>
                                <option value="">Cocos (Keeling) Islands</option>
                                <option value="">Colombia</option>
                                <option value="">Comoros</option>
                                <option value="">Congo</option>
                                <option value="">Congo, the Democratic Republic of The</option>
                                <option value="">Cook Islands</option>
                                <option value="">Costa Rica</option>
                                <option value="">Cote D'ivoire</option>
                                <option value="">Croatia</option>
                                <option value="">Cuba</option>
                                <option value="">Cyprus</option>
                                <option value="">Czech Republic</option>
                                <option value="">Denmark</option>
                                <option value="">Djibouti</option>
                                <option value="">Dominica</option>
                                <option value="">Dominican Republic</option>
                                <option value="">Ecuador</option>
                                <option value="">Egypt</option>
                                <option value="">El Salvador</option>
                                <option value="">Equatorial Guinea</option>
                                <option value="">Eritrea</option>
                                <option value="">Estonia</option>
                                <option value="">Ethiopia</option>
                                <option value="">Falkland Islands (Malvinas)</option>
                                <option value="">Faroe Islands</option>
                                <option value="">Fiji</option>
                                <option value="">Finland</option>
                                <option value="">France</option>
                                <option value="">French Guiana</option>
                                <option value="">French Polynesia</option>
                                <option value="">French Southern Territories</option>
                                <option value="">Gabon</option>
                                <option value="">Gambia</option>
                                <option value="">Georgia</option>
                                <option value="">Germany</option>
                                <option value="">Ghana</option>
                                <option value="">Gibraltar</option>
                                <option value="">Greece</option>
                                <option value="">Greenland</option>
                                <option value="">Grenada</option>
                                <option value="">Guadeloupe</option>
                                <option value="">Guam</option>
                                <option value="">Guatemala</option>
                                <option value="">Guernsey</option>
                                <option value="">Guinea</option>
                                <option value="">Guinea-bissau</option>
                                <option value="">Guyana</option>
                                <option value="">Haiti</option>
                                <option value="">Heard Island and Mcdonald Islands</option>
                                <option value="">Holy See (Vatican City State)</option>
                                <option value="">Honduras</option>
                                <option value="">Hong Kong</option>
                                <option value="">Hungary</option>
                                <option value="">Iceland</option>
                                <option value="">India</option>
                                <option value="">Indonesia</option>
                                <option value="">Iran, Islamic Republic Of</option>
                                <option value="">Iraq</option>
                                <option value="">Ireland</option>
                                <option value="">Isle of Man</option>
                                <option value="">Israel</option>
                                <option value="">Italy</option>
                                <option value="">Jamaica</option>
                                <option value="">Japan</option>
                                <option value="">Jersey</option>
                                <option value="">Jordan</option>
                                <option value="">Kazakhstan</option>
                                <option value="">Kenya</option>
                                <option value="">Kiribati</option>
                                <option value="">Korea, Democratic People's Republic Of</option>
                                <option value="">Korea, Republic Of</option>
                                <option value="">Kuwait</option>
                                <option value="">Kyrgyzstan</option>
                                <option value="">Lao People's Democratic Republic</option>
                                <option value="">Latvia</option>
                                <option value="">Lebanon</option>
                                <option value="">Lesotho</option>
                                <option value="">Liberia</option>
                                <option value="">Libyan Arab Jamahiriya</option>
                                <option value="">Liechtenstein</option>
                                <option value="">Lithuania</option>
                                <option value="">Luxembourg</option>
                                <option value="">Macao</option>
                                <option value="">Macedonia, the Former Yugoslav Republic Of</option>
                                <option value="">Madagascar</option>
                                <option value="">Malawi</option>
                                <option value="">Malaysia</option>
                                <option value="">Maldives</option>
                                <option value="">Mali</option>
                                <option value="">Malta</option>
                                <option value="">Marshall Islands</option>
                                <option value="">Martinique</option>
                                <option value="">Mauritania</option>
                                <option value="">Mauritius</option>
                                <option value="">Mayotte</option>
                                <option value="">Mexico</option>
                                <option value="">Micronesia, Federated States Of</option>
                                <option value="">Moldova, Republic Of</option>
                                <option value="">Monaco</option>
                                <option value="">Mongolia</option>
                                <option value="">Montenegro</option>
                                <option value="">Montserrat</option>
                                <option value="">Morocco</option>
                                <option value="">Mozambique</option>
                                <option value="">Myanmar</option>
                                <option value="">Namibia</option>
                                <option value="">Nauru</option>
                                <option value="">Nepal</option>
                                <option value="">Netherlands</option>
                                <option value="">Netherlands Antilles</option>
                                <option value="">New Caledonia</option>
                                <option value="">New Zealand</option>
                                <option value="">Nicaragua</option>
                                <option value="">Niger</option>
                                <option value="">Nigeria</option>
                                <option value="">Niue</option>
                                <option value="">Norfolk Island</option>
                                <option value="">Northern Mariana Islands</option>
                                <option value="">Norway</option>
                                <option value="">Oman</option>
                                <option value="">Pakistan</option>
                                <option value="">Palau</option>
                                <option value="">Palestinian Territory, Occupied</option>
                                <option value="">Panama</option>
                                <option value="">Papua New Guinea</option>
                                <option value="">Paraguay</option>
                                <option value="">Peru</option>
                                <option value="">Philippines</option>
                                <option value="">Pitcairn</option>
                                <option value="">Poland</option>
                                <option value="">Portugal</option>
                                <option value="">Puerto Rico</option>
                                <option value="">Qatar</option>
                                <option value="">Reunion</option>
                                <option value="">Romania</option>
                                <option value="">Russian Federation</option>
                                <option value="">Rwanda</option>
                                <option value="">Saint Helena</option>
                                <option value="">Saint Kitts and Nevis</option>
                                <option value="">Saint Lucia</option>
                                <option value="">Saint Pierre and Miquelon</option>
                                <option value="">Saint Vincent and the Grenadines</option>
                                <option value="">Samoa</option>
                                <option value="">San Marino</option>
                                <option value="">Sao Tome and Principe</option>
                                <option value="">Saudi Arabia</option>
                                <option value="">Senegal</option>
                                <option value="">Serbia</option>
                                <option value="">Seychelles</option>
                                <option value="">Sierra Leone</option>
                                <option value="">Singapore</option>
                                <option value="">Slovakia</option>
                                <option value="">Slovenia</option>
                                <option value="">Solomon Islands</option>
                                <option value="">Somalia</option>
                                <option value="">South Africa</option>
                                <option value="">South Georgia and the South Sandwich Islands</option>
                                <option value="">Spain</option>
                                <option value="">Sri Lanka</option>
                                <option value="">Sudan</option>
                                <option value="">Suriname</option>
                                <option value="">Svalbard and Jan Mayen</option>
                                <option value="">Swaziland</option>
                                <option value="">Sweden</option>
                                <option value="">Switzerland</option>
                                <option value="">Syrian Arab Republic</option>
                                <option value="">Taiwan, Province of China</option>
                                <option value="">Tajikistan</option>
                                <option value="">Tanzania, United Republic Of</option>
                                <option value="">Thailand</option>
                                <option value="">Timor-leste</option>
                                <option value="">Togo</option>
                                <option value="">Tokelau</option>
                                <option value="">Tonga</option>
                                <option value="">Trinidad and Tobago</option>
                                <option value="">Tunisia</option>
                                <option value="">Turkey</option>
                                <option value="">Turkmenistan</option>
                                <option value="">Turks and Caicos Islands</option>
                                <option value="">Tuvalu</option>
                                <option value="">Uganda</option>
                                <option value="">Ukraine</option>
                                <option value="">United Arab Emirates</option>
                                <option value="">United Kingdom</option>
                                <option value="">United States</option>
                                <option value="">United States Minor Outlying Islands</option>
                                <option value="">Uruguay</option>
                                <option value="">Uzbekistan</option>
                                <option value="">Vanuatu</option>
                                <option value="">Venezuela</option>
                                <option value="">Viet Nam</option>
                                <option value="">Virgin Islands, British</option>
                                <option value="">Virgin Islands, u.s.</option>
                                <option value="">Wallis and Futuna</option>
                                <option value="">Western Sahara</option>
                                <option value="">Yemen</option>
                                <option value="">Zambia</option>
                                <option value="">Zimbabwe</option>
                            </select>
                        </div>
                        <!--end of form group-->
                    </div>
                    <!--end of col 4-->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Shipping Method</label>
                        </div>
                        <!--end of form group-->
                        <div class="form-group">
                            <div class="radio"><label><input type="radio" name="optradio">Standard (5-10 Business Days)</label>
                            </div>
                            <div class="radio"><label><input type="radio" name="optradio"> Express (3-7 Business Days)
                                </label></div>
                        </div>
                        <!--end of form group-->
                        <div class="form-group">
                            <ul>
                                <li>We don't recommend APO / PO Box addresses</li>
                                <li><a href="#">Shipping & Delivery Help</a></li>
                            </ul>
                        </div>
                        <!--end of form group-->
                    </div>
                    <!--end of col 4-->

                </div>
                <!--end of check box-->
            </div>
            <!--end of col 12-->

        </div>
        <!--end of row after container-->


        <div class="row">
            <div class="col-md-12">
                <div class="cart-box">
                    <div class="cart-box-inner">
                        <div class="col-md-2"><img src="images/cart/1.jpg" class="img-responsive"/></div>
                        <div class="col-md-4"><h4>1 <span>&times;</span> Clasic T-shirt</h4></div>
                        <div class="col-md-3"><p>XL, Black, Front</p></div>
                        <div class="col-md-3">
                            <div class="action-right">
                                <div class="right" style="float:right;"><p>Rs 24.34</p></div>
                                <!--end of right-->
                            </div>
                            <!--end of action right-->
                        </div>
                    </div>
                    <!--end of cart-box-inner-->
                    <div class="cart-box-inner">
                        <div class="col-md-2"><img src="images/cart/1.jpg" class="img-responsive"/></div>
                        <div class="col-md-4"><h4>1 <span>&times;</span> Clasic T-shirt</h4></div>
                        <div class="col-md-3"><p>XL, Black, Front</p></div>
                        <div class="col-md-3">
                            <div class="action-right">
                                <div class="right" style="float:right;"><p>Rs 24.80</p></div>
                                <!--end of right-->
                            </div>
                            <!--end of action right-->
                        </div>
                    </div>
                    <!--end of cart-box-inner-->

                    <div class="item-list totals">
                        <div class="cart-line-item subtotal">
                            <div class="right">
                                <div class="total">
                                    <div class="heading">Subtotal</div>
                                    <div class="currency-display">Rs</div>
                                    <div class="amount">49.14</div>
                                </div>
                            </div>
                        </div>

                        <div class="cart-line-item shipping">
                            <div class="right">
                                <div class="total">
                                    <div class="heading">+ Estimated Shipping</div>

                                    <div class="currency-display">Rs</div>
                                    <div class="amount">11.43</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End item list  total-->

                    <div class="total-due">
  <span class="total-heading">
    Total
  </span>

                        <span class="currency-display">Rs</span>
                        <span class="total-price-calculated">60.57</span>
                    </div>
                    <!--end of total due-->

                    <div class="coupen">
                        <p>Gift Certificate or Coupon Code (Optional)</p>

                        <div class="form-group">
                            <input type="text"/><input type="submit" value="Apply"/>
                            <ul>
                                <li>Limit of one per order</li>
                            </ul>
                        </div>
                    </div>
                    <!--end of coupen-->

                    <div class="change-locale">
                        <div class="disclaimer">Prices in USD and based on location: United States</div>
                        <a href="#" class="text-button becomes-rb-button dialog-link" title="Change Currency">Change
                            Currency &amp; Location</a>

                    </div>
                    <!--end of chage locale-->


                </div>
            </div>
            <!--end of col 12-->

        </div>
        <!--end of row after container-->

        <div class="payment-under">
            <a href="#">Pay By Credit Card</a><br/><br/>
            <img src="images/cart/cc_icon_mastercard.png"/>
            <img src="images/cart/cc_icon_visa.png"/>
            <img src="images/cart/cc_icon_amex.png"/>
        </div>

    </div>
    <!--end of container-->
</section>
<!--end of cart-sec-->


<!--start footer-->

    <?php include "footer.php"; ?>
</body>
<?php include SITE_FS_PATH."/common_js.php"; ?>
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
