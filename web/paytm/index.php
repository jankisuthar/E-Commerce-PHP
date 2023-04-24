<?php




require_once("PaytmKit/lib/config_paytm.php");
require_once("PaytmKit/lib/encdec_paytm.php");

    // define("merchantMid", "dZlzzF17647713571019");
    // Key in your staging and production MID available in your dashboard
    // define("merchantKey", "O0zUdI1&G%OQViK_");
    // Key in your staging and production merchant key available in your dashboard
    // define("orderId", "order1");
    // define("channelId", "WEB");
    // define("website", "WEBSTAGING");
    // define("industryTypeId", "Retail");
    // define("callbackUrl", "http://127.0.0.1/devchandan/payment-using-paytm/response.php");
    // define("txnAmount", "100.12");
    // This is the staging value. Production value is available in your dashboard
    // This is the staging value. Production value is available in your dashboard
    // define("callbackUrl", "https://<Merchant_Response_URL>");



    $orderId 	= time();
    $txnAmount 	= "100.50";
    $custId 	= "cust123";
    $mobileNo 	= "7777777777";
    $email 		= "username@emailprovider.com";

    $paytmParams = array();
    $paytmParams["ORDER_ID"] 	= $orderId;
    $paytmParams["CUST_ID"] 	= $custId;
    $paytmParams["MOBILE_NO"] 	= $mobileNo;
    $paytmParams["EMAIL"] 		= $email;
    $paytmParams["TXN_AMOUNT"] 	= $txnAmount;
    $paytmParams["MID"] 		= "fWizni69239403272631";
    $paytmParams["CHANNEL_ID"] 	= "WEB";
    $paytmParams["WEBSITE"] 	= "WEBSTAGING";
    $paytmParams["INDUSTRY_TYPE_ID"] = "Retail";
    $paytmParams["CALLBACK_URL"] = "http://localhost/topsEcom/web/paytm/response.php";
    $paytmChecksum = getChecksumFromArray($paytmParams, "frAqUsSfY8FakmXi");
    $transactionURL = "https://securegw-stage.paytm.in/theia/processTransaction";
    // $transactionURL = "https://securegw-stage.paytm.in/theia/processTransaction";
    // $transactionURL = "https://securegw.paytm.in/theia/processTransaction"; // for production
?>

<?php if(!empty($cart))
    {

    foreach ($cart as $c) {
        
     ?>

    <div class="cart-table-prd">
        <div class="cart-table-prd-image">
            <a href="#" class="prd-img"><img src="../admin/images/prod_images/<?php echo $c->prod_img;?>"></a>
        </div>
        <div class="cart-table-prd-content-wrap">
            <div class="cart-table-prd-info">
                <h2 class="cart-table-prd-name"><a href="product.php"><?php echo $c->prod_name;?></a></h2>
            </div>
            <div class="cart-table-prd-qty">
                <div class="qty qty-changer">
                    <input type="text" class="qty-input disabled" value="<?php echo $c->quantity;?>" data-min="0" data-max="1000">
                </div>
            </div>
            <div class="cart-table-prd-price-total">
                <span style="font-weight: bold;">INR</span><?php echo $c->prod_price;?>
            </div>
        </div>
    </div>

    <?php } }?>

    
<html>
    <head>
        <title>Merchant Checkout Page</title>
    </head>
    <body>
        <center><h1>Please do not refresh this page...</h1></center>
        <form method='post' action='<?php echo $transactionURL; ?>' name='f1'>
            <?php
                foreach($paytmParams as $name => $value) {
                    echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
                }
            ?>
            <input type="hidden" name="CHECKSUMHASH" value="<?php echo $paytmChecksum ?>">
            <input type="submit" name="submit" value="submit" />
        </form>
        <!-- <script type="text/javascript">
            document.f1.submit();
        </script> -->


    </body>
</html>




