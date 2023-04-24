<?php
if(isset($_SESSION['user'])){}

else
{
	header("location:index");
}



 include 'header.php';


 ?>




<div class="page-content">
	<div class="holder breadcrumbs-wrap mt-0">
	<div class="container">
		<ul class="breadcrumbs">
			<li><a href="index">Home</a></li>
			<li><span>My account</span></li>
		</ul>
	</div>
</div>
	<div class="holder">
	<div class="container">
		<div class="row">
			<div class="col-md-4 aside aside--left">
				<div class="list-group">
					<a href="account-details" class="list-group-item">Account Details</a>
					<a href="account-addresses" class="list-group-item">My Addresses</a>
					<a href="account-wishlist" class="list-group-item active">My Wishlist</a>
					<a href="account-history" class="list-group-item">My Order History</a>
					<a href="#" class="list-group-item disabled">My Reviews</a>
					<a href="#" class="list-group-item disabled">My Saved Tags</a>
					<a href="#" class="list-group-item disabled">Compare Products</a>
				</div>
			</div>
			<div class="col-md-14 aside">
				<h1 class="mb-3">My Wishlist</h1>


				


				<div class="prd-grid-wrap position-relative">
					<div class="prd-grid prd-grid--wishlist data-to-show-3 data-to-show-lg-3 data-to-show-md-2 data-to-show-sm-2 data-to-show-xs-1">


	<?php 

						if(!empty($wish))

						{
							foreach ($wish as $w) {
								
							
						?>



						<div class="prd prd--in-wishlist prd--style2 prd-labels--max prd-labels-shadow ">
	<div class="prd-inside">
		<div class="prd-img-area">
			<a href="single-product?single_pro=<?php echo $w->prod_id;?>" class="prd-img image-hover-scale image-container">
				<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/prod_images/<?php echo $w->prod_img;?>" alt="Suede Leather Mini Skirt" class="js-prd-img lazyload fade-up">
				<div class="Nirav Patel-loader"></div>
				<div class="prd-big-squared-labels">
				</div>
			</a>
			<div class="prd-circle-labels">

				<form method="post">
				<a href="account-wishlist?del_wish_id=<?php echo $w->prod_id;?>" class="circle-label-compare circle-label-wishlist--off" title="Remove From Wishlist"><i class="icon-recycle"></i></a>
				</form>


				<a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile" data-src="ajax/ajax-quickview"><i class="icon-eye"></i><span>QUICK VIEW</span></a>
			</div>
			<ul class="list-options color-swatch">
				<li data-image="../admin/images/prod_images/<?php echo $w->prod_img;?>" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/prod_images/<?php echo $w->prod_img;?>" class="lazyload fade-up" alt="Color Name"></a></li>
				<li data-image="../admin/images/prod_images/<?php echo $w->prod_img;?>"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/prod_images/<?php echo $w->prod_img;?>" class="lazyload fade-up" alt="Color Name"></a></li>
				<li data-image="../admin/images/prod_images/<?php echo $w->prod_img;?>"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="../admin/images/prod_images/<?php echo $w->prod_img;?>" class="lazyload fade-up" alt="Color Name"></a></li>
			</ul>
		</div>
		<div class="prd-info">
			<div class="prd-info-wrap">
				<div class="prd-info-top">
					<div class="prd-tag"><a href="#">Bigsteps</a></div>
				</div>
				<div class="prd-rating justify-content-center"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i></div>
				<div class="prd-tag"><a href="#">Bigsteps</a></div>
				<h2 class="prd-title"><a href="product"><?php echo $w->prod_name;?></a></h2>
				<div class="prd-description">
					<?php echo $w->prod_description;?>
				</div>
			</div>
			<div class="prd-hovers">
				<div class="prd-circle-labels">
					<div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
					<div><a href="#" class="circle-label-qview prd-hide-mobile js-prd-quickview" data-src="ajax/ajax-quickview"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
				</div>
				<div class="prd-price">
					<div class="price-new"><span style="font-weight: bold;">INR</span> <?php echo $w->prod_price;?></div>
				</div>
				<div class="prd-action">
					<div class="prd-action-left">
						<a href="single-product?single_pro=<?php echo $w->prod_id;?>">
							<button class="btn">View Full Info</button>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<?php 
	}

	}

	else {

?>






					</div>
				</div>

				<div class="text-center py-3">
					<h3>Your Wishlist is empty</h3>
					<div class="mt-5">
						<a href="index" class="btn">Continue shopping</a>
					</div>
				</div>


			<?php } ?>



			</div>
		</div>
	</div>
</div>
</div>

<?php include_once 'footer.php';  ?>