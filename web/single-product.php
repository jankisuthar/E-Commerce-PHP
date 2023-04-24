
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



<?php foreach ($prod_arr as $p) {
	
?>
<div class="page-content">
	<div class="holder breadcrumbs-wrap mt-0">
	<div class="container">
		<ul class="breadcrumbs">
			<li><a href="index.php">Home</a></li>
			<li><a href="category.php"><?php echo $p->cate_name;?></a></li>
			<li><span><?php echo $p->prod_name;?></span></li>
		</ul>
	</div>
</div>
	<div class="holder mt-0 mt-md-5">
	<div class="container">
		<div class="row prd-block prd-block--prv-left prd-block--prv-double" id="prdGallery">
			<div class="col-md-10 aside aside--sticky aside--left js-sticky-collision">
				<div class="aside-content">
					<div class="prd-block_info js-prd-m-holder mb-2 mb-md-0"></div>
<div class="mb-2 js-prd-m-holder"></div>
<div class="prd-block_main-image">
	<div class="prd-block_main-image-holder" id="prdMainImage">
		<div class="product-main-carousel js-product-main-carousel" data-zoom-position="inner">
			<div data-value="Beige"><span class="prd-img"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/prod_images/<?php echo $p->prod_img;?>" class="lazyload fade-up elzoom" alt="" data-zoom-image="../admin/images/prod_images/<?php echo $p->prod_img;?>"/></span></div>
			<div data-value="Beige"><span class="prd-img"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/prod_images/<?php echo $p->prod_img;?>" class="lazyload fade-up elzoom" alt="" data-zoom-image="../admin/images/prod_images/<?php echo $p->prod_img;?>"/></span></div>
			
			<div data-value="Beige"><span class="prd-img"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/prod_images/<?php echo $p->prod_img;?>" class="lazyload fade-up elzoom" alt="" data-zoom-image="../admin/images/prod_images/<?php echo $p->prod_img;?>"/></span></div>
			<div data-value="Black"><span class="prd-img"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/prod_images/<?php echo $p->prod_img;?>" class="lazyload fade-up elzoom" alt="" data-zoom-image="../admin/images/prod_images/<?php echo $p->prod_img;?>"/></span></div>
			<div data-value="Black"><span class="prd-img"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/prod_images/<?php echo $p->prod_img;?>" class="lazyload fade-up elzoom" alt="" data-zoom-image="../admin/images/prod_images/<?php echo $p->prod_img;?>"/></span></div>
			<div data-value="Black"><span class="prd-img"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/prod_images/<?php echo $p->prod_img;?>" class="lazyload fade-up elzoom" alt="" data-zoom-image="../admin/images/prod_images/<?php echo $p->prod_img;?>"/></span></div>
			<div data-value="Red"><span class="prd-img"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/prod_images/<?php echo $p->prod_img;?>" class="lazyload fade-up elzoom" alt="" data-zoom-image="../admin/images/prod_images/<?php echo $p->prod_img;?>"/></span></div>
			<div data-value="Red"><span class="prd-img"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/prod_images/<?php echo $p->prod_img;?>" class="lazyload fade-up elzoom" alt="" data-zoom-image="../admin/images/prod_images/<?php echo $p->prod_img;?>"/></span></div>
			<div data-value="Red"><span class="prd-img"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/prod_images/<?php echo $p->prod_img;?>" class="lazyload fade-up elzoom" alt="" data-zoom-image="../admin/images/prod_images/<?php echo $p->prod_img;?>"/></span></div>
		</div>
		<div class="prd-block_label-sale-squared justify-content-center align-items-center"><span>Sale</span></div>
	</div>
	<div class="prd-block_main-image-links">
		<a data-fancybox data-width="900" href="../admin/images/products/<?php echo $p->prod_img;?>" class="prd-block_video-link"><i class="icon-video"></i></a>
		<a href="../admin/images/products/<?php echo $p->prod_img;?>" class="prd-block_zoom-link"><i class="icon-zoom-in"></i></a>
	</div>
</div>
<div class="product-previews-wrapper">
	<div class="product-previews-carousel js-product-previews-carousel">
		<a href="#" data-value="Beige"><span class="prd-img"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/prod_images/<?php echo $p->prod_img;?>" class="lazyload fade-up" alt=""/></span></a>
		<a href="#" data-value="Beige"><span class="prd-img"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/prod_images/<?php echo $p->prod_img;?>" class="lazyload fade-up" alt=""/></span></a>
		
		</a>
		<a href="#" data-value="Beige"><span class="prd-img"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/prod_images/<?php echo $p->prod_img;?>" class="lazyload fade-up" alt=""/></span></a>
		<a href="#" data-value="Black"><span class="prd-img"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/prod_images/<?php echo $p->prod_img;?>" class="lazyload fade-up" alt=""/></span></a>
		<a href="#" data-value="Black"><span class="prd-img"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/prod_images/<?php echo $p->prod_img;?>" class="lazyload fade-up" alt=""/></span></a>
		<a href="#" data-value="Black"><span class="prd-img"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/prod_images/<?php echo $p->prod_img;?>" class="lazyload fade-up" alt=""/></span></a>
		
	</div>
</div>
				</div>
			</div>
			<div class="col-md-8 mt-1 mt-md-0">
				<div class="prd-block_info prd-block_info--style1" data-prd-handle="/products/copy-of-suede-leather-mini-skirt">
	<div class="prd-block_info-top prd-block_info_item order-0 order-md-2">
		<div class="prd-block_price prd-block_price--style2">
			<div class="prd-block_price--actual"><span style="font-weight: bold;">INR</span><?php echo $p->prod_price;?></div>
			<div class="prd-block_price-old-wrap">
				<span class="prd-block_price--old"><span style="font-weight: bold;">INR</span>210.00</span>
				<span class="prd-block_price--text">You Save: <span style="font-weight: bold;">INR</span>131.99 (28%)</span>
			</div>
		</div>
		<div class="prd-block_viewed-wrap d-none d-md-flex">
			<div class="prd-block_viewed">
				<i class="icon-time"></i>
				<span>
					This product was viewed

					 <?php 

					 if ( !isset( $_SESSION['count'] ) ) 
    				 $_SESSION['count'] = 1; else $_SESSION['count']++;
    				 echo( $_SESSION['count'] );

					 ?>


				 times within last hour

					</span>
			</div>
		</div>
	</div>
	<div class="prd-holder prd-block_info_item order-0 mt-15 mt-md-0">
		<div class="prd-block_title-wrap">
			<div class="prd-block_reviews" data-toggle="tooltip" data-placement="top" title="Scroll To Reviews"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star"></i>
				<span class="reviews-link"><a href="#" class="js-reviews-link"> (17 reviews)</a></span>
			</div>
			<h1 class="prd-block_title"><?php echo $p->prod_name;?></h1>
		</div>
	</div>
	<div class="prd-block_description prd-block_info_item ">
		<h3>Short description</h3>
		<p>
			<?php echo $p->prod_description;?>
		Model is 5'9" wearing Size XS Tall</p>
		<div class="mt-1"></div>
		<div class="row vert-margin-less">
			<div class="col-sm">
				<ul class="list-marker">
					<li>100% Polyester</li>
					<li>Lining:100% Viscose</li>
				</ul>
			</div>
			<div class="col-sm">
				<ul class="list-marker">
					<li>Do not dry clean</li>
					<li>Only non-chlorine</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="prd-progress prd-block_info_item" data-left-in-stock="">
		<div class="prd-progress-text">

			<?php 

				$status = $p->status;
				if($status=='In Stock')
				{


				?>
			Hurry Up! Left <span class="prd-progress-text-left js-stock-left">26</span> <img src="images/stock.png" height="35" width="100">

		<?php } 

		else {?>

				<span class="prd-progress-text-left js-stock-left"></span> <img src="images/soldout.png" height="35" width="100">

		<?php }

		?>


		</div>
		<div class="prd-progress-text-null"></div>
		<div class="prd-progress-bar-wrap progress">
			<div class="prd-progress-bar progress-bar active" data-stock="50, 10, 30, 25, 1000, 15000" style="width: 53%;"></div>
		</div>
	</div>
	<div class="prd-block_countdown js-countdown-wrap prd-block_info_item countdown-init">
		<div class="countdown-box-full-text w-md">
			<div class="row no-gutters align-items-center">
				<div class="col-sm-auto text-center">
					<div class="countdown js-countdown" data-countdown="2021/07/01"></div>
				</div>
				<div class="col">
					<div class="countdown-txt"> TIME IS RUNNING OUT!</div>
				</div>
			</div>
		</div>
	</div>
	<div class="prd-block_order-info prd-block_info_item " data-order-time="" data-locale="en">
		<i class="icon-box-2"></i>
		<div>Order in the next <span class="prd-block_order-info-time countdownCircleTimer" data-time="8:00:00, 15:30:00, 23:59:59"><span><span>04</span>:</span><span><span>46</span>:</span><span><span>24</span></span></span> to get it by <span data-date="">Tuesday, September 08, 2020</span></div>
	</div>
	<div class="prd-block_info_item prd-block_info-when-arrives d-none" data-when-arrives>
		<div class="prd-block_links prd-block_links m-0 d-inline-flex">
			<i class="icon-email-1"></i>
			<div><a href="#" data-follow-up="" data-name="Oversize Cotton Dress" class="prd-in-stock" data-src="#whenArrives">Inform me when the item arrives</a></div>
		</div>
	</div>
	<div class="prd-block_info-box prd-block_info_item">
		<div class="two-column"><p>Availability:
			<span class="prd-in-stock" data-stock-status=""><?php echo $p->status;?></span></p>
			<p class="prd-taxes">Tax Info:
				<span>Tax included.</span>
			</p>
			<p>Collection: <span> <a href="collections.php" data-toggle="tooltip" data-placement="top" data-original-title="View all"><?php echo $p->cate_name;?></a></span></p>
			<p>Sku: <span data-sku="">Nirav Patel-45812</span></p>
			<p>Vendor: <span>Banita</span></p>
			<p>Barcode: <span>314363563</span></p></div>
	</div>
	<div class="order-0 order-md-100">
		<form method="post" action="addtocart?btn_add_cart">
			<div class="prd-block_options">
				<div class="prd-color swatches">
					<div class="option-label">Color:</div>
					<select class="form-control hidden single-option-selector-modalQuickView" id="SingleOptionSelector-0" data-index="option1">
						<option value="Beige" selected="selected">Beige</option>
						<option value="Black">Black</option>
						<option value="Red">Red</option>
					</select>
					<ul class="images-list js-size-list" data-select-id="SingleOptionSelector-0">
						<li class="active">
							<a href="#" data-value="Beige" data-toggle="tooltip" data-placement="top" data-original-title="Beige"><span class="image-container image-container--product"><img src="../admin/images/prod_images/<?php echo $p->prod_img;?>" alt=""></span></a>
						<li>
						<li>
							<a href="#" data-value="Black" data-toggle="tooltip" data-placement="top" data-original-title="Black"><span class="image-container image-container--product"><img src="../admin/images/prod_images/<?php echo $p->prod_img;?>" alt=""></span></a>
						<li>
						<li>
							<a href="#" data-value="Red" data-toggle="tooltip" data-placement="top" data-original-title="Red"><span class="image-container image-container--product"><img src="../admin/images/prod_images/<?php echo $p->prod_img;?>" alt=""></span></a>
						</li>
					</ul>
				</div>
				<div class="prd-size swatches">
					<div class="option-label">Size:</div>
					<select class="form-control hidden single-option-selector-modalQuickView" id="SingleOptionSelector-1" data-index="option2">
						<option value="Small" selected="selected">Small</option>
						<option value="Medium">Medium</option>
						<option value="Large">Large</option>
					</select>
					<ul class="size-list js-size-list" data-select-id="SingleOptionSelector-1">
						<li class="active"><a href="#" data-value="Small"><span class="value">Small</span></a></li>
						<li><a href="#" data-value="Medium"><span class="value">Medium</span></a></li>
						<li><a href="#" data-value="Large"><span class="value">Large</span></a></li>
					</ul>
				</div>
			</div>
			<div class="prd-block_actions prd-block_actions--wishlist">
				<div class="prd-block_qty">
					<div class="qty qty-changer">
						<button class="decrease js-qty-button"></button>
						<input type="number" class="qty-input" name="prod_qty" value="1" data-min="1" data-max="5">
						<button class="increase js-qty-button"></button>
					</div>
				</div>
				<input type="hidden" name="prod_id" value="<?php echo $p->prod_id;?>">
				<div class="btn-wrap">
					<button  type="submit" class="btn btn--add-to-cart js-trigger-addtocart js-prd-addtocart" data-product='{"name":  "Leather Pegged Pants ",  "url ": "single-product",  "path ": "../admin/images/prod_images/<?php echo $p->prod_img;?>",  "aspect_ratio ": "0.78"}'>Add to cart</button>
				</div>
				<div class="btn-wishlist-wrap">
					<a href="#" class="btn-add-to-wishlist ml-auto btn-add-to-wishlist--add js-add-wishlist" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a>
					<a href="#" class="btn-add-to-wishlist ml-auto btn-add-to-wishlist--off js-remove-wishlist" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
				</div>
			</div>
		</form>
		<div class="prd-block_agreement prd-block_info_item order-0 order-md-100 text-right" data-agree>
			<input id="agreementCheckboxProductPage" class="js-agreement-checkbox" data-button=".shopify-payment-agree" name="agreementCheckboxProductPage" type="checkbox">
			<label for="agreementCheckboxProductPage"><a href="#" data-fancybox class="modal-info-link" data-src="#agreementInfo">I agree to the terms of service</a></label>
		</div>
	</div>

<?php }?>

	<div class="prd-block_info_item">
		<ul class="prd-block_links list-unstyled">
			<li><i class="icon-size-guide"></i><a href="#" data-fancybox class="modal-info-link" data-src="#sizeGuide">Size Guide</a></li>
			<li><i class="icon-delivery-1"></i><a href="#" data-fancybox class="modal-info-link" data-src="#deliveryInfo">Delivery and Return</a></li>
			<li><i class="icon-email-1"></i><a href="#" data-fancybox class="modal-info-link" data-src="#contactModal">Ask about this product</a></li>
		</ul>
		<div id="sizeGuide" style="display: none;" class="modal-info-content modal-info-content-lg">
			<div class="modal-info-heading">
				<div class="mb-1"><i class="icon-size-guide"></i></div>
				<h2>Size Guide</h2>
			</div>
			<div class="table-responsive">
				<table class="table table-striped table-borderless text-center">
					<thead>
					<tr>
						<th>USA</th>
						<th>UK</th>
						<th>France</th>
						<th>Japanese</th>
						<th>Bust</th>
						<th>Waist</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>4</td>
						<td>8</td>
						<td>36</td>
						<td>7</td>
						<td>32"</td>
						<td>61 cm</td>
					</tr>
					<tr>
						<td>6</td>
						<td>10</td>
						<td>38</td>
						<td>11</td>
						<td>34"</td>
						<td>67 cm</td>
					</tr>
					<tr>
						<td>8</td>
						<td>12</td>
						<td>40</td>
						<td>15</td>
						<td>36"</td>
						<td>74 cm</td>
					</tr>
					<tr>
						<td>10</td>
						<td>14</td>
						<td>42</td>
						<td>17</td>
						<td>38"</td>
						<td>79 cm</td>
					</tr>
					<tr>
						<td>12</td>
						<td>16</td>
						<td>44</td>
						<td>21</td>
						<td>40"</td>
						<td>84 cm</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div id="deliveryInfo" style="display: none;" class="modal-info-content modal-info-content-lg">
			<div class="modal-info-heading">
				<div class="mb-1"><i class="icon-delivery-1"></i></div>
				<h2>Delivery and Return</h2>
			</div>
			<br>
			<h5>Our parcel courier service</h5>
			<p>Nirav Patel is proud to offer an exceptional international parcel shipping service. It is straightforward and very easy to organise international parcel shipping. Our customer service team works around the clock to make sure that you receive high quality courier service from start to finish.</p>
			<p>Sending a parcel with us is simple. To start the process you will first need to get a quote using our free online quotation service. From this, you’ll be able to navigate through the online form to book a collection date for your parcel, selecting a shipping day suitable for you.</p>
			<br>
			<h5>Shipping Time</h5>
			<p>The shipping time is based on the shipping method you chose.<br>
				EMS takes about 5-10 working days for delivery.<br>
				DHL takes about 2-5 working days for delivery.<br>
				DPEX takes about 2-8 working days for delivery.<br>
				JCEX takes about 3-7 working days for delivery.<br>
				China Post Registered Mail takes 20-40 working days for delivery.</p>
		</div>
		<div id="contactModal" style="display: none;" class="modal-info-content modal-info-content-sm">
			<div class="modal-info-heading">
				<div class="mb-1"><i class="icon-envelope"></i></div>
				<h2>Have a question?</h2>
			</div>
			<form method="post" action="#" id="contactForm" class="contact-form">
				<div class="form-group">
					<input type="text" name="contact[name]" class="form-control form-control--sm" placeholder="Name">
				</div>
				<div class="form-group">
					<input type="text" name="contact[email]" class="form-control form-control--sm" placeholder="Email" required="">
				</div>
				<div class="form-group">
					<input type="text" name="contact[phone]" class="form-control form-control--sm" placeholder="Phone Number">
				</div>
				<div class="form-group">
					<textarea class="form-control textarea--height-170" name="contact[body]" placeholder="Message" required="">Hi! I need next info about the "Oversize Cotton Dress":</textarea>
				</div>
				<button class="btn" type="submit">Ask our consultant</button>
				<p class="p--small mt-15 mb-0">and we will contact you soon</p><input name="recaptcha-v3-token" type="hidden" value="03AGdBq27T8WvzvZu79QsHn8lp5GhjNX-w3wkcpVJgCH15Ehh0tu8c9wTKj4aNXyU0OLM949jTA4cDxfznP9myOBw9m-wggkfcp1Cv_vhsi-TQ9E_EbeLl33dqRhp2sa5tKBOtDspTgwoEDODTHAz3nuvG28jE7foIFoqGWiCqdQo5iEphqtGTvY1G7XgWPAkNPnD0B9V221SYth9vMazf1mkYX3YHAj_g_6qhikdQDsgF2Sa2wOcoLKWiTBMF6L0wxdwhIoGFz3k3VptYem75sxPM4lpS8Y_UAxfvF06fywFATA0nNH0IRnd5eEPnnhJuYc5LYsV6Djg7_S4wLBmOzYnahC-S60MHvQFf-scQqqhPWOtgEKPihUYiGFBJYRn2p1bZwIIhozAgveOtTNQQi7FGqmlbKkRWCA"></form>
		</div>
	</div>
	<div class="prd-block_info_item">
		<img class="img-responsive lazyload d-none d-sm-block" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/payment/safecheckout.png" alt="">
		<img class="img-responsive lazyload d-sm-none" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/payment/safecheckout-m.png" alt="">
	</div>
</div>
			</div>
		</div>
	</div>
</div>
<div class="holder mt-1 mt-md-5">
	<div class="container">
<ul class="nav nav-tabs product-tab">
	<li class="nav-item"><a href="#Tab1" class="nav-link" data-toggle="tab">Description
		<span class="toggle-arrow"><span></span><span></span></span>
	</a></li>
	<li class="nav-item"><a href="#Tab2" class="nav-link" data-toggle="tab">Sizing Guide
		<span class="toggle-arrow"><span></span><span></span></span>
	</a></li>
	<li class="nav-item"><a href="#Tab3" class="nav-link" data-toggle="tab">Global Tab
		<span class="toggle-arrow"><span></span><span></span></span>
	</a></li>
	<li class="nav-item"><a href="#Tab4" class="nav-link" data-toggle="tab">Assigned Tags
		<span class="toggle-arrow"><span></span><span></span></span>
	</a></li>
	<li class="nav-item"><a href="#Tab5" class="nav-link" data-toggle="tab">Reviews
		<span class="toggle-arrow"><span></span><span></span></span>
	</a></li>
</ul>
<div class="tab-content">
	<div role="tabpanel" class="tab-pane fade" id="Tab1">
		<h4 class="mb-15">Give you a complete account of the system</h4>
		<div class="row">
			<div class="col-18 mb-2"><p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure.</p></div>
			<div class="col-md-12">
				<p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. Nor again is there anyone who loves or pursues.</p>
				<div class="mt-2"></div>
				<h4>List heading</h4>
				<div class="row">
					<div class="col-sm-9">
						<ul class="list-unstyled list-smaller">
							<li>1. All this mistaken idea of denouncing pleasure</li>
							<li>2. Raising pain was born and I will give you</li>
							<li>3. Complete account of the system</li>
						</ul>
					</div>
					<div class="col-sm-9 mt-15 mt-sm-0">
						<ul class="list-unstyled list-smaller">
							<li>4. All this mistaken idea of denouncing pleasure</li>
							<li>5. Raising pain was born and I will give you</li>
							<li>6. Complete account of the system</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-6"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/product-description-02.png" alt="" class="lazyload"></div>
		</div>
		<div class="row mt-2 align-items-center">
			<div class="col-md-6"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="images/product-description-01.png" alt="" class="lazyload"></div>
			<div class="col-md-12">
				<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. </p>
				<p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure</p>
			</div>
		</div>
	</div>
	<div role="tabpanel" class="tab-pane fade" id="Tab2">
		<h3>Single Size Conversion</h3>
		<table class="table table-striped">
			<tr>
				<th scope="row">US Sizes</th>
				<td>6</td>
				<td>6,5</td>
				<td>7</td>
				<td>7,5</td>
				<td>8</td>
				<td>8,5</td>
				<td>9</td>
				<td>9,5</td>
				<td>10</td>
				<td>10,5</td>
			</tr>
			<tr>
				<th scope="row">Euro Sizes</th>
				<td>39</td>
				<td>39</td>
				<td>40</td>
				<td>40-41</td>
				<td>41</td>
				<td>41-42</td>
				<td>42</td>
				<td>42-43</td>
				<td>43</td>
				<td>43-44</td>
			</tr>
			<tr>
				<th scope="row">UK Sizes</th>
				<td>5,5</td>
				<td>6</td>
				<td>6,5</td>
				<td>7</td>
				<td>7,5</td>
				<td>8</td>
				<td>8,5</td>
				<td>9</td>
				<td>9,5</td>
				<td>10</td>
			</tr>
			<tr>
				<th scope="row">Inches</th>
				<td>9.25&quot;</td>
				<td>9.5&quot;</td>
				<td>9.625&quot;</td>
				<td>9.75&quot;</td>
				<td>9.9375&quot;</td>
				<td>10.125&quot;</td>
				<td>10.25&quot;</td>
				<td>10.5&quot;</td>
				<td>10.625&quot;</td>
				<td>10.75&quot;</td>
			</tr>
			<tr>
				<th scope="row">CM</th>
				<td>23,5</td>
				<td>24,1</td>
				<td>24,4</td>
				<td>24,8</td>
				<td>25,4</td>
				<td>25,7</td>
				<td>26</td>
				<td>26,7</td>
				<td>27</td>
				<td>27,3</td>
			</tr>
		</table>
	</div>
	<div role="tabpanel" class="tab-pane fade" id="Tab3">
		<h3>Take a trivial example which of us ever undertakes</h3>
		<p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but
			because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take
			a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage
			from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying
			consequences, or one who avoids a pain that produces no resultant pleasure </p>
		<div class="mt-3"></div>
		<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was
			born and I will give you a complete account of the system, and expound the actual teachings of the
			great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or
			avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue
			pleasure rationally encounter consequences that are extremely painful</p>
		<ul class="list-marker">
			<li>Nam liberempore</li>
			<li>Cumsoluta nobisest</li>
			<li>Eligendptio cumque</li>
			<li>Nam liberempore</li>
			<li>Cumsoluta nobisest</li>
		</ul>
	</div>
	<div role="tabpanel" class="tab-pane fade" id="Tab4">
		<ul class="tags-list">
			<li><a href="#">Jeans</a></li>
			<li><a href="#">St.Valentine’s gift</a></li>
			<li><a href="#">Sunglasses</a></li>
			<li><a href="#">Discount</a></li>
			<li><a href="#">Maxi dress</a></li>
			<li><a href="#">Underwear</a></li>
			<li><a href="#">men accessories</a></li>
			<li><a href="#">hand bags</a></li>
			<li><a href="#">Jeans</a></li>
			<li><a href="#">St.Valentine’s gift</a></li>
			<li><a href="#">Sunglasses</a></li>
			<li><a href="#">Discount</a></li>
			<li><a href="#">Maxi dress</a></li>
			<li><a href="#">Underwear</a></li>
			<li><a href="#">men accessories</a></li>
			<li><a href="#">hand bags</a></li>
			<li><a href="#">Discount</a></li>
			<li><a href="#">Jeans</a></li>
		</ul>
		<h3>Add your tag</h3>
		<form class="form--simple" action="#">
			<label>Tag<span class="required">*</span></label>
			<input class="form-control form-control--sm">
			<button class="btn btn--md">Submit Tag</button>
			<div class="required-text">* Required Fields</div>
		</form>
	</div>
	<div role="tabpanel" class="tab-pane fade" id="Tab5">
		<div id="productReviews">
			<div class="row align-items-center">
	<div class="col"><h2>CUSTOMER REVIEWS</h2></div>
	<div class="col-18 col-md-auto mb-3 mb-md-0"><a href="#" class="review-write-link"><i class="icon-pencil"></i>Write review</a></div>
</div>
<div id="productReviewsBottom">
	<div class="review-item">
		<div class="review-item_rating">
			<i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i>
		</div>
		<div class="review-item_top row align-items-center">
			<div class="col"><h5 class="review-item_author">Jaden Ngo on May 25, 2018</h5></div>
			<div class="col-auto"><a href="#" class="review-item_report">Report as Inappropriate</a></div>
		</div>
		<div class="review-item_content">
			<h4>Good ball and company</h4>
			<p>I recently bought this ball and this is the first ball that I actually buy based on quality and material, I always been playing my friend ball and one of them recommended me this, read some review online and decided to buy it, the ball feel sticky at first but quality is nice and the hand wrote letter was awesome because it shows how much season creator actually care about their customers.</p>
		</div>
	</div>
	<div class="review-item">
		<div class="review-item_rating">
			<i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i>
		</div>
		<div class="review-item_top row align-items-center">
			<div class="col"><h5 class="review-item_author">Jaden Ngo on May 25, 2018</h5></div>
			<div class="col-auto"><a href="#" class="review-item_report">Report as Inappropriate</a></div>
		</div>
		<div class="review-item_content">
			<h4>Good ball and company</h4>
			<p>I recently bought this ball and this is the first ball that I actually buy based on quality and material, I always been playing my friend ball and one of them recommended me this, read some review online and decided to buy it, the ball feel sticky at first but quality is nice and the hand wrote letter was awesome because it shows how much season creator actually care about their customers.</p>
		</div>
	</div>
	<div class="review-item">
		<div class="review-item_rating">
			<i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i>
		</div>
		<div class="review-item_top row align-items-center">
			<div class="col"><h5 class="review-item_author">Jaden Ngo on May 25, 2018</h5></div>
			<div class="col-auto"><a href="#" class="review-item_report">Report as Inappropriate</a></div>
		</div>
		<div class="review-item_content">
			<h4>Good ball and company</h4>
			<p>I recently bought this ball and this is the first ball that I actually buy based on quality and material, I always been playing my friend ball and one of them recommended me this, read some review online and decided to buy it, the ball feel sticky at first but quality is nice and the hand wrote letter was awesome because it shows how much season creator actually care about their customers.</p>
		</div>
	</div>
	<div class="review-item">
		<div class="review-item_rating">
			<i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i>
		</div>
		<div class="review-item_top row align-items-center">
			<div class="col"><h5 class="review-item_author">Jaden Ngo on May 25, 2018</h5></div>
			<div class="col-auto"><a href="#" class="review-item_report">Report as Inappropriate</a></div>
		</div>
		<div class="review-item_content">
			<h4>Good ball and company</h4>
			<p>I recently bought this ball and this is the first ball that I actually buy based on quality and material, I always been playing my friend ball and one of them recommended me this, read some review online and decided to buy it, the ball feel sticky at first but quality is nice and the hand wrote letter was awesome because it shows how much season creator actually care about their customers.</p>
		</div>
	</div>
	<div class="review-item">
		<div class="review-item_rating">
			<i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i>
		</div>
		<div class="review-item_top row align-items-center">
			<div class="col"><h5 class="review-item_author">Jaden Ngo on May 25, 2018</h5></div>
			<div class="col-auto"><a href="#" class="review-item_report">Report as Inappropriate</a></div>
		</div>
		<div class="review-item_content">
			<h4>Good ball and company</h4>
			<p>I recently bought this ball and this is the first ball that I actually buy based on quality and material, I always been playing my friend ball and one of them recommended me this, read some review online and decided to buy it, the ball feel sticky at first but quality is nice and the hand wrote letter was awesome because it shows how much season creator actually care about their customers.</p>
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
		<div class="title-wrap text-center">
			<h2 class="h1-style">You may also like</h2>
			<div class="carousel-arrows carousel-arrows--center"></div>
		</div>
		<div class="prd-grid prd-carousel js-prd-carousel slick-arrows-aside-simple slick-arrows-mobile-lg data-to-show-4 data-to-show-md-3 data-to-show-sm-3 data-to-show-xs-2"
			 data-slick='{"slidesToShow": 4, "slidesToScroll": 2, "responsive": [{"breakpoint": 992,"settings": {"slidesToShow": 3, "slidesToScroll": 1}},{"breakpoint": 768,"settings": {"slidesToShow": 2, "slidesToScroll": 1}},{"breakpoint": 480,"settings": {"slidesToShow": 2, "slidesToScroll": 1}}]}'>

			 <?php foreach($prod_arrX as $p)

			 {

			 ?>
			<div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
						<div class="prd-inside">
							<div class="prd-img-area">
								<a href="product" class="prd-img image-hover-scale image-container">
									<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/prod_images/<?php echo $p->prod_img;?>" alt="Midi Dress" class="js-prd-img lazyload fade-up">
									<div class="Nirav Patel-loader"></div>
									<div class="prd-big-squared-labels">
									</div>
								</a>
								<div class="prd-circle-labels">

												<form  action="addtowish?btn_add_wish" method="post">
					<input type="hidden" name="prod_id" value="<?php echo $p->prod_id;?>">
					<input type="hidden" name="prod_qty" value="1">

				<button type="submit" name="" value="" class="btn" title="Add to Wishlist" style="  padding: 8px;border-radius: 50%;"><i class="icon-heart-stroke"></i></button>
				

				</form>


									
									<a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.php"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
									<div class="colorswatch-label colorswatch-label--variants js-prd-colorswatch">
										<i class="icon-palette"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></i>
										<ul>
											<li data-image="../admin/images/prod_images/<?php echo $p->prod_img;?>"><a class="js-color-toggle" data-toggle="tooltip" data-placement="left" title="Color Name"><img src="images/colorswatch/color-grey.png" alt=""></a></li>
											<li data-image="../admin/images/prod_images/<?php echo $p->prod_img;?>"><a class="js-color-toggle" data-toggle="tooltip" data-placement="left" title="Color Name"><img src="images/colorswatch/color-green.png" alt=""></a></li>
											<li data-image="../admin/images/prod_images/<?php echo $p->prod_img;?>"><a class="js-color-toggle" data-toggle="tooltip" data-placement="left" title="Color Name"><img src="images/colorswatch/color-black.png" alt=""></a></li>
										</ul>
									</div>
								</div>
								<ul class="list-options color-swatch">
									<li data-image="../admin/images/prod_images/<?php echo $p->prod_img;?>" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/prod_images/<?php echo $p->prod_img;?>" class="lazyload fade-up" alt="Color Name"></a></li>
									<li data-image="../admin/images/prod_images/<?php echo $p->prod_img;?>"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/prod_images/<?php echo $p->prod_img;?>" class="lazyload fade-up" alt="Color Name"></a></li>
									<li data-image="../admin/images/prod_images/<?php echo $p->prod_img;?>"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/prod_images/<?php echo $p->prod_img;?>" class="lazyload fade-up" alt="Color Name"></a></li>
								</ul>
							</div>

							<div class="prd-info">
								<div class="prd-info-wrap">
									<div class="prd-info-top">
										<div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
									</div>
									<div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
									<div class="prd-tag"><a href="#"><?php echo $p->prod_name;?></a></div>
									<h2 class="prd-title"><a href="product"><?php echo $p->cate_name;?></a></h2>
									<div class="prd-description">
										<?php echo $p->prod_description;?>
									</div>
									<div class="prd-action">
										<form>

											
											<button class="btn js-prd-addtocart" data-product='{"name": "Midi Dress", "path":"../admin/images/prod_images/<?php echo $p->prod_img;?>", "url":"product", "aspect_ratio":0.778}' >Add To Cart</button>
										</form>
									</div>
								</div>
								<div class="prd-hovers">
									<div class="prd-circle-labels">
										<div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
										<div class="prd-hide-mobile"><a href="#" class="circle-label-qview js-prd-quickview" data-src="ajax/ajax-quickview.php"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
									</div>
									<div class="prd-price">
										<div class="price-new"><span style="font-weight: bold;">INR</span> <?php echo $p->prod_price;?></div>
									</div>
									<div class="prd-action">
										<div class="prd-action-left">
											<form  action="addtocart?btn_add_cart" method="post">
												<input type="hidden" name="prod_id" value="<?php echo $p->prod_id;?>">
												<input type="hidden" name="prod_qty" value="1">
												<button class="btn js-prd-addtocart" data-product='{"name": "Midi Dress", "path":"../admin/images/prod_images/<?php echo $p->prod_img;?>", "url":"product", "aspect_ratio":0.778}' type="submit">Add To Cart</button>
											</form>
										</div>
									</div>
								</div>
							</div>

						</div>
			</div>

		<?php }?>


		</div>
	</div>
</div>




</div>

<?php include_once 'footer.php';?>