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

<section class="order-his">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="order-head">Order History & Status</h3>
                <h4 class="order-subhead">Your Previous Orders</h4>
            </div>
        </div>
        <!--end of row-->
        <div class="row">
            <div class="col-md-12">
                <table width="100%">
                    <tbody>
                    <tr>
                        <th class="order-number">Order #</th>
                        <th class="order-date">Purchase Date</th>
                        <th class="order-amount">Amount</th>
                        <th class="order-location">Destination</th>
                        <th class="order-status">Status (<a href="#" target="_blank">?</a>)</th>
                    </tr>
                    <tr>
                        <td class="order-number">demo</td>
                        <td class="order-date">demo</td>
                        <td class="order-amount">demo</td>
                        <td class="order-location">demo</td>
                        <td class="order-status">demo</td>
                    </tr>
                    <tr class="col-row">
                        <td class="order-number">demo</td>
                        <td class="order-date">demo</td>
                        <td class="order-amount">demo</td>
                        <td class="order-location">demo</td>
                        <td class="order-status">demo</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!--end of row-->
        <div class="row">
            <div class="col-md-12">
                <p>To check the status of an order not listed above, please enter your order number and billing email
                    address. This information can be found on the order receipt we emailed you shortly after the order
                    was placed. If you still have questions please contact <a href="#">RO Support</a>.</p>
            </div>
        </div>
        <!--end of row-->
    </div>
</section>

<section class="find-order">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="find-box">
                    <h3>Find an Order</h3>

                    <form>
                        <div class="form-group">
                            <label for="usr">Order Number (required) :</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="usr">Billing Email Address (required):</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Find My Order" class="btn btn-success">
                        </div>
                    </form>
                </div>
                <!--end of find box-->
            </div>
        </div>
    </div>
</section>

<?php include_once "footer.php"; ?>
</body>
<?php include_once SITE_FS_PATH . "/common_js.php" ?>
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
