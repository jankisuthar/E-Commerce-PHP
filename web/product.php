
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
	<div class="holder breadcrumbs-wrap mt-0">
	<div class="container">
		<ul class="breadcrumbs">
			<li><a href="index.html">Home</a></li>
			<li><span>Category</span></li>
		</ul>
	</div>
</div>
	<div class="holder holder-mt-medium">
	<div class="container">
		<div class="row bnr-grid vert-margin-small">
	<?php foreach($cate_arr as $c){ ?>
			
			<div class="col-18 col-sm-6"><a href="product?btn_cat_id=<?php echo $c->cate_id;?>" target="_self" class="bnr-wrap">
				<div class="bnr custom-caption image-hover-scale bnr--middle bnr--center" data-fontratio="5.7">
					<div class="bnr-img  image-container" style="padding-bottom: 68.22%">
						<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/cate_images/<?php echo $c->cate_img;?>" class="lazyload fade-up" alt="Banner" height="384px" width="564px"></div>
						<div class="bnr-caption">
							<div class="bnr-caption-bg bnr-caption-bg--padding">
								<div class="bnr-text11 mt-sm order-2 inherit"><?php echo $c->cate_name?></div>
								<span class="bnr-caption-bg-color"></span>
							</div>

						</div>



						
				</div>
			</a>
			</div>
			<?php } ?>
			<!--<div class="col-18 col-sm-6"><a href="category.html" target="_self" class="bnr-wrap">
				<div class="bnr custom-caption image-hover-scale bnr--middle bnr--center" data-fontratio="5.7">
					<div class="bnr-img  image-container" style="padding-bottom: 68.22%">
						<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/skins/fashion/banner-category-04.webp" class="lazyload fade-up" alt="Banner"></div>
					<div class="bnr-caption">
						<div class="bnr-caption-bg bnr-caption-bg--padding">
							<div class="bnr-text11 mt-sm order-2 inherit">Women</div>
							<span class="bnr-caption-bg-color"></span></div>
					</div>
				</div>
			</a>
			</div>
			<div class="col-18 col-sm-6"><a href="category.html" target="_self" class="bnr-wrap">
				<div class="bnr custom-caption image-hover-scale bnr--middle bnr--center" data-fontratio="5.7">
					<div class="bnr-img  image-container" style="padding-bottom: 68.22%">
						<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/skins/fashion/banner-category-05.webp" class="lazyload fade-up" alt="Banner"></div>
						<div class="bnr-caption">
							<div class="bnr-caption-bg bnr-caption-bg--padding">
								<div class="bnr-text11 mt-sm order-2 inherit">Accessories</div>
								<span class="bnr-caption-bg-color"></span>
							</div>
						</div>
				</div>
			</a>
			</div>-->
		</div>
	</div>
</div>
	<div class="holder">
	<div class="container">

	


<div class="page-title text-center">
<a href="product"><h1>All <?php echo $fetch->cate_name;?> Products</h1></a>
						</div>



		

					

		<div class="row">
			<div class="col-lg-4 aside aside--left filter-col filter-mobile-col filter-col--sticky js-filter-col" data-grid-tab-content>
				<div class="filter-col-content filter-mobile-content">
	<div class="sidebar-block">
		<div class="sidebar-block_title">
			<span>Current selection</span>
		</div>
		<div class="sidebar-block_content">
			<div class="selected-filters-wrap">
				<ul class="selected-filters">
					<li><a href="#">Grey</a></li>
					<li><a href="#">Men</a></li>
					<li><a href="#">Above $200</a></li>
				</ul>
				<div class="d-flex flex-wrap align-items-center">
					<a href="#" class="clear-filters"><span>Clear All</span></a>
					<div class="selected-filters-count ml-auto d-none d-lg-block">Selected <span>6 items</span></div>
				</div>
			</div>
		</div>
	</div>
	<div class="sidebar-block d-filter-mobile">
		<h3 class="mb-1">SORT BY</h3>
		<div class="select-wrapper select-wrapper-xs">
			<select class="form-control">
				<option value="featured">Featured</option>
				<option value="rating">Rating</option>
				<option value="price">Price</option>
			</select>
		</div>
	</div>
	<div class="sidebar-block filter-group-block open">
		<div class="sidebar-block_title">
			<span>Categories</span>
			<span class="toggle-arrow"><span></span><span></span></span>
		</div>
		<div class="sidebar-block_content">
			<ul class="category-list">
				<li class="active"><a href="category.html" title="Casual" class="open">Casual&nbsp;<span>(30)</span></a>
					<div class="toggle-category js-toggle-category"><span><i class="icon-angle-down"></i></span></div>
					<ul class="category-list category-list">
						<li><a href="category.html" title="Men">Men&nbsp;<span>(10)</span></a></li>
						<li><a href="category.html" title="Women">Women&nbsp;<span>(10)</span></a></li>
						<li><a href="category.html" title="Accessories">Accessories&nbsp;<span>(10)</span></a></li>
					</ul>
				</li>
				<li><a href="category.html" title="T-Shirts" class="open">T-Shirts</a></li>
				<li><a href="category.html" title="Medical" class="open">Medical</a></li>
				<li><a href="category.html" title="FoodMarket" class="open">FoodMarket</a></li>
				<li><a href="category.html" title="Bikes" class="open">Bikes&nbsp;<span>(12)</span></a></li>
				<li><a href="category.html" title="Cosmetics" class="open">Cosmetics&nbsp;<span>(16)</span></a></li>
				<li><a href="category.html" title="Fishing" class="open">Fishing&nbsp;<span>(20)</span></a></li>
				<li><a href="category.html" title="Electronics" class="open">Electronics&nbsp;<span>(15)</span></a></li>
				<li><a href="category.html" title="Games" class="open">Games&nbsp;<span>(14)</span></a></li>
			</ul>
		</div>
	</div>
	<div class="sidebar-block filter-group-block collapsed">
		<div class="sidebar-block_title">
			<span>Colors</span>
			<span class="toggle-arrow"><span></span><span></span></span>
		</div>
		<div class="sidebar-block_content">
			<ul class="color-list two-column">
				<li class="active"><a href="#" data-tooltip="Dark Red" title="Dark Red"><span class="value"><img
						src="../admin/images/colorswatch/color-red.webp" alt=""></span><span
						class="colorname">Red (87)</span></a></li>
				<li><a href="#" data-tooltip="Pink" title="Pink"><span class="value"><img
						src="../admin/images/colorswatch/color-pink.webp" alt=""></span><span
						class="colorname">Pink (95)</span></a></li>
				<li><a href="#" data-tooltip="Violet" title="Violet"><span class="value"><img
						src="../admin/images/colorswatch/color-violet.webp" alt=""></span><span
						class="colorname">Violet (18)</span></a></li>
				<li><a href="#" data-tooltip="Blue" title="Blue"><span class="value"><img
						src="../admin/images/colorswatch/color-blue.webp" alt=""></span><span
						class="colorname">Blue (78)</span></a></li>
				<li><a href="#" data-tooltip="Marine" title="Marine"><span class="value"><img
						src="../admin/images/colorswatch/color-marine.webp" alt=""></span><span
						class="colorname">Marine (45)</span></a></li>
				<li><a href="#" data-tooltip="Orange" title="Orange"><span class="value"><img
						src="../admin/images/colorswatch/color-orange.webp" alt=""></span><span
						class="colorname">Orange (96)</span></a></li>
				<li><a href="#" data-tooltip="Yellow" title="Yellow"><span class="value"><img
						src="../admin/images/colorswatch/color-yellow.webp" alt=""></span><span
						class="colorname">Yellow (55)</span></a></li>
				<li><a href="#" data-tooltip="Dark Yellow" title="Dark Yellow"><span
						class="value"><img src="../admin/images/colorswatch/color-darkyellow.webp" alt=""></span><span
						class="colorname">Dark Yellow (2)</span></a></li>
				<li><a href="#" data-tooltip="Black"
					   title="Black"><span class="value"><img
						src="../admin/images/colorswatch/color-black.webp" alt=""></span><span
						class="colorname">Black (15)</span></a></li>
				<li><a href="#" data-tooltip="White" title="White"><span class="value"><img
						src="../admin/images/colorswatch/color-white.webp" alt=""></span><span
						class="colorname">White (58)</span></a></li>
			</ul>
		</div>
	</div>
	<div class="sidebar-block filter-group-block collapsed">
		<div class="sidebar-block_title">
			<span>Size</span>
			<span class="toggle-arrow"><span></span><span></span></span>
		</div>
		<div class="sidebar-block_content">
			<ul class="category-list two-column size-list" data-sort='["XXS","XS","S","M","L","XL","XXL","XXXL"]'>
				<li data-value="L" class="active"><a href="#">L</a></li>
				<li data-value="XL"><a href="#">XL</a></li>
				<li data-value="XXS"><a href="#">XXS</a></li>
				<li data-value="XS"><a href="#">XS</a></li>
				<li data-value="S"><a href="#">S</a></li>
				<li data-value="XXL"><a href="#">XXL</a></li>
				<li data-value="XXXL"><a href="#">XXXL</a></li>
			</ul>
		</div>
	</div>
	<div class="sidebar-block filter-group-block collapsed">
		<div class="sidebar-block_title">
			<span>Brands</span>
			<span class="toggle-arrow"><span></span><span></span></span>
		</div>
		<div class="sidebar-block_content">
			<ul class="category-list">
				<li><a href="#">Adidas</a></li>
				<li><a href="#">Nike</a></li>
				<li class="active"><a href="#">Reebok</a></li>
				<li><a href="#">Ralph Lauren</a></li>
				<li><a href="#">Delpozo</a></li>
			</ul>
		</div>
	</div>
	<div class="sidebar-block filter-group-block collapsed">
		<div class="sidebar-block_title">
			<span>Price</span>
			<span class="toggle-arrow"><span></span><span></span></span>
		</div>
		<div class="sidebar-block_content">
			<ul class="category-list">
				<li><a href="#">$100-$200</a></li>
				<li class="active"><a href="#">Above $200</a></li>
				<li><a href="#">Under $100</a></li>
			</ul>
		</div>
	</div>
	<div class="sidebar-block filter-group-block collapsed">
		<div class="sidebar-block_title">
			<span>Popular tags</span>
			<span class="toggle-arrow"><span></span><span></span></span>
		</div>
		<div class="sidebar-block_content">
			<ul class="tags-list">
				<li class="active"><a href="#">Jeans</a></li>
				<li><a href="#">St.Valentine’s gift</a></li>
				<li><a href="#">Sunglasses</a></li>
				<li><a href="#">Discount</a></li>
				<li><a href="#">Maxi dress</a></li>
			</ul>
		</div>
	</div>
	<a href="https://bit.ly/3eJX5XE" class="bnr image-hover-scale bnr--bottom bnr--left" data-fontratio="3.95">
		<div class="bnr-img">
			<img src="../admin/images/banners/banner-collection-aside.webp" alt="">
		</div>
	</a>
</div>
			</div>
			<!--<div class="filter-toggle js-filter-toggle">
				<div class="loader-horizontal js-loader-horizontal">
					<div class="progress">
						<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%"></div>
					</div>
				</div>
				<span class="filter-toggle-icons js-filter-btn"><i class="icon-filter"></i><i class="icon-filter-close"></i></span>
				<span class="filter-toggle-text"><a href="#" class="filter-btn-open js-filter-btn">REFINE & SORT</a><a href="#" class="filter-btn-close js-filter-btn">RESET</a><a href="#" class="filter-btn-apply js-filter-btn">APPLY & CLOSE</a></span>
			</div>-->
			<div class="col-lg aside">
				<div class="prd-grid-wrap">
<div class="prd-grid product-listing data-to-show-4 data-to-show-md-3 data-to-show-sm-2 js-category-grid" data-grid-tab-content>
	


<?php foreach ($prod_arr as $p) { ?>





	

<div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
	<div class="prd-inside">
		<div class="prd-img-area">
			<a href="single-product?single_pro=<?php echo $p->prod_id;?>" class="prd-img image-hover-scale image-container">
				<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/prod_images/<?php echo $p->prod_img;?>" alt="<?php echo $p->prod_name;?>" class="js-prd-img lazyload fade-up">
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

				
				<a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
				<div class="colorswatch-label colorswatch-label--variants js-prd-colorswatch">
					<i class="icon-palette"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></i>
					<ul>
						<li data-image="../admin/images/prod_images/<?php echo $p->prod_img;?>"><a class="js-color-toggle" data-toggle="tooltip" data-placement="left" title="Color Name"><img src="../admin/images/colorswatch/color-orange.webp" alt=""></a></li>
						<li data-image="../admin/images/prod_images/<?php echo $p->prod_img;?>"><a class="js-color-toggle" data-toggle="tooltip" data-placement="left" title="Color Name"><img src="../admin/images/colorswatch/color-red.webp" alt=""></a></li>
						<li data-image="../admin/images/prod_images/<?php echo $p->prod_img;?>"><a class="js-color-toggle" data-toggle="tooltip" data-placement="left" title="Color Name"><img src="../admin/images/colorswatch/color-yellow.webp" alt=""></a></li>
					</ul>
				</div>
			</div>
		
		</div>
		<div class="prd-info">
			<div class="prd-info-wrap">
				<div class="prd-info-top">
					<div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
				</div>
				<div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i>
				</div>
				<div class="prd-tag">

					<a href="#">

						<?php 

							$status = $p->status;

							if($status=='In Stock')
							{

						?>


					<img src="images/stock.png" height="35" width="100">

						<?php }

						else
						{?>
							<img src="images/soldout.png" height="35" width="100">

						<?php }

						 ?>
					</a>


				</div>
				<h2 class="prd-title"><a href="product"><?php echo $p->prod_name;?></a></h2>
				<div class="prd-description">
					Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
				</div>
				<div class="prd-action">
					<form action="#">
						<a href="#" class="btn js-prd-addtocart" data-product='{"name": "Oversize Cotton Dress", "path":"../admin/images/prod_images/product-02-1.webp", "url":"product", "aspect_ratio":0.778}'>Add To Cart</a>
					</form>
				</div>
			</div>
			<div class="prd-hovers">
				<div class="prd-circle-labels">
					<div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
					<div class="prd-hide-mobile"><a href="#" class="circle-label-qview js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
				</div>
				<div class="prd-price">
					<div class="price-new">INR <?php echo $p->prod_price;?></div>
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


<?php }
	?>

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