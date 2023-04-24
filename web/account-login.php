
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Nirav Patel</title>

	<script src="https://kit.fontawesome.com/1fcf07d261.js" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


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
<!--
<div class="dropdn dropdn_wishlist">
	<a href="account-wishlist" class="dropdn-link only-icon wishlist-link ">
		<i class="icon-heart"></i><span class="dropdn-link-txt">Wishlist</span><span class="wishlist-qty">3</span>
	</a>
</div>-->


<div class="dropdn dropdn_account dropdn_fullheight">

	<a href="#" class="dropdn-link js-dropdn-link js-dropdn-link only-icon" data-panel="#dropdnAccount"><i class="icon-user"></i><span class="dropdn-link-txt">Account</span></a>
</div>
					<!--<div class="dropdn dropdn_fullheight minicart">
	<a href="#" class="dropdn-link js-dropdn-link minicart-link only-icon" data-panel="#dropdnMinicart">
		<i class="icon-basket"></i>
		<span class="minicart-qty">3</span>
		<span class="minicart-total hide-mobile"><span style="font-weight: bold;">INR</span>34.99</span>
		
	</a>
</div>-->
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

	<li><a href="product?btn_cat_id=<?php echo $c->cate_id;?>"><?php echo $c->cate_name;?><!--<span class="menu-label">SALE</span>--></a></li>
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

<!--
<div class="dropdn dropdn_compare">
	<a href="#" class="dropdn-link only-icon compare-link ">
		<i class="icon-compare"></i><span class="dropdn-link-txt">Wishlist</span><span class="compare-qty">3</span>
	</a>
</div>-->
                                <div class="hdr_container_mobile show-mobile">
<div class="dropdn dropdn_account dropdn_fullheight">
	<a href="#" class="dropdn-link js-dropdn-link" data-panel="#dropdnAccount"><i class="icon-user"></i><span class="dropdn-link-txt">Account</span></a>
</div>
                                </div>

                               <!-- <div class="dropdn dropdn_fullheight minicart">
	<a href="#" class="dropdn-link js-dropdn-link minicart-link" data-panel="#dropdnMinicart">
		<i class="icon-basket"></i>
		<span class="minicart-qty">3</span>
		<span class="minicart-total hide-mobile"><span style="font-weight: bold;">INR</span>34.99</span>
	</a>
</div>-->
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
			<li><a href="account-login"><span>Log In</span><i class="icon-login"></i></a></li>
			<li><a href="account-create"><span>Register</span><i class="icon-user2"></i></a></li>
			<li><a href="checkout"><span>Checkout</span><i class="icon-card"></i></a></li>
		</ul>
		
	</div>
	<div class="drop-overlay js-dropdn-close"></div>
</div>
<div class="dropdn-content minicart-drop" id="dropdnMinicart">
	<div class="dropdn-content-block">
		<div class="dropdn-close"><span class="js-dropdn-close">Close</span></div>
		<div class="minicart-drop-content js-dropdn-content-scroll">
			<div class="minicart-prd row">
				<div class="minicart-prd-image image-hover-scale-circle col">
					<a href="product"><img class="lazyload fade-up" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/skins/fashion/products/product-01-1.png" alt=""></a>
				</div>
				<div class="minicart-prd-info col">
					<div class="minicart-prd-tag">Nirav Patel</div>
					<h2 class="minicart-prd-name"><a href="#">Leather Pegged Pants</a></h2>
					<div class="minicart-prd-qty"><span class="minicart-prd-qty-label">Quantity:</span><span class="minicart-prd-qty-value">1</span></div>
					<div class="minicart-prd-price prd-price">
						<div class="price-old"><span style="font-weight: bold;">INR</span>200.00</div>
						<div class="price-new"><span style="font-weight: bold;">INR</span>180.00</div>
					</div>
				</div>
				<div class="minicart-prd-action">
					<a href="#" class="js-product-remove" data-line-number="1"><i class="icon-recycle"></i></a>
				</div>
			</div>
			<div class="minicart-prd row">
				<div class="minicart-prd-image image-hover-scale-circle col">
					<a href="product"><img class="lazyload fade-up" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/skins/fashion/products/product-16-1.png" alt=""></a>
				</div>
				<div class="minicart-prd-info col">
					<div class="minicart-prd-tag">Nirav Patel</div>
					<h2 class="minicart-prd-name"><a href="#">Cascade Casual Shirt</a></h2>
					<div class="minicart-prd-qty"><span class="minicart-prd-qty-label">Quantity:</span><span class="minicart-prd-qty-value">1</span></div>
					<div class="minicart-prd-price prd-price">
						<div class="price-old"><span style="font-weight: bold;">INR</span>200.00</div>
						<div class="price-new"><span style="font-weight: bold;">INR</span>180.00</div>
					</div>
				</div>
				<div class="minicart-prd-action">
					<a href="#" class="js-product-remove" data-line-number="2"><i class="icon-recycle"></i></a>
				</div>
			</div>
			<div class="minicart-empty js-minicart-empty d-none">
				<div class="minicart-empty-text">Your cart is empty</div>
				<div class="minicart-empty-icon">
					<i class="icon-shopping-bag"></i>
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 306 262" style="enable-background:new 0 0 306 262;" xml:space="preserve"><path class="st0" d="M78.1,59.5c0,0-37.3,22-26.7,85s59.7,237,142.7,283s193,56,313-84s21-206-69-240s-249.4-67-309-60C94.6,47.6,78.1,59.5,78.1,59.5z"/></svg>
				</div>
			</div>
			<a href="#" class="minicart-drop-countdown mt-3">
				<div class="countdown-box-full">
					<div class="row no-gutters align-items-center">
						<div class="col-auto"><i class="icon-gift icon--giftAnimate"></i></div>
						<div class="col">
							<div class="countdown-txt">WHEN BUYING TWO
								THINGS A THIRD AS A GIFT
							</div>
							<div class="countdown js-countdown" data-countdown="2021/07/01"></div>
						</div>
					</div>
				</div>
			</a>
			<div class="minicart-drop-info d-none d-md-block">
				<div class="shop-feature-single row no-gutters align-items-center">
					<div class="shop-feature-icon col-auto"><i class="icon-truck"></i></div>
					<div class="shop-feature-text col"><b>SHIPPING!</b> Continue shopping to add more products and receive free shipping</div>
				</div>
			</div>
		</div>
		<div class="minicart-drop-fixed js-hide-empty">
			<div class="loader-horizontal-sm js-loader-horizontal-sm" data-loader-horizontal=""><span></span></div>
			<div class="minicart-drop-total js-minicart-drop-total row no-gutters align-items-center">
				<div class="minicart-drop-total-txt col-auto heading-font">Subtotal</div>
				<div class="minicart-drop-total-price col" data-header-cart-total=""><span style="font-weight: bold;">INR</span>340</div>
			</div>
			<div class="minicart-drop-actions">
				<a href="cart" class="btn btn--md btn--grey"><i class="icon-basket"></i><span>Cart Page</span></a>
				<a href="checkout" class="btn btn--md"><i class="icon-checkout"></i><span>Check out</span></a>
			</div>
			<ul class="payment-link mb-2">
				<li><i class="icon-amazon-logo"></i></li>
				<li><i class="icon-visa-pay-logo"></i></li>
				<li><i class="icon-skrill-logo"></i></li>
				<li><i class="icon-klarna-logo"></i></li>
				<li><i class="icon-paypal-logo"></i></li>
				<li><i class="icon-apple-pay-logo"></i></li>
			</ul>
		</div>
	</div>
	<div class="drop-overlay js-dropdn-close"></div>
</div>
</div>








<div class="page-content">
	<div class="holder breadcrumbs-wrap mt-0">
	<div class="container">
		<ul class="breadcrumbs">
			<li><a href="index.php">Home</a></li>
			<li><span>Signin to your account</span></li>
		</ul>
	</div>
</div>
	<div class="holder">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-18 col-lg-12">
				<h2 class="text-center"> Login Form </h2>
				<div class="form-wrapper">


					<form method="post">
						
						<div class="form-group">
							<input type="text" name="email" class="form-control" placeholder="E-mail" value="<?php if(isset($_COOKIE['email'])) echo $_COOKIE['email']; ?>">
						</div>
						<div class="form-group">
							<input type="password" name="password" class="form-control" placeholder="Password" value="<?php if(isset($_COOKIE['pwd'])) echo $_COOKIE['pwd']; ?>">
						</div>

						<div class="form-group">
							 <label class="checkbox-inline">
							      <input type="checkbox" value="" name="rem"> Remember Me
							    </label>
    
						</div>

						<div class="form-group">
							 
							      <a href="forgotpass" style="float: right;"> Forgot Password? </a>
							    
    
						</div>
						
						
						<div class="text-center">
							<button type="submit" class="btn" name="login">Sign In</button> <span style="font-weight: bold;">
						</div>

						</form>

						<div>
			<p>If not then To access your whishlist, address book and contact preferences and to take advantage of our speedy checkout, create an account with us now.  
				<span>
				<a href="account-create" style="font-weight: bold;font-size:16px;" >Create Account</a>
				</span>
						</p>
						</div>

						
					
				</div><!--FORM-wrapper-->
			</div><!--col-->

		</div><!--row-->
	</div><!--container-->
</div><!--holder-->
</div>
<div id="modalTerms" style="display: none;" class="modal-info-content modal-info-content-lg">
	<div class="modal-info-heading">
		<h2>Terms and Conditions</h2>
	</div>
	<p>This website is operated by a.season. Throughout the site, the terms “we”, “us” and “our” refer to a.season. a.season offers this website, including all information, tools and services available from this site to you, the user, conditioned upon your acceptance of all terms, conditions, policies and notices stated here.</p>
	<p>By visiting our site and/ or purchasing something from us, you engage in our “Service” and agree to be bound by the following terms and conditions (“Terms of Service”, “Terms”), including those additional terms and conditions and policies referenced herein and/or available by hyperlink. These Terms of Service apply to all users of the site, including without limitation users who are browsers, vendors, customers, merchants, and/ or contributors of content.</p>
	<p>Please read these Terms of Service carefully before accessing or using our website. By accessing or using any part of the site, you agree to be bound by these Terms of Service. If you do not agree to all the terms and conditions of this agreement, then you may not access the website or use any services. If these Terms of Service are considered an offer, acceptance is expressly limited to these Terms of Service.</p>
	<p>Any new features or tools which are added to the current store shall also be subject to the Terms of Service. You can review the most current version of the Terms of Service at any time on this page. We reserve the right to update, change or replace any part of these Terms of Service by posting updates and/or changes to our website. It is your responsibility to check this page periodically for changes. Your continued use of or access to the website following the posting of any changes constitutes acceptance of those changes.</p>
	<p>Our store is hosted on Shopify Inc. They provide us with the online e-commerce platform that allows us to sell our products and services to you.</p>
</div>
<div id="modalCookies" style="display: none;" class="modal-info-content modal-info-content-lg">
	<div class="modal-info-heading">
		<h2>Cookie Policy</h2>
	</div>
	<p>This website is operated by a.season. Throughout the site, the terms “we”, “us” and “our” refer to a.season. a.season offers this website, including all information, tools and services available from this site to you, the user, conditioned upon your acceptance of all terms, conditions, policies and notices stated here.</p>
	<p>By visiting our site and/ or purchasing something from us, you engage in our “Service” and agree to be bound by the following terms and conditions (“Terms of Service”, “Terms”), including those additional terms and conditions and policies referenced herein and/or available by hyperlink. These Terms of Service apply to all users of the site, including without limitation users who are browsers, vendors, customers, merchants, and/ or contributors of content.</p>
	<p>Please read these Terms of Service carefully before accessing or using our website. By accessing or using any part of the site, you agree to be bound by these Terms of Service. If you do not agree to all the terms and conditions of this agreement, then you may not access the website or use any services. If these Terms of Service are considered an offer, acceptance is expressly limited to these Terms of Service.</p>
	<p>Any new features or tools which are added to the current store shall also be subject to the Terms of Service. You can review the most current version of the Terms of Service at any time on this page. We reserve the right to update, change or replace any part of these Terms of Service by posting updates and/or changes to our website. It is your responsibility to check this page periodically for changes. Your continued use of or access to the website following the posting of any changes constitutes acceptance of those changes.</p>
	<p>Our store is hosted on Shopify Inc. They provide us with the online e-commerce platform that allows us to sell our products and services to you.</p>
</div>

<?php include_once 'footer.php';  ?>