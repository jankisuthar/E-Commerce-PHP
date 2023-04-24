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

	<script>
    $(document).ready(function(){
        $("input[type='button']").click(function(){

        	var radioValue = $("input[name='radio2']:checked").val();
            if(radioValue=="Paytm"){
                alert("You have been now redirect to - " + radioValue + "Merchant page");
                window.location = 'paytm_payment';
            }

            if(radioValue=="Other"){
                alert("You have been now redirct to - " + radioValue + "Merchant page");
                window.location = 'other_payment';
            }
        });
    });
</script>



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
			


			<?php	}

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
			<li><a href="index.php">Home</a></li>
			<li><span>Checkout</span></li>
		</ul>
	</div>
</div>
	<div class="holder">
	<div class="container">
		<h1 class="text-center">Checkout page</h1>
		<div class="row">
			<div class="col-md-9">
				<div class="card">
					<div class="card-body">
						<h2>Shipping Address</h2>



						<!--<p><a href="account-create.php">Login</a> or <a href="account-create.php">Register</a> for faster payment.</p>-->

						<?php if(!empty($cust)) 
						{
							
							

						?>
						<div class="row mt-2">
							<div class="col-sm-9">
								<label>First Name:</label>
								<div class="form-group">
									<input type="text" class="form-control form-control--sm" value="<?php echo $cust->cust_fname;?>" readonly>
								</div>
							</div>
							<div class="col-sm-9">
								<label>Last Name:</label>
								<div class="form-group">
									<input type="text" class="form-control form-control--sm" value="<?php echo $cust->cust_lname;?>" readonly>
								</div>
							</div>
						</div>
						<!--
						<div class="mt-2"></div>
						<label>Country:</label>
						<div class="form-group select-wrapper">
							<select class="form-control form-control--sm">
								<option value="United States">United States</option>
								<option value="Canada">Canada</option>
								<option value="China">China</option>
								<option value="India">India</option>
								<option value="Italy">Italy</option>
								<option value="Mexico">Mexico</option>
							</select>
						</div>
						<div class="row">
							<div class="col-sm-9">
								<label>State:</label>
								<div class="form-group select-wrapper">
									<select class="form-control form-control--sm">
										<option value="AL">Alabama</option>
										<option value="AK">Alaska</option>
										<option value="AZ">Arizona</option>
										<option value="AR">Arkansas</option>
										<option value="CA">California</option>
										<option value="CO">Colorado</option>
										<option value="CT">Connecticut</option>
										<option value="DE">Delaware</option>
										<option value="DC">District Of Columbia</option>
										<option value="FL">Florida</option>
										<option value="GA">Georgia</option>
										<option value="HI">Hawaii</option>
										<option value="ID">Idaho</option>
										<option value="IL">Illinois</option>
										<option value="IN">Indiana</option>
										<option value="IA">Iowa</option>
										<option value="KS">Kansas</option>
										<option value="KY">Kentucky</option>
										<option value="LA">Louisiana</option>
									</select>
								</div>
							</div>
							<div class="col-sm-9">
								<label>zip/postal code:</label>
								<div class="form-group">
									<input type="text" class="form-control form-control--sm">
								</div>
							</div>
						</div>-->


						<div class="mt-2"></div>
						<label>Address 1:</label>
						<div class="form-group">
							<input type="text" class="form-control form-control--sm" value="<?php echo $cust->cust_address;?>" readonly>
						</div>

						<form>
  <fieldset>
   
    <p>
      <label>Home Address:<br/>
        <textarea name="homeaddress" id="homeaddress" rows="5" cols="100%" class="form-control form-control--sm"></textarea>
      </label>
    </p>
    <p>
      

					<?php  } ?>

					<!--
						<div class="clearfix">
							<input id="formcheckoutCheckbox1" name="checkbox1" type="checkbox">
							<label for="formcheckoutCheckbox1">Save address to my account</label>
						</div>
							

							-->


					</div>

				</div>
				<div class="card mt-2">
					<div class="card-body">
						<h2>Billing Address</h2>
						<div class="clearfix">
							<!--<input id="formcheckoutCheckbox2" name="checkbox2" type="checkbox">
							<label for="formcheckoutCheckbox2">The same as shipping address</label>-->

						</div>

						<label>
        <input type="checkbox" name="homepostalcheck" id="homepostalcheck"/>
        <label for="formcheckoutCheckbox2">The same as Home Address</label>
	
      </label>
      <br/>
      <label>Billing Address:<br/>
        <textarea name="billingaddress" id="billingaddress" rows="5" cols="100%" class="form-control form-control--sm"></textarea>
      </label>
    </p>
  </fieldset>
</form>

<script type="text/javascript">
	
	function setBillingAddress(){
  if ($("#homepostalcheck").is(":checked")) {
    $('#billingaddress').val($('#homeaddress').val());
    $('#billingaddress').attr('disabled', 'disabled');
  } else {
    $('#billingaddress').removeAttr('disabled');
  }
}

$('#homepostalcheck').click(function(){
  setBillingAddress();
})
</script>





						
					</div>
				</div>
			</div>
			<div class="col-md-9 mt-2 mt-md-0">
				<div class="card">
					<div class="card-body">
						<h2>Delivery Methods</h2>
						<div class="clearfix">
							<input id="formcheckoutRadio1" value="" name="radio1" type="radio" class="radio" checked="checked">
							<label for="formcheckoutRadio1">Standard Delivery <span style="font-weight: bold;">INR</span>2.99 (3-5 days)</label>
						</div>
						<div class="clearfix">
							<input id="formcheckoutRadio2" value="" name="radio1" type="radio" class="radio">
							<label for="formcheckoutRadio2">Express Delivery <span style="font-weight: bold;">INR</span>10.99 (1-2 days)</label>
						</div>
						<div class="clearfix">
							<input id="formcheckoutRadio3" value="" name="radio1" type="radio" class="radio">
							<label for="formcheckoutRadio3">Same-Day <span style="font-weight: bold;">INR</span>20.00 (Evening Delivery)</label>
						</div>
					</div>
				</div>
				<div class="mt-2"></div>
				<div class="card">
					<div class="card-body">
						<h2>Payment Methods</h2>

						<div class="clearfix">
							<input id="formcheckoutRadio4" value="Other" name="radio2" type="radio" class="radio">
							<label for="formcheckoutRadio4">Other Payment Options</label>
						</div>

						<div class="clearfix">    							
    						<input id="formcheckoutRadio5" value="Paytm" name="radio2" type="radio" class="radio">	
							<label for="formcheckoutRadio5">Paytm</label>
						</div>

						<!--<div class="mt-2"></div>
						<label>Cart Number</label>
						<div class="form-group">
							<input type="text" class="form-control form-control--sm">
						</div>
						<div class="row">
							<div class="col-sm-9">
								<label>Month:</label>
								<div class="form-group select-wrapper">
									<select class="form-control form-control--sm">
										<option selected value='1'>January</option>
										<option value='2'>February</option>
										<option value='3'>March</option>
										<option value='4'>April</option>
										<option value='5'>May</option>
										<option value='6'>June</option>
										<option value='7'>July</option>
										<option value='8'>August</option>
										<option value='9'>September</option>
										<option value='10'>October</option>
										<option value='11'>November</option>
										<option value='12'>December</option>
									</select>
								</div>
							</div>
							<div class="col-sm-9">
								<label>Year:</label>
								<div class="form-group select-wrapper">
									<select class="form-control form-control--sm">
										<option value="2019">2019</option>
										<option value="2020">2020</option>
										<option value="2021">2021</option>
										<option value="2022">2022</option>
										<option value="2023">2023</option>
										<option value="2024">2024</option>
									</select>
								</div>
							</div>
						</div>
						<div class="mt-2">
								<label>CVV Code</label>
								<div class="form-group">
									<input type="text" class="form-control form-control--sm">
								</div>
						</div>-->


					</div>
				</div>
				<div class="mt-2"></div>
				<div class="card">
					<div class="card-body">
						<h3>Order Comment</h3>
						<textarea class="form-control form-control--sm textarea--height-200" placeholder="Place your comment here"></textarea>
						<div class="card-text-info mt-2">
							<p>*Savings include promotions, coupons, rueBUCKS, and shipping (if applicable).</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="mt-3"></div>
		<h2 class="custom-color">Order Summary</h2>


		<div class="row">
			<div class="col-md-12">
				<div class="cart-table cart-table--sm pt-3 pt-md-0">
	<div class="cart-table-prd cart-table-prd--head py-1 d-none d-md-flex">
		<div class="cart-table-prd-image text-center">
			Image
		</div>
		<div class="cart-table-prd-content-wrap">
			<div class="cart-table-prd-info">Name</div>
			<div class="cart-table-prd-info">Description</div>
			<div class="cart-table-prd-qty">Qty</div>
			<div class="cart-table-prd-price">Price</div>
		</div>
	</div>

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
			<div class="cart-table-prd-info">
				<h2 class="cart-table-prd-name"><a href="product.php"><?php echo $c->prod_description;?></a></h2>
			</div>
			<div class="cart-table-prd-qty">
				<div class="qty qty-changer">
					<input type="text" class="qty-input disabled" value="<?php echo $c->quantity;?>">
				</div>
			</div>
			<div class="cart-table-prd-price-total">
				<span style="font-weight: bold;">INR</span><?php echo $c->prod_price;?>
			</div>
		</div>
	</div>

	<?php } }?>


	
</div>
			</div>
			<div class="col-md-6 mt-2 mt-md-0">
				<div class="card">
					<div class="card-body">
						<h3>Apply Promocode</h3>
						<p>Got a promo code? Then you're a few randomly combined numbers & letters away from fab savings!</p>
<div class="form-inline mt-2">
	<input type="text" class="form-control form-control--sm" placeholder="Promotion/Discount Code">
	<button type="submit" class="btn">Apply</button>
</div>
					</div>
				</div>
				<div class="mt-2"></div>
				<div class="cart-total-sm">
					<span>Subtotal</span>
					<span class="card-total-price">

						<span style="font-weight: bold;">

						INR

					</span>

						<?php 

						

								print_r(array_sum($arr));
				 ?> 


					</span>
				</div>
				<div class="clearfix mt-2">




    

					<input type="button" class="btn btn--lg w-100" value="Place Order">





					<!--<a href="paytm_payment" class="btn btn--lg w-100">Place Order</a>-->
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<?php include_once 'footer.php';?>