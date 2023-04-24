<?php 

if(isset($_SESSION['user'])){}

else
{
	header("location:index");
}

include_once 'header.php'; 

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
					<a href="account-details" class="list-group-item active">Account Details</a>
					<a href="account-addresses" class="list-group-item">My Addresses</a>
					<a href="account-wishlist" class="list-group-item">My Wishlist</a>
					<a href="account-history" class="list-group-item">My Order History</a>
					<a href="#" class="list-group-item disabled">My Reviews</a>
					<a href="#" class="list-group-item disabled">My Saved Tags</a>
					<a href="#" class="list-group-item disabled">Compare Products</a>
				</div>
			</div>



			<div class="col-md-14 aside">
				<h1 class="mb-3">Account Details</h1>
				<div class="row vert-margin">
					<div class="col-sm-9">
						<div class="card">
							<div class="card-body">
								<h3>Personal Info</h3>

								<?php 

								if(!empty($cust))
								{


									
										

								?>
								<p>
									
									<b>Username:</b> <?php echo $cust->cust_username;?><br>
									<b>First Name:</b> <?php echo $cust->cust_fname;?><br>
									<b>Last Name:</b> <?php echo $cust->cust_lname;?><br>
									<b>E-mail:</b> <?php echo $cust->cust_email;?><br>
									<b>Gender:</b> <?php echo $cust->cust_gender;?><br>
									<b>Address:</b> <?php echo $cust->cust_address;?><br>
									<b>Phone:</b> <?php echo $cust->cust_mobile;?></p>

									
								<div class="mt-2 clearfix">
									<a href="#" class="link-icn js-show-form" data-form="#updateDetails"><i class="icon-pencil"></i>Edit</a>
								</div>
							</div>
						</div>
					</div>

					<div>
						
						<img src="images/cust_images/<?php echo $cust->cust_img;?>" height="290" width="350"> <br>

					</div>

				</div>
				<div class="card mt-3 d-none" id="updateDetails">

					<form method="post" enctype="multipart/form-data">

					<div class="card-body">
						<h3>Update Account Details</h3>

							<div class="row mt-2">

							<div class="col-sm-9">
								<label class="text-uppercase">Upload Image:</label>
								<div class="form-group">
									<img src="images/cust_images/<?php echo $cust->cust_img;?>" height="150" width="250">
									<input type="file" class="form-control form-control--sm" name="cust_img">
								</div>
							</div>
							<div class="col-sm-9">
								<label class="text-uppercase">Phone:</label>
								<div class="form-group">
									<input type="text" class="form-control form-control--sm" name="cust_mobile" value="<?php echo $cust->cust_mobile;?>">
								</div>

								<label class="text-uppercase">Address:</label>
								<div class="form-group">
									<input type="text" class="form-control form-control--sm" name="cust_address" value="<?php echo $cust->cust_address;?>">
								</div>


							</div>
						</div>


						<div class="row mt-2">
							<div class="col-sm-9">
								<label class="text-uppercase">First Name:</label>
								<div class="form-group">
									<input type="text" class="form-control form-control--sm" name="cust_fname" value="<?php echo $cust->cust_fname;?>">
								</div>
							</div>
							<div class="col-sm-9">
								<label class="text-uppercase">Last Name:</label>
								<div class="form-group">
									<input type="text" class="form-control form-control--sm" name="cust_lname" value="<?php echo $cust->cust_lname;?>">
								</div>
							</div>
						</div>
					
						<div class="mt-2">
							<button type="reset" class="btn btn--alt js-close-form" data-form="#updateDetails">Cancel</button>
							<input  type="submit" name="submit" class="btn ml-1" value="Update">
						</div>
					</div>
				</form>


				</div>
			</div>







									<?php 

									 }
									
									?>
		</div>
	</div>
</div>
</div>

<?php include_once 'footer.php';  ?>