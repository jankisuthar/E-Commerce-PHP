
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Nirav Patel</title>

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

					<span class="wishlist-qty">	<?php echo $total_prd;?></span>

				<?php		}

				else

				{?>

					<span class="wishlist-qty">	<?php echo "0";?></span>
				
				<?php }
			}


			?>




		
	</a>
</div>


<div class="dropdn dropdn_account dropdn_fullheight">

	<a href="#" class="dropdn-link js-dropdn-link js-dropdn-link only-icon" data-panel="#dropdnAccount"><i class="icon-user"></i><span class="dropdn-link-txt">Account</span></a>
</div>
					<div class="dropdn dropdn_fullheight minicart">
	<a href="#" class="dropdn-link js-dropdn-link minicart-link only-icon" data-panel="#dropdnMinicart">
		<i class="icon-basket"></i>
		

				<?php 

			if(isset($_SESSION['uid']))
			{
				if(!empty($cart))
				{
					$total_prd = count($cart);?>

					<span class="minicart-qty">	<?php echo $total_prd;?></span>

				<?php		}

				else

				{?>

					<span class="minicart-qty">	<?php echo "0";?></span>
				
				<?php }
			}


			?>
		

<!--		<span class="minicart-total hide-mobile"><span style="font-weight: bold;">INR</span>34.99</span>-->
		
	</a>
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
<div class="dropdn dropdn_compare">
	<a href="account-wishlist" class="dropdn-link only-icon compare-link ">
		<i class="icon-heart"></i><span class="dropdn-link-txt">Wishlist</span>

		<?php 

			if(isset($_SESSION['uid']))
			{
				if(!empty($wish))
				{
					$total_prd = count($wish);?>

					<span class="wishlist-qty">	<?php echo $total_prd;?></span>

				<?php		}

				else

				{?>

					<span class="wishlist-qty">	<?php echo "0";?></span>
				
				<?php }
			}


			?>





	</a>
</div>
                                <div class="hdr_container_mobile show-mobile">
<div class="dropdn dropdn_account dropdn_fullheight">
	<a href="#" class="dropdn-link js-dropdn-link" data-panel="#dropdnAccount"><i class="icon-user"></i><span class="dropdn-link-txt">Account</span></a>
</div>
                                </div>
                                <div class="dropdn dropdn_fullheight minicart">
	<a href="#" class="dropdn-link js-dropdn-link minicart-link" data-panel="#dropdnMinicart">
		<i class="icon-basket"></i>

				

			<?php 

			if(isset($_SESSION['uid']))
			{
				if(!empty($cart))
				{
					$total_prd = count($cart);?>

					<span class="minicart-qty">	<?php echo $total_prd;?></span>

				<?php		}

				else

				{?>

					<span class="minicart-qty">	<?php echo "0";?></span>
				
				<?php }
			}


			?>
		

		<!--<span class="minicart-total hide-mobile"><span style="font-weight: bold;">INR</span>34.99</span>-->
	</a>
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
			<?php if(!isset($_SESSION['uid'])){
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
			


			<?php	}

			 ?>
			
		</ul>
		<?php if(!isset($_SESSION['uid'])){
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

<div class="dropdn-content minicart-drop" id="dropdnMinicart">
	<div class="dropdn-content-block">
		<div class="dropdn-close"><span class="js-dropdn-close">Close</span></div>
		<div class="minicart-drop-content js-dropdn-content-scroll">
							<?php 

						if(!empty($cart))

						{
							foreach ($cart as $c) {
								
							
						?>
			<div class="minicart-prd row">
				<div class="minicart-prd-image image-hover-scale-circle col">
					<a href="single-product?single_pro=<?php echo $c->prod_id?>"><img src="../admin/images/prod_images/<?php echo $c->prod_img;?>" alt=""></a>
				</div>
				<div class="minicart-prd-info col">
					<div class="minicart-prd-tag"><?php echo $c->prod_name;?></div>
					<h2 class="minicart-prd-name"><a href="#"><?php echo $c->prod_description;?></a></h2>
					<div class="minicart-prd-qty"><span class="minicart-prd-qty-label">Quantity:</span><span class="minicart-prd-qty-value"><?php echo $c->quantity;?></span></div>
					<div>
						<?php
						$status = $c->status;
						if($status=='In Stock'){?>
						<img src="images/stock.png" height="35" width="100">
					<?php }?>
					</div>

					<div>
						<?php
						$status = $c->status;
						if($status=='Out of Stock'){?>
						<img src="images/soldout.png" height="35" width="100">
					<?php }?>
					</div>
					<div class="minicart-prd-price prd-price">
						<div class="price-old"><span style="font-weight: bold;">INR</span>200.00</div>
						<div class="price-new"><span style="font-weight: bold;">INR</span><?php echo $c->prod_price;?></div>
					</div>
				</div>
				<form method="post">
				<div class="minicart-prd-action">
					<a href="cart?del_cart_id=<?php echo $c->prod_id;?>"><i class="icon-recycle"></i></a>
				</div>
				</form>
			</div>
			

			<?php 
						}


					}


			?>

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
				
					

						<?php

						if(!empty($cart))
						{

							?>

							<div class="minicart-drop-total-txt col-auto heading-font">Subtotal</div>
				<div class="minicart-drop-total-price col" data-header-cart-total="">

							<?php
							foreach($cart as $c)
							{

								$price = $c->prod_price;
								$qty = $c->quantity;
								$status=$c->status;

								if($status=='In Stock')
								{
									$total = $price*$qty;
								$arr[] = $total;

								}


								

							}?>

							<span style="font-weight: bold;">INR</span>

							<?php

							print_r(array_sum($arr));
						}
					 ?>

				</div>
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
<div class="holder fullwidth full-nopad mt-0">
	<div class="container">
		<div class="bnslider-wrapper">
			<div class="bnslider bnslider--lg keep-scale" id="bnslider-003" data-slick='{"arrows": true, "dots": true}' data-autoplay="true" data-speed="5000"
				 data-start-width='1920' data-start-height='800' data-start-mwidth='375' data-start-mheight='365'>
				<div class="bnslider-slide">
					<div class="bnslider-image-mobile lazyload fade-up-fast" data-bgset="../admin/images/slider/slide-03-1-m.png"></div>
					<div class="bnslider-image lazyload fade-up-fast" data-bgset="../admin/images/slider/slide-03-1.png"></div>
					<div class="bnslider-text-wrap bnslider-overlay">
						<div class="bnr-decor" data-animation="fromLeftRubber" data-animation-delay="800">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 150 150" style="enable-background:new 0 0 150 150; " xml:space="preserve" class="circle_decor @@classes"> <defs> <filter x="0" y="0" width="100%" height="100%" id="dropshadow1_s001" filterUnits="userSpaceOnUse"> <feGaussianBlur in="SourceAlpha" stdDeviation="2"/> <feOffset dx="-7" dy="0" result="offsetblur"/> <feMerge> <feMergeNode/> <feMergeNode in="SourceGraphic"/> <feMergeNode in="SourceGraphic"/> </feMerge> </filter> <filter x="0" y="0" width="100%" height="100%" id="dropshadow2_s001" filterUnits="userSpaceOnUse"> <feGaussianBlur in="SourceAlpha" stdDeviation="2"/> <feOffset dx="7" dy="0" result="offsetblur"/> <feMerge> <feMergeNode/> <feMergeNode in="SourceGraphic"/> <feMergeNode in="SourceGraphic"/> </feMerge> </filter> <clipPath id="circle_decor_mask1_s001"> <circle r="73.5" cx="75" cy="75"/> </clipPath> </defs><path d="M74.933,148.5c-9.9,0-19.533-1.95-28.583-5.783c-8.75-3.7-16.6-9-23.333-15.734c-6.75-6.732-12.034-14.582-15.733-23.332C3.45,94.6,1.5,84.967,1.5,75.066c0-9.9,1.95-19.533,5.783-28.583c3.7-8.75,9-16.6,15.733-23.333S37.6,11.116,46.35,7.417c9.05-3.833,18.684-5.783,28.583-5.783c9.901,0,19.534,1.95,28.584,5.783c8.75,3.7,16.6,9,23.332,15.733c6.734,6.733,12.033,14.583,15.734,23.333c3.832,9.067,5.783,18.684,5.783,28.583c0,9.9-1.951,19.533-5.783,28.584c-3.701,8.75-9,16.6-15.734,23.332c-6.732,6.734-14.582,12.034-23.332,15.734C94.467,146.55,84.834,148.5,74.933,148.5z M74.933,24.966c-27.617,0-50.1,22.467-50.1,50.1c0,27.617,22.467,50.1,50.1,50.1c27.618,0,50.1-22.467,50.1-50.1C125.033,47.45,102.551,24.966,74.933,24.966z"/> <circle r="11.5" cx="75" cy="13.5" fill-opacity="0.25" style="filter:url(#dropshadow1_s001)" clip-path="url(#circle_decor_mask1_s001)"/> <circle r="11.5" cx="74" cy="136.5" fill-opacity="0.25" style="filter:url(#dropshadow2_s001)" clip-path="url(#circle_decor_mask1_s001)"/> <path d="M85.977,136.775c0,6.443-5.225,11.666-11.667,11.666l0,0c-6.443,0-11.667-5.223-11.667-11.666l0,0c0-6.443,5.224-11.667,11.667-11.667l0,0C80.752,125.108,85.977,130.332,85.977,136.775L85.977,136.775z"/> <path d="M85.977,13.275c0,6.443-5.225,11.667-11.667,11.667l0,0c-6.443,0-11.667-5.224-11.667-11.667l0,0c0-6.443,5.224-11.667,11.667-11.667l0,0C80.752,1.608,85.977,6.832,85.977,13.275L85.977,13.275z"/></svg>
						</div>
						<div class="bnslider-text-content txt-middle txt-right txt-center-m">
							<div class="bnslider-text-content-flex container">
								<div class="bnslider-vert w-s-50 w-ms-80">
									<div class="bnslider-text bnslider-text--xl text-center custom-color mt-0 text-nowrap" data-animation="fx1" data-animation-delay="800" style="font-weight: 500; opacity: 1;"><span class="letter" style="transform: translateY(0px); opacity: 1;">G</span><span class="letter" style="transform: translateY(0px); opacity: 1;">R</span><span class="letter" style="transform: translateY(0px); opacity: 1;">A</span><span class="letter" style="transform: translateY(0px); opacity: 1;">N</span><span class="letter" style="transform: translateY(0px); opacity: 1;">D</span> <span class="letter" style="transform: translateY(0px); opacity: 1;">S</span><span class="letter" style="transform: translateY(0px); opacity: 1;">A</span><span class="letter" style="transform: translateY(0px); opacity: 1;">L</span><span class="letter" style="transform: translateY(0px); opacity: 1;">E</span></div>
									<div class="bnslider-text bnslider-text--bg bnslider-text--sm text-center mt-sm" data-animation="fadeInUp" data-animation-delay="1200" style="color: rgb(255, 255, 255); background: rgb(40, 40, 40); font-weight: 500; opacity: 1; transform: translateY(0%);">SPORT LEGGINS</div>
									<div class="btn-wrap text-center mt-lg"><a href="product" class="btn btn--xl" data-animation="fadeIn" data-animation-delay="1600" tabindex="0" style="opacity: 1;">SHOP NOW</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="bnslider-slide">
					<div class="bnslider-image-mobile lazyload fade-up-fast" data-bgset="../admin/images/slider/slide-03-2-m.png"></div>
					<div class="bnslider-image lazyload fade-up" data-bgset="../admin/images/slider/slide-03-2.png"></div>
					<div class="bnslider-text-wrap bnslider-overlay">
						<div class="bnr-decor" data-animation="fromLeftRubber" data-animation-delay="1600">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 150 150" style="enable-background:new 0 0 150 150; " xml:space="preserve" class="circle_decor @@classes"> <defs> <filter x="0" y="0" width="100%" height="100%" id="dropshadow1_s002" filterUnits="userSpaceOnUse"> <feGaussianBlur in="SourceAlpha" stdDeviation="2"/> <feOffset dx="-7" dy="0" result="offsetblur"/> <feMerge> <feMergeNode/> <feMergeNode in="SourceGraphic"/> <feMergeNode in="SourceGraphic"/> </feMerge> </filter> <filter x="0" y="0" width="100%" height="100%" id="dropshadow2_s002" filterUnits="userSpaceOnUse"> <feGaussianBlur in="SourceAlpha" stdDeviation="2"/> <feOffset dx="7" dy="0" result="offsetblur"/> <feMerge> <feMergeNode/> <feMergeNode in="SourceGraphic"/> <feMergeNode in="SourceGraphic"/> </feMerge> </filter> <clipPath id="circle_decor_mask1_s002"> <circle r="73.5" cx="75" cy="75"/> </clipPath> </defs><path d="M74.933,148.5c-9.9,0-19.533-1.95-28.583-5.783c-8.75-3.7-16.6-9-23.333-15.734c-6.75-6.732-12.034-14.582-15.733-23.332C3.45,94.6,1.5,84.967,1.5,75.066c0-9.9,1.95-19.533,5.783-28.583c3.7-8.75,9-16.6,15.733-23.333S37.6,11.116,46.35,7.417c9.05-3.833,18.684-5.783,28.583-5.783c9.901,0,19.534,1.95,28.584,5.783c8.75,3.7,16.6,9,23.332,15.733c6.734,6.733,12.033,14.583,15.734,23.333c3.832,9.067,5.783,18.684,5.783,28.583c0,9.9-1.951,19.533-5.783,28.584c-3.701,8.75-9,16.6-15.734,23.332c-6.732,6.734-14.582,12.034-23.332,15.734C94.467,146.55,84.834,148.5,74.933,148.5z M74.933,24.966c-27.617,0-50.1,22.467-50.1,50.1c0,27.617,22.467,50.1,50.1,50.1c27.618,0,50.1-22.467,50.1-50.1C125.033,47.45,102.551,24.966,74.933,24.966z"/> <circle r="11.5" cx="75" cy="13.5" fill-opacity="0.25" style="filter:url(#dropshadow1_s002)" clip-path="url(#circle_decor_mask1_s002)"/> <circle r="11.5" cx="74" cy="136.5" fill-opacity="0.25" style="filter:url(#dropshadow2_s002)" clip-path="url(#circle_decor_mask1_s002)"/> <path d="M85.977,136.775c0,6.443-5.225,11.666-11.667,11.666l0,0c-6.443,0-11.667-5.223-11.667-11.666l0,0c0-6.443,5.224-11.667,11.667-11.667l0,0C80.752,125.108,85.977,130.332,85.977,136.775L85.977,136.775z"/> <path d="M85.977,13.275c0,6.443-5.225,11.667-11.667,11.667l0,0c-6.443,0-11.667-5.224-11.667-11.667l0,0c0-6.443,5.224-11.667,11.667-11.667l0,0C80.752,1.608,85.977,6.832,85.977,13.275L85.977,13.275z"/></svg>
						</div>
						<div class="bnr-decor" data-animation="fromRightRubber" data-animation-delay="1600">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 150 150" style="enable-background:new 0 0 150 150; top: -45%;left: 85%;" xml:space="preserve" class="circle_decor @@classes"> <defs> <filter x="0" y="0" width="100%" height="100%" id="dropshadow1_s003" filterUnits="userSpaceOnUse"> <feGaussianBlur in="SourceAlpha" stdDeviation="2"/> <feOffset dx="-7" dy="0" result="offsetblur"/> <feMerge> <feMergeNode/> <feMergeNode in="SourceGraphic"/> <feMergeNode in="SourceGraphic"/> </feMerge> </filter> <filter x="0" y="0" width="100%" height="100%" id="dropshadow2_s003" filterUnits="userSpaceOnUse"> <feGaussianBlur in="SourceAlpha" stdDeviation="2"/> <feOffset dx="7" dy="0" result="offsetblur"/> <feMerge> <feMergeNode/> <feMergeNode in="SourceGraphic"/> <feMergeNode in="SourceGraphic"/> </feMerge> </filter> <clipPath id="circle_decor_mask1_s003"> <circle r="73.5" cx="75" cy="75"/> </clipPath> </defs><path d="M74.933,148.5c-9.9,0-19.533-1.95-28.583-5.783c-8.75-3.7-16.6-9-23.333-15.734c-6.75-6.732-12.034-14.582-15.733-23.332C3.45,94.6,1.5,84.967,1.5,75.066c0-9.9,1.95-19.533,5.783-28.583c3.7-8.75,9-16.6,15.733-23.333S37.6,11.116,46.35,7.417c9.05-3.833,18.684-5.783,28.583-5.783c9.901,0,19.534,1.95,28.584,5.783c8.75,3.7,16.6,9,23.332,15.733c6.734,6.733,12.033,14.583,15.734,23.333c3.832,9.067,5.783,18.684,5.783,28.583c0,9.9-1.951,19.533-5.783,28.584c-3.701,8.75-9,16.6-15.734,23.332c-6.732,6.734-14.582,12.034-23.332,15.734C94.467,146.55,84.834,148.5,74.933,148.5z M74.933,24.966c-27.617,0-50.1,22.467-50.1,50.1c0,27.617,22.467,50.1,50.1,50.1c27.618,0,50.1-22.467,50.1-50.1C125.033,47.45,102.551,24.966,74.933,24.966z"/> <circle r="11.5" cx="75" cy="13.5" fill-opacity="0.25" style="filter:url(#dropshadow1_s003)" clip-path="url(#circle_decor_mask1_s003)"/> <circle r="11.5" cx="74" cy="136.5" fill-opacity="0.25" style="filter:url(#dropshadow2_s003)" clip-path="url(#circle_decor_mask1_s003)"/> <path d="M85.977,136.775c0,6.443-5.225,11.666-11.667,11.666l0,0c-6.443,0-11.667-5.223-11.667-11.666l0,0c0-6.443,5.224-11.667,11.667-11.667l0,0C80.752,125.108,85.977,130.332,85.977,136.775L85.977,136.775z"/> <path d="M85.977,13.275c0,6.443-5.225,11.667-11.667,11.667l0,0c-6.443,0-11.667-5.224-11.667-11.667l0,0c0-6.443,5.224-11.667,11.667-11.667l0,0C80.752,1.608,85.977,6.832,85.977,13.275L85.977,13.275z"/></svg>
						</div>
						<div class="bnslider-text-content txt-middle txt-right">
							<div class="bnslider-text-content-flex container">
								<div class="bnslider-vert w-s-50 w-ms-80">
									<div class="bnslider-text bnslider-text--xl text-center custom-color mt-0" data-animation="fx3" data-animation-delay="800" style="font-weight: 500;">HOME FITNESS</div>
									<div class="bnslider-text bnslider-text--bg bnslider-text--sm text-center mt-sm" data-animation="fadeInUp" data-animation-delay="1200" style="color: #fff; background: #000; font-weight: 500;">EQUIPMENT</div>
									<div class="btn-wrap text-center mt-lg"><a href="#" class="btn btn--xl" data-animation="fadeIn" data-animation-delay="1600">SHOP NOW</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="bnslider-arrows container-fluid">
				<div></div>
			</div>
			<div class="bnslider-dots container-fluid"></div>
		</div>
	</div>
</div>
	<div class="holder">
	<div class="container">
		<div class="title-wrap text-center">
			<h2 class="h1-style">WHY SHOP WITH US?</h2>
		</div>
		<div class="text-icn-blocks-row">
			<div class="text-icn-block">
				<div class="icn">
					<i class="icon-shopping-1"></i>
				</div>
				<div class="text">
					Complete buyer supply store
				</div>
			</div>
			<div class="text-icn-block">
				<div class="icn">
					<i class="icon-box-1"></i>
				</div>
				<div class="text">
					Same day dispatch on all orders
				</div>
			</div>
			<div class="text-icn-block">
				<div class="icn">
					<i class="icon-delivery-truck"></i>
				</div>
				<div class="text">
					Free delivery available on all orders
				</div>
			</div>
			<div class="text-icn-block">
				<div class="icn">
					<i class="icon-call-center"></i>
				</div>
				<div class="text">
					Professional advice and great support
				</div>
			</div>
			<div class="text-icn-block d-none d-sm-block">
				<div class="icn">
					<i class="icon-tag"></i>
				</div>
				<div class="text">
					Fall and Winter savings are in the air
				</div>
			</div>
		</div>
	</div>
</div>
	<div class="holder global_width">
	<div class="container">
		<div class="row vert-margin justify-content-md-center">
			<div class="col-sm-6 col-md-6">
				<div class="title-with-arrows">
					<h2>WEEK SALE</h2>
					<div class="carousel-arrows"></div>
				</div>
				<div class="prd-carousel-vert js-prd-carousel-vert">
					<div class="prd prd-hor ">
	<div class="prd-inside">
		<div class="prd-img-area">
			<a href="product.php" class="prd-img image-hover-scale image-container">
				<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/products/product-01.png" alt="Legging Red/Black" class="js-prd-img lazyload">
				<div class="Nirav Patel-loader"></div>
				<div class="prd-big-circle-labels">
					<div class="label-sale"><span>-30% <span class="sale-text">Sale</span></span>
						<div class="countdown-circle">
							<div class="countdown js-countdown" data-countdown="2021/07/01"></div>
						</div>
					</div>
				</div>
			</a>
			<div class="prd-circle-labels">
				<a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
				<a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.php"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
			</div>
		</div>
		<div class="prd-info">
			<div class="prd-info-wrap">
				<div class="prd-info-top">
					<div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
				</div>
				<h2 class="prd-title"><a href="product.php">Legging Red/Black</a></h2>
				<div class="prd-description">
					Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
				</div>
			</div>
			<div class="prd-hovers">
				<div class="prd-circle-labels">
					<div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
					<div><a href="#" class="circle-label-qview prd-hide-mobile js-prd-quickview" data-src="ajax/ajax-quickview.php"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
				</div>
				<div class="prd-price">
					<div class="price-old"><span style="font-weight: bold;">INR</span> 299</div>
					<div class="price-new"><span style="font-weight: bold;">INR</span> 99</div>
				</div>
				<div class="prd-action">
					<div class="prd-action-left">
						<form action="#">
							<button class="btn js-prd-addtocart" data-product='{"name": "Legging Red/Black", "path":"../admin/images/products/product-01.png", "url":"product.php", "aspect_ratio":0.778}'>Add To Cart</button>
						</form>
					</div>
					<div class="prd-action-right">
						<div class="prd-action-right-inside">
							<div class="prd-tag"><a href="#">Nirav Patel</a></div>
							<div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><div class="prd prd-hor ">
	<div class="prd-inside">
		<div class="prd-img-area">
			<a href="product.php" class="prd-img image-hover-scale image-container">
				<img src="../admin/images/products/product-02.png" alt="Leggings Snake print" class="js-prd-img lazyload">
				<div class="Nirav Patel-loader"></div>
				<div class="prd-big-circle-labels">
					<div class="label-sale"><span>-50% <span class="sale-text">Sale</span></span>
						<div class="countdown-circle">
							<div class="countdown js-countdown" data-countdown="2021/07/01"></div>
						</div>
					</div>
				</div>
			</a>
			<div class="prd-circle-labels">
				<a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
				<a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.php"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
			</div>
		</div>
		<div class="prd-info">
			<div class="prd-info-wrap">
				<div class="prd-info-top">
					<div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
				</div>
				<h2 class="prd-title"><a href="product.php">Leggings Snake print</a></h2>
				<div class="prd-description">
					Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
				</div>
			</div>
			<div class="prd-hovers">
				<div class="prd-circle-labels">
					<div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
					<div><a href="#" class="circle-label-qview prd-hide-mobile js-prd-quickview" data-src="ajax/ajax-quickview.php"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
				</div>
				<div class="prd-price">
					<div class="price-old"><span style="font-weight: bold;">INR</span> 499</div>
					<div class="price-new"><span style="font-weight: bold;">INR</span> 249</div>
				</div>
				<div class="prd-action">
					<div class="prd-action-left">
						<form action="#">
							<button class="btn js-prd-addtocart" data-product='{"name": "Leggings Snake print", "path":"../admin/images/products/product-02.png", "url":"product.php", "aspect_ratio":0.778}'>Add To Cart</button>
						</form>
					</div>
					<div class="prd-action-right">
						<div class="prd-action-right-inside">
							<div class="prd-tag"><a href="#">Nirav Patel</a></div>
							<div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><div class="prd prd-hor ">
	<div class="prd-inside">
		<div class="prd-img-area">
			<a href="product.php" class="prd-img image-hover-scale image-container">
				<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/products/product-18.png" alt="Jumpsuit with a hood" class="js-prd-img lazyload">
				<div class="Nirav Patel-loader"></div>
				<div class="prd-big-circle-labels">
					<div class="label-sale"><span>-80% <span class="sale-text">Sale</span></span>
						<div class="countdown-circle">
							<div class="countdown js-countdown" data-countdown="2021/07/01"></div>
						</div>
					</div>
				</div>
			</a>
			<div class="prd-circle-labels">
				<a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
				<a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.php"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
			</div>
		</div>
		<div class="prd-info">
			<div class="prd-info-wrap">
				<div class="prd-info-top">
					<div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
				</div>
				<h2 class="prd-title"><a href="product.php">Jumpsuit with a hood</a></h2>
				<div class="prd-description">
					Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
				</div>
			</div>
			<div class="prd-hovers">
				<div class="prd-circle-labels">
					<div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
					<div><a href="#" class="circle-label-qview prd-hide-mobile js-prd-quickview" data-src="ajax/ajax-quickview.php"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
				</div>
				<div class="prd-price">
					<div class="price-old"><span style="font-weight: bold;">INR</span> 799</div>
					<div class="price-new"><span style="font-weight: bold;">INR</span> 159</div>
				</div>
				<div class="prd-action">
					<div class="prd-action-left">
						<form action="#">
							<button class="btn js-prd-addtocart" data-product='{"name": "Jumpsuit with a hood", "path":"../admin/images/products/product-18.png", "url":"product.php", "aspect_ratio":0.778}'>Add To Cart</button>
						</form>
					</div>
					<div class="prd-action-right">
						<div class="prd-action-right-inside">
							<div class="prd-tag"><a href="#">Nirav Patel</a></div>
							<div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><div class="prd prd-hor ">
	<div class="prd-inside">
		<div class="prd-img-area">
			<a href="product.php" class="prd-img image-hover-scale image-container">
				<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/products/product-19.png" alt="T-shirt Dark Blue" class="js-prd-img lazyload">
				<div class="Nirav Patel-loader"></div>
				<div class="prd-big-circle-labels">
					<div class="label-sale"><span>-20% <span class="sale-text">Sale</span></span>
						<div class="countdown-circle">
							<div class="countdown js-countdown" data-countdown="2021/07/01"></div>
						</div>
					</div>
				</div>
			</a>
			<div class="prd-circle-labels">
				<a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
				<a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.php"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
			</div>
		</div>
		<div class="prd-info">
			<div class="prd-info-wrap">
				<div class="prd-info-top">
					<div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
				</div>
				<h2 class="prd-title"><a href="product.php">T-shirt Dark Blue</a></h2>
				<div class="prd-description">
					Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
				</div>
			</div>
			<div class="prd-hovers">
				<div class="prd-circle-labels">
					<div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
					<div><a href="#" class="circle-label-qview prd-hide-mobile js-prd-quickview" data-src="ajax/ajax-quickview.php"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
				</div>
				<div class="prd-price">
					<div class="price-old"><span style="font-weight: bold;">INR</span> 299</div>
					<div class="price-new"><span style="font-weight: bold;">INR</span> 239</div>
				</div>
				<div class="prd-action">
					<div class="prd-action-left">
						<form action="#">
							<button class="btn js-prd-addtocart" data-product='{"name": "T-shirt Dark Blue", "path":"../admin/images/products/product-19.png", "url":"product.php", "aspect_ratio":0.778}'>Add To Cart</button>
						</form>
					</div>
					<div class="prd-action-right">
						<div class="prd-action-right-inside">
							<div class="prd-tag"><a href="#">Nirav Patel</a></div>
							<div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-6">
				<div class="title-with-arrows">
					<h2>NEW ARRIVALS</h2>
					<div class="carousel-arrows"></div>
				</div>
				<div class="prd-carousel-vert js-prd-carousel-vert">
					<div class="prd prd-hor ">
	<div class="prd-inside">
		<div class="prd-img-area">
			<a href="product.php" class="prd-img image-hover-scale image-container">
				<img src="../admin/images/products/product-08.png" alt="Fitness Jumpsuit Blue/Black" class="js-prd-img lazyload">
				<div class="Nirav Patel-loader"></div>
				<div class="prd-big-circle-labels">
					<div class="label-new"><span>New</span></div>
				</div>
			</a>
			<div class="prd-circle-labels">
				<a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
				<a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.php"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
			</div>
		</div>
		<div class="prd-info">
			<div class="prd-info-wrap">
				<div class="prd-info-top">
					<div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
				</div>
				<h2 class="prd-title"><a href="product.php">Fitness Jumpsuit Blue/Black</a></h2>
				<div class="prd-description">
					Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
				</div>
			</div>
			<div class="prd-hovers">
				<div class="prd-circle-labels">
					<div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
					<div><a href="#" class="circle-label-qview prd-hide-mobile js-prd-quickview" data-src="ajax/ajax-quickview.php"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
				</div>
				<div class="prd-price">
					<div class="price-new"><span style="font-weight: bold;">INR</span> 249</div>
				</div>
				<div class="prd-action">
					<div class="prd-action-left">
						<form action="#">
							<button class="btn js-prd-addtocart" data-product='{"name": "Fitness Jumpsuit Blue/Black", "path":"../admin/images/products/product-08.png", "url":"product.php", "aspect_ratio":0.778}'>Add To Cart</button>
						</form>
					</div>
					<div class="prd-action-right">
						<div class="prd-action-right-inside">
							<div class="prd-tag"><a href="#">Nirav Patel</a></div>
							<div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><div class="prd prd-hor ">
	<div class="prd-inside">
		<div class="prd-img-area">
			<a href="product.php" class="prd-img image-hover-scale image-container">
				<img src="../admin/images/products/product-07.png" alt="Fitness Jumpsuit Black/Yellow" class="js-prd-img lazyload">
				<div class="Nirav Patel-loader"></div>
				<div class="prd-big-circle-labels">
					<div class="label-new"><span>New</span></div>
					<div class="label-sale"><span>-10% <span class="sale-text">Sale</span></span>
					</div>
				</div>
			</a>
			<div class="prd-circle-labels">
				<a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
				<a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.php"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
			</div>
		</div>
		<div class="prd-info">
			<div class="prd-info-wrap">
				<div class="prd-info-top">
					<div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
				</div>
				<h2 class="prd-title"><a href="product.php">Fitness Jumpsuit Black/Yellow</a></h2>
				<div class="prd-description">
					Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
				</div>
			</div>
			<div class="prd-hovers">
				<div class="prd-circle-labels">
					<div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
					<div><a href="#" class="circle-label-qview prd-hide-mobile js-prd-quickview" data-src="ajax/ajax-quickview.php"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
				</div>
				<div class="prd-price">
					<div class="price-old"><span style="font-weight: bold;">INR</span> 159</div>
					<div class="price-new"><span style="font-weight: bold;">INR</span> 129</div>
				</div>
				<div class="prd-action">
					<div class="prd-action-left">
						<form action="#">
							<button class="btn js-prd-addtocart" data-product='{"name": "Fitness Jumpsuit Black/Yellow", "path":"../admin/images/products/product-07.png", "url":"product.php", "aspect_ratio":0.778}'>Add To Cart</button>
						</form>
					</div>
					<div class="prd-action-right">
						<div class="prd-action-right-inside">
							<div class="prd-tag"><a href="#">Nirav Patel</a></div>
							<div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><div class="prd prd-hor ">
	<div class="prd-inside">
		<div class="prd-img-area">
			<a href="product.php" class="prd-img image-hover-scale image-container">
				<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/products/product-06.png" alt="Fitness Jumpsuit Camouflage" class="js-prd-img lazyload">
				<div class="Nirav Patel-loader"></div>
				<div class="prd-big-circle-labels">
					<div class="label-new"><span>New</span></div>
				</div>
			</a>
			<div class="prd-circle-labels">
				<a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
				<a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.php"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
			</div>
		</div>
		<div class="prd-info">
			<div class="prd-info-wrap">
				<div class="prd-info-top">
					<div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
				</div>
				<h2 class="prd-title"><a href="product.php">Fitness Jumpsuit Camouflage</a></h2>
				<div class="prd-description">
					Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
				</div>
			</div>
			<div class="prd-hovers">
				<div class="prd-circle-labels">
					<div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
					<div><a href="#" class="circle-label-qview prd-hide-mobile js-prd-quickview" data-src="ajax/ajax-quickview.php"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
				</div>
				<div class="prd-price">
					<div class="price-new"><span style="font-weight: bold;">INR</span> 199</div>
				</div>
				<div class="prd-action">
					<div class="prd-action-left">
						<form action="#">
							<button class="btn js-prd-addtocart" data-product='{"name": "Fitness Jumpsuit Camouflage", "path":"../admin/images/products/product-06.png", "url":"product.php", "aspect_ratio":0.778}'>Add To Cart</button>
						</form>
					</div>
					<div class="prd-action-right">
						<div class="prd-action-right-inside">
							<div class="prd-tag"><a href="#">Nirav Patel</a></div>
							<div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><div class="prd prd-hor ">
	<div class="prd-inside">
		<div class="prd-img-area">
			<a href="product.php" class="prd-img image-hover-scale image-container">
				<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/products/product-05.png" alt="Fitness Jumpsuit Khaki/Black" class="js-prd-img lazyload">
				<div class="Nirav Patel-loader"></div>
				<div class="prd-big-circle-labels">
					<div class="label-new"><span>New</span></div>
				</div>
			</a>
			<div class="prd-circle-labels">
				<a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
				<a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.php"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
			</div>
		</div>
		<div class="prd-info">
			<div class="prd-info-wrap">
				<div class="prd-info-top">
					<div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
				</div>
				<h2 class="prd-title"><a href="product.php">Fitness Jumpsuit Khaki/Black</a></h2>
				<div class="prd-description">
					Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
				</div>
			</div>
			<div class="prd-hovers">
				<div class="prd-circle-labels">
					<div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
					<div><a href="#" class="circle-label-qview prd-hide-mobile js-prd-quickview" data-src="ajax/ajax-quickview.php"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
				</div>
				<div class="prd-price">
					<div class="price-new"><span style="font-weight: bold;">INR</span> 189</div>
				</div>
				<div class="prd-action">
					<div class="prd-action-left">
						<form action="#">
							<button class="btn js-prd-addtocart" data-product='{"name": "Fitness Jumpsuit Khaki/Black", "path":"../admin/images/products/product-05.png", "url":"product.php", "aspect_ratio":0.778}'>Add To Cart</button>
						</form>
					</div>
					<div class="prd-action-right">
						<div class="prd-action-right-inside">
							<div class="prd-tag"><a href="#">Nirav Patel</a></div>
							<div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-6">
				<div class="title-with-arrows">
					<h2>HOTTEST PRODUCTS</h2>
					<div class="carousel-arrows"></div>
				</div>
				<div class="prd-carousel-vert js-prd-carousel-vert">
					<div class="prd prd-hor ">
	<div class="prd-inside">
		<div class="prd-img-area">
			<a href="product.php" class="prd-img image-hover-scale image-container">
				<img src="../admin/images/products/product-09.png" alt="T-shirt Black" class="js-prd-img lazyload">
				<div class="Nirav Patel-loader"></div>
				<div class="prd-big-circle-labels">
					<div class="label-sale"><span>-10% <span class="sale-text">Sale</span></span>
						<div class="countdown-circle">
							<div class="countdown js-countdown" data-countdown="2021/07/01"></div>
						</div>
					</div>
				</div>
			</a>
			<div class="prd-circle-labels">
				<a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
				<a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.php"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
			</div>
		</div>
		<div class="prd-info">
			<div class="prd-info-wrap">
				<div class="prd-info-top">
					<div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
				</div>
				<h2 class="prd-title"><a href="product.php">T-shirt Black</a></h2>
				<div class="prd-description">
					Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
				</div>
			</div>
			<div class="prd-hovers">
				<div class="prd-circle-labels">
					<div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
					<div><a href="#" class="circle-label-qview prd-hide-mobile js-prd-quickview" data-src="ajax/ajax-quickview.php"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
				</div>
				<div class="prd-price">
					<div class="price-old"><span style="font-weight: bold;">INR</span> 219</div>
					<div class="price-new"><span style="font-weight: bold;">INR</span> 189</div>
				</div>
				<div class="prd-action">
					<div class="prd-action-left">
						<form action="#">
							<button class="btn js-prd-addtocart" data-product='{"name": "T-shirt Black", "path":"../admin/images/products/product-09.png", "url":"product.php", "aspect_ratio":0.778}'>Add To Cart</button>
						</form>
					</div>
					<div class="prd-action-right">
						<div class="prd-action-right-inside">
							<div class="prd-tag"><a href="#">Nirav Patel</a></div>
							<div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><div class="prd prd-hor ">
	<div class="prd-inside">
		<div class="prd-img-area">
			<a href="product.php" class="prd-img image-hover-scale image-container">
				<img src="../admin/images/products/product-02.png" alt="Sport Shirt Black" class="js-prd-img lazyload">
				<div class="Nirav Patel-loader"></div>
				<div class="prd-big-circle-labels">
				</div>
			</a>
			<div class="prd-circle-labels">
				<a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
				<a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.php"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
			</div>
		</div>
		<div class="prd-info">
			<div class="prd-info-wrap">
				<div class="prd-info-top">
					<div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
				</div>
				<h2 class="prd-title"><a href="product.php">Sport Shirt Black</a></h2>
				<div class="prd-description">
					Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
				</div>
			</div>
			<div class="prd-hovers">
				<div class="prd-circle-labels">
					<div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
					<div><a href="#" class="circle-label-qview prd-hide-mobile js-prd-quickview" data-src="ajax/ajax-quickview.php"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
				</div>
				<div class="prd-price">
					<div class="price-new"><span style="font-weight: bold;">INR</span> 180</div>
				</div>
				<div class="prd-action">
					<div class="prd-action-left">
						<form action="#">
							<button class="btn js-prd-addtocart" data-product='{"name": "Sport Shirt Black", "path":"../admin/images/products/product-10.png", "url":"product.php", "aspect_ratio":0.778}'>Add To Cart</button>
						</form>
					</div>
					<div class="prd-action-right">
						<div class="prd-action-right-inside">
							<div class="prd-tag"><a href="#">Nirav Patel</a></div>
							<div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><div class="prd prd-hor ">
	<div class="prd-inside">
		<div class="prd-img-area">
			<a href="product.php" class="prd-img image-hover-scale image-container">
				<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/products/product-11.png" alt="T-shirt White" class="js-prd-img lazyload">
				<div class="Nirav Patel-loader"></div>
				<div class="prd-big-circle-labels">
				</div>
			</a>
			<div class="prd-circle-labels">
				<a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
				<a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.php"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
			</div>
		</div>
		<div class="prd-info">
			<div class="prd-info-wrap">
				<div class="prd-info-top">
					<div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
				</div>
				<h2 class="prd-title"><a href="product.php">T-shirt White</a></h2>
				<div class="prd-description">
					Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
				</div>
			</div>
			<div class="prd-hovers">
				<div class="prd-circle-labels">
					<div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
					<div><a href="#" class="circle-label-qview prd-hide-mobile js-prd-quickview" data-src="ajax/ajax-quickview.php"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
				</div>
				<div class="prd-price">
					<div class="price-new"><span style="font-weight: bold;">INR</span> 99</div>
				</div>
				<div class="prd-action">
					<div class="prd-action-left">
						<form action="#">
							<button class="btn js-prd-addtocart" data-product='{"name": "T-shirt White", "path":"../admin/images/products/product-11.png", "url":"product.php", "aspect_ratio":0.778}'>Add To Cart</button>
						</form>
					</div>
					<div class="prd-action-right">
						<div class="prd-action-right-inside">
							<div class="prd-tag"><a href="#">Nirav Patel</a></div>
							<div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><div class="prd prd-hor ">
	<div class="prd-inside">
		<div class="prd-img-area">
			<a href="product.php" class="prd-img image-hover-scale image-container">
				<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/products/product-12.png" alt="Full Zipper Hoodies" class="js-prd-img lazyload">
				<div class="Nirav Patel-loader"></div>
				<div class="prd-big-circle-labels">
				</div>
			</a>
			<div class="prd-circle-labels">
				<a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
				<a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.php"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
			</div>
		</div>
		<div class="prd-info">
			<div class="prd-info-wrap">
				<div class="prd-info-top">
					<div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
				</div>
				<h2 class="prd-title"><a href="product.php">Full Zipper Hoodies</a></h2>
				<div class="prd-description">
					Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
				</div>
			</div>
			<div class="prd-hovers">
				<div class="prd-circle-labels">
					<div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
					<div><a href="#" class="circle-label-qview prd-hide-mobile js-prd-quickview" data-src="ajax/ajax-quickview.php"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
				</div>
				<div class="prd-price">
					<div class="price-new"><span style="font-weight: bold;">INR</span> 299</div>
				</div>
				<div class="prd-action">
					<div class="prd-action-left">
						<form action="#">
							<button class="btn js-prd-addtocart" data-product='{"name": "Full Zipper Hoodies", "path":"../admin/images/products/product-12.png", "url":"product.php", "aspect_ratio":0.778}'>Add To Cart</button>
						</form>
					</div>
					<div class="prd-action-right">
						<div class="prd-action-right-inside">
							<div class="prd-tag"><a href="#">Nirav Patel</a></div>
							<div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<div class="holder">
	<div class="container">
		<ul class="brand-carousel slick-arrows-aside-simple js-brand-carousel">
			<li>
	<a href="#" target="_self" class="d-block image-container" title="Brand" style="padding-bottom: 37.5%;">
		<img class="lazyload fade-up" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/skins/fashion/brands/brand-fashion-06.png" alt="Brand">
	</a>
</li>
<li>
	<a href="#" target="_self" class="d-block image-container" title="Brand" style="padding-bottom: 37.5%;">
		<img class="lazyload fade-up" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/skins/fashion/brands/brand-fashion-05.png" alt="Brand">
	</a>
</li>
<li>
	<a href="#" target="_self" class="d-block image-container" title="Brand" style="padding-bottom: 37.5%;">
		<img class="lazyload fade-up" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/skins/fashion/brands/brand-fashion-01.png" alt="Brand">
	</a>
</li>
<li>
	<a href="#" target="_self" class="d-block image-container" title="Brand" style="padding-bottom: 37.5%;">
		<img class="lazyload fade-up" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/skins/fashion/brands/brand-fashion-02.png" alt="Brand">
	</a>
</li>
<li class="visuallyhidden js-hidden">
	<a href="#" target="_self" class="d-block image-container" title="Brand" style="padding-bottom: 37.5%;">
		<img class="lazyload fade-up" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/skins/fashion/brands/brand-fashion-03.png" alt="Brand">
	</a>
</li>
<li class="visuallyhidden js-hidden">
	<a href="#" target="_self" class="d-block image-container" title="Brand" style="padding-bottom: 37.5%;">
		<img class="lazyload fade-up" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/skins/fashion/brands/brand-fashion-04.png" alt="Brand">
	</a>
</li>
<li>
	<a href="#" target="_self" class="d-block image-container" title="Brand" style="padding-bottom: 37.5%;">
		<img class="lazyload fade-up" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/skins/fashion/brands/brand-fashion-06.png" alt="Brand">
	</a>
</li>
<li>
	<a href="#" target="_self" class="d-block image-container" title="Brand" style="padding-bottom: 37.5%;">
		<img class="lazyload fade-up" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/skins/fashion/brands/brand-fashion-05.png" alt="Brand">
	</a>
</li>
<li>
	<a href="#" target="_self" class="d-block image-container" title="Brand" style="padding-bottom: 37.5%;">
		<img class="lazyload fade-up" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/skins/fashion/brands/brand-fashion-01.png" alt="Brand">
	</a>
</li>
<li>
	<a href="#" target="_self" class="d-block image-container" title="Brand" style="padding-bottom: 37.5%;">
		<img class="lazyload fade-up" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/skins/fashion/brands/brand-fashion-02.png" alt="Brand">
	</a>
</li>
<li class="visuallyhidden js-hidden">
	<a href="#" target="_self" class="d-block image-container" title="Brand" style="padding-bottom: 37.5%;">
		<img class="lazyload fade-up" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/skins/fashion/brands/brand-fashion-03.png" alt="Brand">
	</a>
</li>
<li class="visuallyhidden js-hidden">
	<a href="#" target="_self" class="d-block image-container" title="Brand" style="padding-bottom: 37.5%;">
		<img class="lazyload fade-up" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/skins/fashion/brands/brand-fashion-04.png" alt="Brand">
	</a>
</li>
		</ul>
	</div>
</div>
	<div class="holder @classes">
	<div class="container">
		<div class="row bnr-grid vert-margin justify-content-md-center">
			<div class="col-sm">
				<a href="#" class="bnr image-hover-scale bnr--bottom bnr-left" data-fontratio="5.695">
					<div class="bnr-img image-container" style="padding-bottom: 121.3%">
						<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-srcset="../admin/images/banners/banner-index-02.png" class="lazyload fade-up" alt="">
					</div>
					<div class="bnr-caption">
						<div class="bnr-text2">This week<br><span>50%</span></div>
						<div class="bnr-text3">YOUR <span>GAME</span></div>
					</div>
				</a>
			</div>
			<div class="col-sm">
				<a href="#" class="bnr image-hover-scale bnr--middle bnr--center" data-fontratio="5.695">
					<div class="bnr-img image-container" style="padding-bottom: 121.3%">
						<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-srcset="../admin/images/banners/banner-index-03.png" class="lazyload fade-up" alt="">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"viewBox="0 0 150 150" style="enable-background:new 0 0 150 150; " xml:space="preserve" class="circle_decor circle_decor--tr"><defs><filter x="0" y="0" width="100%" height="100%" id="dropshadow_1_b01" filterUnits="userSpaceOnUse"><feGaussianBlur in="SourceAlpha" stdDeviation="2"/><feOffset dx="-3" dy="0" result="offsetblur"/><feMerge><feMergeNode/><feMergeNode in="SourceGraphic"/><feMergeNode in="SourceGraphic"/></feMerge></filter><filter x="0" y="0" width="100%" height="100%" id="dropshadow_2_b01" filterUnits="userSpaceOnUse"><feGaussianBlur in="SourceAlpha" stdDeviation="2"/><feOffset dx="3" dy="0" result="offsetblur"/><feMerge><feMergeNode/><feMergeNode in="SourceGraphic"/><feMergeNode in="SourceGraphic"/></feMerge></filter><clipPath id="circle_decor_mask_b01"><circle r="73.5" cx="75" cy="75"/></clipPath></defs><path fill="#55C1AE" d="M74.933,148.5c-9.9,0-19.533-1.95-28.583-5.783c-8.75-3.699-16.6-9-23.333-15.734c-6.75-6.731-12.034-14.582-15.733-23.332C3.45,94.6,1.5,84.967,1.5,75.066c0-9.9,1.95-19.533,5.783-28.583c3.7-8.75,9-16.6,15.733-23.333S37.6,11.116,46.35,7.417c9.05-3.833,18.684-5.783,28.583-5.783c9.901,0,19.534,1.95,28.584,5.783c8.75,3.7,16.6,9,23.332,15.733c6.733,6.733,12.032,14.583,15.733,23.333c3.832,9.067,5.783,18.684,5.783,28.583c0,9.9-1.951,19.534-5.783,28.584c-3.701,8.75-9,16.6-15.733,23.332c-6.732,6.733-14.582,12.033-23.332,15.733C94.467,146.55,84.834,148.5,74.933,148.5z M75,13.783C41.25,13.783,13.783,41.25,13.783,75S41.25,136.217,75,136.217S136.217,108.75,136.217,75S108.75,13.783,75,13.783z"/><circle r="5.8" cx="75" cy="7.8" fill-opacity="0.25" style="filter:url(#dropshadow_1_b01)" clip-path="url(#circle_decor_mask_b01)"/><circle r="5.8" cx="74" cy="142.5" fill-opacity="0.25" style="filter:url(#dropshadow_2_b01)" clip-path="url(#circle_decor_mask_b01)"/><path fill="#55C1AE" d="M81.101,7.712c0,3.346-2.761,6.059-6.164,6.059l0,0c-3.404,0-6.164-2.713-6.164-6.059l0,0c0-3.345,2.76-6.058,6.164-6.058l0,0C78.34,1.654,81.101,4.367,81.101,7.712L81.101,7.712z"/><path fill="#55C1AE" d="M81.177,142.363c0,3.346-2.761,6.06-6.164,6.06l0,0c-3.404,0-6.164-2.714-6.164-6.06l0,0c0-3.345,2.76-6.058,6.164-6.058l0,0C78.416,136.306,81.177,139.019,81.177,142.363L81.177,142.363z"/></svg>
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"viewBox="0 0 150 150" style="enable-background:new 0 0 150 150; " xml:space="preserve" class="circle_decor circle_decor--bl"><defs><filter x="0" y="0" width="100%" height="100%" id="dropshadow_1_b02" filterUnits="userSpaceOnUse"><feGaussianBlur in="SourceAlpha" stdDeviation="2"/><feOffset dx="-3" dy="0" result="offsetblur"/><feMerge><feMergeNode/><feMergeNode in="SourceGraphic"/><feMergeNode in="SourceGraphic"/></feMerge></filter><filter x="0" y="0" width="100%" height="100%" id="dropshadow_2_b02" filterUnits="userSpaceOnUse"><feGaussianBlur in="SourceAlpha" stdDeviation="2"/><feOffset dx="3" dy="0" result="offsetblur"/><feMerge><feMergeNode/><feMergeNode in="SourceGraphic"/><feMergeNode in="SourceGraphic"/></feMerge></filter><clipPath id="circle_decor_mask_b02"><circle r="73.5" cx="75" cy="75"/></clipPath></defs><path fill="#55C1AE" d="M74.933,148.5c-9.9,0-19.533-1.95-28.583-5.783c-8.75-3.699-16.6-9-23.333-15.734c-6.75-6.731-12.034-14.582-15.733-23.332C3.45,94.6,1.5,84.967,1.5,75.066c0-9.9,1.95-19.533,5.783-28.583c3.7-8.75,9-16.6,15.733-23.333S37.6,11.116,46.35,7.417c9.05-3.833,18.684-5.783,28.583-5.783c9.901,0,19.534,1.95,28.584,5.783c8.75,3.7,16.6,9,23.332,15.733c6.733,6.733,12.032,14.583,15.733,23.333c3.832,9.067,5.783,18.684,5.783,28.583c0,9.9-1.951,19.534-5.783,28.584c-3.701,8.75-9,16.6-15.733,23.332c-6.732,6.733-14.582,12.033-23.332,15.733C94.467,146.55,84.834,148.5,74.933,148.5z M75,13.783C41.25,13.783,13.783,41.25,13.783,75S41.25,136.217,75,136.217S136.217,108.75,136.217,75S108.75,13.783,75,13.783z"/><circle r="5.8" cx="75" cy="7.8" fill-opacity="0.25" style="filter:url(#dropshadow_1_b02)" clip-path="url(#circle_decor_mask_b02)"/><circle r="5.8" cx="74" cy="142.5" fill-opacity="0.25" style="filter:url(#dropshadow_2_b02)" clip-path="url(#circle_decor_mask_b02)"/><path fill="#55C1AE" d="M81.101,7.712c0,3.346-2.761,6.059-6.164,6.059l0,0c-3.404,0-6.164-2.713-6.164-6.059l0,0c0-3.345,2.76-6.058,6.164-6.058l0,0C78.34,1.654,81.101,4.367,81.101,7.712L81.101,7.712z"/><path fill="#55C1AE" d="M81.177,142.363c0,3.346-2.761,6.06-6.164,6.06l0,0c-3.404,0-6.164-2.714-6.164-6.06l0,0c0-3.345,2.76-6.058,6.164-6.058l0,0C78.416,136.306,81.177,139.019,81.177,142.363L81.177,142.363z"/></svg>
					</div>
					<div class="bnr-caption">
						<div class="bnr-text4">SALE</div>
						<div class="bnr-text5 text-right">-70%</div>
					</div>
				</a>
			</div>
			<div class="col-sm">
				<a href="#" class="bnr image-hover-scale bnr--bottom bnr--left" data-fontratio="5.695">
					<div class="bnr-img image-container" style="padding-bottom: 121.3%">
						<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-srcset="../admin/images/banners/banner-index-04.png" class="lazyload fade-up" alt="">
					</div>
					<div class="bnr-caption">
						<div class="bnr-text2">This week<br><span>50%</span></div>
						<div class="bnr-text3"><span>LIFE IS SHORT, </span>PLAY <span>HARD!</span></div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
	<div class="holder">
	<div class="container">
		<div class="row vert-margin">
			<div class="col-sm-9">
				<div class="row vert-margin-middle">
					<div class="col-lg-6">
						<h4 class="h-icon"><i class="icon-speech-bubble"></i><span>WE HAVE A CHAT!</span></h4>
						+8 800 555 35 37<br>
						+8 800 555 35 37
					</div>
					<div class="col-lg-6">
						<h4 class="h-icon"><i class="icon-location"></i><span>OUR LOCATION</span></h4>
						181 Arple Rd E, St Albans<br>
						Swites 3021, USA
					</div>
					<div class="col-lg-6">
						<h4 class="h-icon"><i class="icon-watch"></i><span>TIME WORK</span></h4>
						5 Days a week<br>
						from 08 AM to 8 PM
					</div>
				</div>
				<div class="mt-3"></div>
				<div>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings</div>
				<div class="mt-3"></div>
				<h2>WRITE TO US</h2>
				<form class="contact-form" id="contactForm" method="post">
					<div class="form-confirm">
						<div class="success-confirm">
							Thanks! Your message has been sent.
						</div>
						<div class="error-confirm">
							Oops! There was an error submitting form. Refresh and send again.
						</div>
					</div>
					<div class="form-group">
						<div class="row vert-margin-middle">
							<div class="col-lg">
								<input type="text" name="username" class="form-control" placeholder="Name" required>
							</div>
							<div class="col-lg">
								<input type="email" name="email" class="form-control" placeholder="Email" required>
							</div>
							<div class="col-lg">
								<input type="text" name="phone" class="form-control" data-required-error="Please fill the field" placeholder="Phone">
							</div>
						</div>
					</div>
					<div class="form-group">
						<textarea class="form-control textarea--height-170" name="message" data-required-error="Please fill the field" placeholder="Message" required></textarea>
					</div>
					<button type="submit" class="btn">Send Message</button>
				</form>
			</div>
			<div class="col-sm-9">
				<div class="contact-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1621453873527!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<?php include_once 'footer.php';  ?>