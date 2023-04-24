
<?php 

if(isset($_SESSION['user'])){}

else
{
    header("location:index");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://kit.fontawesome.com/1fcf07d261.js" crossorigin="anonymous"></script>

    <link rel="shortcut icon" type="image/x-icon" href="../admin/images/favicon.gif" />

    <link href="css/vendor/bootstrap.min.css" rel="stylesheet">
    <link href="css/vendor/vendor.min.css" rel="stylesheet">
    <link href="css/style-sport.css" rel="stylesheet">
    <link href="fonts/icomoon/icons.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <style type="text/css">
        input[type="radio"]{
    -webkit-appearance: radio;
     display: inline;
}

input[type="checkbox"]{
    -webkit-appearance: checkbox;
     display: inline;
}
    </style>



</head>
<body class="has-smround-btns has-loader-bg equal-height">
<header class="hdr-wrap">
    <div class="hdr-content hdr-content-sticky">
    <div class="container">
        <div class="row">
            <div class="col-auto show-mobile">
<div class="menu-toggle"> <a href="#" class="mobilemenu-toggle"><i class="icon-menu"></i></a> </div>
            </div>
            <div class="col-auto hdr-logo">
                <a href="index" class="logo"><img srcset="../admin/images/logo.png 1x, ../admin/images/logo2x.png 2x" alt="Logo"></a>
            </div>
            <div class="hdr-phone hide-mobile">
                <i class="icon-phone"></i><span>+91 9909630410</span>
            </div>

            
            <div class="hdr-nav hide-mobile nav-holder-s">
            </div>
            <div class="hdr-links-wrap col-auto ml-auto">
                <div class="hdr-inline-link">
<div class="search_container_desktop">
    <div class="dropdn dropdn_search dropdn_fullwidth">
        <a href="#" class="dropdn-link  js-dropdn-link only-icon"><i class="icon-search"></i><span class="dropdn-link-txt">Search</span></a>
        <div class="dropdn-content">
            <div class="container">
                <form method="get" action="#" class="search search-off-popular">
                    <input name="search" type="text" class="search-input input-empty" placeholder="What are you looking for?">
                    <button type="submit" class="search-button"><i class="icon-search"></i></button>
                    <a href="#" class="search-close js-dropdn-close"><i class="icon-close-thin"></i></a>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="dropdn dropdn_wishlist">
    <a href="account-wishlist" class="dropdn-link only-icon wishlist-link ">
        <i class="icon-heart"></i><span class="dropdn-link-txt">Wishlist</span>


            <?php 

            if(isset($_SESSION['uid']))
            {
                if(!empty($wish))
                {
                    $total_prd = count($wish);?>

                    <span class="wishlist-qty"> <?php echo $total_prd;?></span>

                <?php       }

                else

                {?>

                    <span class="wishlist-qty"> <?php echo "0";?></span>
                
                <?php }
            }


            ?>




        
    </a>
</div>


<div class="dropdn dropdn_account dropdn_fullheight">

    <a href="#" class="dropdn-link js-dropdn-link js-dropdn-link only-icon" data-panel="#dropdnAccount"><i class="icon-user"></i><span class="dropdn-link-txt">Account</span></a>
</div>
                  
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="hdr hdr-style2">
        <div class="hdr-topline js-hdr-top">
            <div class="container">
                <div class="row">
                    <div class="col hdr-topline-left">
<div class="hdr-line-separate">
    <ul class="social-list list-unstyled">
        <li>
            <a href="#"><i class="icon-facebook"></i></a>
        </li>
        <li>
            <a href="#"><i class="icon-twitter"></i></a>
        </li>
        <li>
            <a href="#"><i class="icon-google"></i></a>
        </li>
        <li>
            <a href="#"><i class="icon-instagram"></i></a>
        </li>
        <li>
            <a href="#"><i class="icon-vimeo"></i></a>
        </li>
        <li>
            <a href="#"><i class="icon-linkedin"></i></a>
        </li>
    </ul>
</div>
                    </div>
                    <div class="col hdr-topline-right hide-mobile">
                        <div class="hdr-inline-link">
                            


<div class="dropdn dropdn_account dropdn_fullheight">
    <a href="#" class="dropdn-link js-dropdn-link" data-panel="#dropdnAccount"><i class="icon-user"></i><span class="dropdn-link-txt">Account</span></a>
</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hdr-content">
            <div class="container">
                <div class="row">
                    <div class="col-auto show-mobile">
<div class="menu-toggle"> <a href="#" class="mobilemenu-toggle"><i class="icon-menu"></i></a> </div>
                    </div>
                    <div class="col-8 hdr-nav hide-mobile nav-holder">
<ul class="mmenu mmenu-js">
    

        <li class=""><a href="index" class="active">Home</a> </li>
        <li class=""><a href="about" >About Us</a> </li>
        
    
    <?php foreach($cate_arr as $c){ ?>

    <li><a href="product?btn_cat_id=<?php echo $c->cate_id;?>" ><?php echo $c->cate_name;?><!--<span class="menu-label">SALE</span>--></a></li>
<?php } ?>

    <li class=""><a href="contact" >Contact Us</a> </li>
    
</ul>
                    </div>
                    <div class="hdr-logo">
                        <a href="index" class="logo"><img srcset="../admin/images/logo.png 1x, ../admin/images/logo2x.png 2x" alt="Logo"></a>
                    </div>
                    <div class="col col-lg-8 hdr-links-wrap">
                        <div class="hdr-links">
                            <div class="hdr-phone">
                                <i class="icon-phone"></i><span>+91 9909630410</span>
                            </div>
                            <div class="hdr-inline-link">
<div class="search_container_desktop">
    <div class="dropdn dropdn_search dropdn_fullwidth">
        <a href="#" class="dropdn-link  js-dropdn-link only-icon"><i class="icon-search"></i><span class="dropdn-link-txt">Search</span></a>
        <div class="dropdn-content">
            <div class="container">
                <form method="get" action="#" class="search search-off-popular">
                    <input name="search" type="text" class="search-input input-empty" placeholder="What are you looking for?">
                    <button type="submit" class="search-button"><i class="icon-search"></i></button>
                    <a href="#" class="search-close js-dropdn-close"><i class="icon-close-thin"></i></a>
                </form>
            </div>
        </div>
    </div>
</div>

                                <div class="hdr_container_mobile show-mobile">
<div class="dropdn dropdn_account dropdn_fullheight">
    <a href="#" class="dropdn-link js-dropdn-link" data-panel="#dropdnAccount"><i class="icon-user"></i><span class="dropdn-link-txt">Account</span></a>
</div>
                                </div>
       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hdr-promoline hdr-topline hdr-topline--dark">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="custom-text js-custom-text-carousel" data-slick='{"speed": 1000, "autoplaySpeed": 3000}'>
    <div class="custom-text-item"><i class="icon-fox"></i> Use promocode <span>Nirav Patel</span> to get 15% discount!</div>
    <div class="custom-text-item"><i class="icon-air-freight"></i> <span>Free</span> plane shipping over <span><span style="font-weight: bold;">INR</span>250</span></div>
    <div class="custom-text-item"><i class="icon-gift"></i> Today only! Post <span>holiday</span> Flash Sale! 2 for <span style="font-weight: bold;">INR</span>20</div>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="header-side-panel">
<div class="mobilemenu js-push-mbmenu">
    <div class="mobilemenu-content">
        <div class="mobilemenu-close mobilemenu-toggle">Close</div>
        <div class="mobilemenu-scroll">
            <div class="mobilemenu-search"></div>
            <div class="nav-wrapper show-menu">
                <div class="nav-toggle">
                    <span class="nav-back"><i class="icon-angle-left"></i></span>
                    <span class="nav-title"></span>
                    <a href="#" class="nav-viewall">view all</a>
                </div>
                <ul class="nav nav-level-1">
                    <li><a href="index">Home</a></li>
                        <li><a href="category">Accessories<span class="arrow"><i class="icon-angle-right"></i></span></a>
                                <ul class="nav-level-3">
                                    <li><a href="category">Sunglasses</a></li>
                                    <li><a href="category">Hats</a></li>
                                    <li><a href="category">Watches</a></li>
                                    <li><a href="category">Jewelry</a></li>
                                    <li><a href="category">Belts</a></li>
                                </ul>
                            </li>

                            <li><a href="category">Men<span class="arrow"><i class="icon-angle-right"></i></span></a>
                                <ul class="nav-level-3">
                                    <li><a href="category">Sunglasses</a></li>
                                    <li><a href="category">Hats</a></li>
                                    <li><a href="category">Watches</a></li>
                                    <li><a href="category">Jewelry</a></li>
                                    <li><a href="category">Belts</a></li>
                                </ul>
                            </li>

                            <li><a href="category">Women<span class="arrow"><i class="icon-angle-right"></i></span></a>
                                <ul class="nav-level-3">
                                    <li><a href="category">Sunglasses</a></li>
                                    <li><a href="category">Hats</a></li>
                                    <li><a href="category">Watches</a></li>
                                    <li><a href="category">Jewelry</a></li>
                                    <li><a href="category">Belts</a></li>
                                </ul>
                            </li>
                        
                    
                    
                    
                </ul>
            </div>
            
        </div>
    </div>
</div>
    <div class="dropdn-content account-drop" id="dropdnAccount">
    <div class="dropdn-content-block">
        <div class="dropdn-close"><span class="js-dropdn-close">Close</span></div>
        <ul>
            <?php if(!isset($_SESSION['user'])){
                ?>

                <li><a href="account-login"><span>Log In</span><i class="icon-login"></i></a></li>
            <li><a href="account-create"><span>Register</span><i class="icon-user2"></i></a></li>
            <li><a href="checkout"><span>Checkout</span><i class="icon-card"></i></a></li>

            <?php }

                else {?>

                    <li><a href="logout"><span>Logout</span><i class="icon-login"></i></a></li>
            <li><a href="#"><span><?php echo "Welcome ". $_SESSION['user'] ."!"; ?></span><i class="icon-user2"></i></a></li>
            <li><a href="account-details"><span style="padding-right: 5px;">Account Details </span> <i class="fa fa-info"></i></a></li>
            <li><a href="account-addresses"><span style="padding-right: 5px;">My Addresses </span> <i class="fa fa-address-book-o"></i></a></li>
            <li><a href="account-wishlist"><span style="padding-right: 5px;">My Wishlist </span> <i class="fa fa-heart"></i></a></li>
            <li><a href="account-history"><span style="padding-right: 5px;">My Order History </span> <i class="fa fa-history"></i></a></li>
            


            <?php   }

             ?>
            
        </ul>
        <?php if(!isset($_SESSION['user'])){
                ?>
        <div class="dropdn-form-wrapper">
            <h5>Quick Login</h5>
            <form method="post">
                <div class="form-group">
                    <input type="text" class="form-control form-control--sm is-invalid" placeholder="Enter your e-mail" name="cust_email">
                    <div class="invalid-feedback">Can't be blank</div>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control--sm" placeholder="Enter your password" name="cust_password">
                </div>
                <button type="submit" class="btn" name="submit">Enter</button>
            </form>
        </div>
        <?php }

             ?>
    </div>
    <div class="drop-overlay js-dropdn-close"></div>
</div>



</div>

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

foreach ($cart as $c) {

                                            $price = $c->prod_price;
                                            $qty = $c->quantity;
                                            $total = $price*$qty;
                                            $arr[] = $total;
                                            
                                        }

                                        $total_amount = array_sum($arr);

    $orderId 	= time();
    $txnAmount 	= $total_amount;
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
    $paytmParams["CALLBACK_URL"] = "http://localhost/topsEcom/web/paytm_response";
    $paytmChecksum = getChecksumFromArray($paytmParams, "frAqUsSfY8FakmXi");
    $transactionURL = "https://securegw-stage.paytm.in/theia/processTransaction";
    // $transactionURL = "https://securegw-stage.paytm.in/theia/processTransaction";
    // $transactionURL = "https://securegw.paytm.in/theia/processTransaction"; // for production
?>



    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Merchant Checkout Page</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://kit.fontawesome.com/1fcf07d261.js" crossorigin="anonymous"></script>

    <link rel="shortcut icon" type="image/x-icon" href="../admin/images/favicon.gif" />

    <link href="css/vendor/bootstrap.min.css" rel="stylesheet">
    <link href="css/vendor/vendor.min.css" rel="stylesheet">
    <link href="css/style-sport.css" rel="stylesheet">
    <link href="fonts/icomoon/icons.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <style type="text/css">
        input[type="radio"]{
    -webkit-appearance: radio;
     display: inline;
}

input[type="checkbox"]{
    -webkit-appearance: checkbox;
     display: inline;
}
    </style>



</head>
    <body>
        


        <div class="holder">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-18 col-lg-12">
                <h1 class="text-center">Please do not refresh this page...</h1>

                <h2 class="text-center"> Amount to be Paid </h2>
                <div class="form-wrapper">


                      <form method='post' action='<?php echo $transactionURL; ?>' name='f1'>
            <?php
                foreach($paytmParams as $name => $value) {
                    echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
                }
            ?>
            <input type="hidden" name="CHECKSUMHASH" value="<?php echo $paytmChecksum ?>">
                        



                            <h1 class="text-center">
                                        
                                       <span style="font-weight: bold;">INR</span>
                                        <?php 

                                           
                                         

                                            
                                          print_r($total_amount);
                                                                                 

                                        ?>
                                    
                                    </h1>
                            
                        
                       

                       

                      
                        
                        
                        <div class="text-center">
                            <button type="submit" class="btn" name="submit">Pay Now</button> <span style="font-weight: bold;">
                        </div>


           
        </form>
        <!-- <script type="text/javascript">
            document.f1.submit();
        </script> -->

                        

                        <div>
            
                        </div>

                        
                    
                </div><!--FORM-wrapper-->
            </div><!--col-->

        </div><!--row-->
    </div><!--container-->
</div><!--holder-->



      


<?php include_once 'footer.php'; ?>




