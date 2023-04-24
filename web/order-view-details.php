<?php



 include 'header.php';

 ?>



<div class="page-content">
	<div class="holder breadcrumbs-wrap mt-0">
	<div class="container">
		<ul class="breadcrumbs">
			<li><a href="index.php">Home</a></li>
			<li><span>Cart</span></li>
		</ul>
	</div>
</div>
	<div class="holder">
	<div class="container">
		<div class="page-title text-center">
			<h1>Order Details</h1>
		</div>
		<div class="row">
			<div class="col-lg-11 col-xl-13">
				<div class="cart-table">
	<div class="cart-table-prd cart-table-prd--head py-1 d-none d-md-flex">
		<div class="cart-table-prd-image text-center">
			Image
		</div>
		<div class="cart-table-prd-content-wrap">
			<div class="cart-table-prd-info">Name</div>
			<div class="cart-table-prd-qty">Qty</div>
			<div class="cart-table-prd-price">Price</div>
			<div class="cart-table-prd-price">Subtotal</div>
			<div class="cart-table-prd-action">&nbsp;</div>
		</div>
	</div>
	<?php 

	if(!empty($cart))
	{
		foreach ($cart as $c) {


	

	?>
	

	<div class="cart-table-prd">
		<div class="cart-table-prd-image">
			<a href="single-product?single_pro=<?php echo $c->prod_id?>" class="prd-img">

				<img src="../admin/images/prod_images/<?php echo $c->prod_img;?>" height="85" width="110">
				


			</a>
		</div>
		<div class="cart-table-prd-content-wrap">
			<div class="cart-table-prd-info">
				<div class="cart-table-prd-price">
					<div class="price-old"><span style="font-weight: bold;">INR</span>200.00</div>
					<div class="price-new"><span style="font-weight: bold;">INR</span><?php echo $c->prod_price;?></div>
				</div>
				<h2 class="cart-table-prd-name"><a href="product"><?php echo $c->prod_name;?></a>

				</h2>
					<?php 
					 $status= $c->status;
					 if($status=='In Stock')
					 {
					 ?>
					 <img src="images/stock.png" height="35" width="100">
					
					<?php 
					}

					else
					{?>

						<img src="images/soldout.png" height="35" width="100">
					<?php }



					 ?>
			</div>
			<div>
				
					<div class="qty qty-changer">
						<button class="decrease js-qty-button"></button>
						<input type="number" class="qty-input" name="prod_qty" value="<?php echo $c->quantity;?>" data-min="1" data-max="5">
						<button class="increase js-qty-button"></button>
					</div>
				
			</div>
			<div class="cart-table-prd-price-total">
				<span style="font-weight: bold;">INR</span><?php echo $c->prod_price;?>
			</div>

			<div class="cart-table-prd-price-total">
				<span style="font-weight: bold;">INR</span>
				<?php 

					$price = $c->prod_price;
					$qty = $c->quantity;
				 echo $subtotal = $price*$qty;
				 ?>
			</div>
		</div>

	</div>
	

<?php

		}
	}

	else 
	{
		echo "<script>

		window.location = 'cart-empty';

		</script>";
		
		 }
?>
	
</div>
				
				<div class="d-none d-lg-block">
					<div class="mt-4"></div>
					<div class="holder">
	<div class="container">
		<div class="title-wrap text-center">
			<h2 class="h1-style">You may also like</h2>
			<div class="carousel-arrows carousel-arrows--center"></div>
		</div>
		<div class="prd-grid prd-carousel js-prd-carousel slick-arrows-aside-simple slick-arrows-mobile-lg data-to-show-4 data-to-show-md-3 data-to-show-sm-3 data-to-show-xs-2"
			 data-slick='{"slidesToShow": 4, "slidesToScroll": 2, "responsive": [{"breakpoint": 992,"settings": {"slidesToShow": 3, "slidesToScroll": 1}},{"breakpoint": 768,"settings": {"slidesToShow": 2, "slidesToScroll": 1}},{"breakpoint": 480,"settings": {"slidesToShow": 2, "slidesToScroll": 1}}]}'>

			 <?php foreach($prod_arr as $p)

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
			</div>
			<div class="col-lg-7 col-xl-5 mt-3 mt-md-0">
				<div class="cart-promo-banner">
					<div class="cart-promo-banner-inside">
						<div class="txt1">Save 50%</div>
						<div class="txt2">Only Today!</div>
					</div>
				</div>
				<div class="card-total">
	<div class="text-right">
		<button class="btn btn--grey"><span>UPDATE CART</span><i class="icon-refresh"></i></button>
	</div>
	<div class="row d-flex">
		<div class="col card-total-txt">Total</div>

		<div class="col-auto card-total-price text-right">

			<span style="font-weight: bold;">INR</span>
			<?php

			print_r(array_sum($arr));

			?>


		</div>
	</div>
	
	<div class="card-text-info text-right">
		<h5>Standart shipping</h5>
		<p><b>10 - 11 business days</b><br>1 item ships from the U.S. and will be delivered in 10 - 11 business days</p>
	</div>
</div>
				<div class="mt-2"></div>
				<div class="panel-group panel-group--style1 prd-block_accordion" id="productAccordion">
					
					
					<div class="panel">
						<div class="panel-heading active">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#productAccordion" href="#collapse3">Note for the seller</a>
								<span class="toggle-arrow"><span></span><span></span></span>
							</h4>
						</div>
						<div id="collapse3" class="panel-collapse collapse show">
							<div class="panel-body">
								<textarea class="form-control form-control--sm textarea--height-100" placeholder="Text here"></textarea>
<div class="card-text-info mt-2">
	<p>*Savings include promotions, coupons, rueBUCKS, and shipping (if applicable).</p>
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

<?php include_once 'footer.php';?>