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
					<a href="account-details" class="list-group-item">Account Details</a>
					<a href="account-addresses" class="list-group-item active">My Addresses</a>
					<a href="account-wishlist" class="list-group-item">My Wishlist</a>
					<a href="account-history" class="list-group-item">My Order History</a>
					<a href="#" class="list-group-item disabled">My Reviews</a>
					<a href="#" class="list-group-item disabled">My Saved Tags</a>
					<a href="#" class="list-group-item disabled">Compare Products</a>
				</div>
			</div>
			<div class="col-md-14 aside">
				<h1 class="mb-3">My Addresses</h1>
				<div class="row">
					<div class="col-sm-9">
						<div class="card">
							<div class="card-body">
								<h3>Address 1 (Default)</h3>
								<p><?php echo $cust->cust_address;?>
									<br> <?php echo $cust->cust_address;?>
									<br> <?php echo $cust->cust_address;?></p>
								<div class="mt-2 clearfix">
									<a href="#" class="link-icn js-show-form" data-form="#updateAddress"><i class="icon-pencil"></i>Edit</a>
									<a href="#" class="link-icn ml-1 float-right"><i class="icon-cross"></i>Delete</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-9 mt-2 mt-sm-0">
						<div class="card">
							<div class="card-body">
								<h3><?php echo $cust->cust_address;?></h3>
								<p><?php echo $cust->cust_address;?>
									<br> <?php echo $cust->cust_address;?>
									<br> <?php echo $cust->cust_address;?>
								</p>
								<div class="mt-2 clearfix">
									<a href="#" class="link-icn js-show-form" data-form="#updateAddress"><i class="icon-pencil"></i>Edit</a>
									<a href="#" class="link-icn ml-1 float-right"><i class="icon-cross"></i>Delete</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card mt-3 d-none" id="updateAddress">
					<div class="card-body">
						<h3>Edit Address</h3>
						<label class="text-uppercase">Country:</label>
						<div class="form-group select-wrapper">
							<select class="form-control">
								<option value="United States">United States</option>
								<option value="Canada">Canada</option>
								<option value="China">China</option>
								<option value="India">India</option>
								<option value="Italy">Italy</option>
								<option value="Mexico">Mexico</option>
							</select>
						</div>
						<label class="text-uppercase">State:</label>
						<div class="form-group select-wrapper">
							<select class="form-control">
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
						<div class="row">
							<div class="col-sm-6">
								<label class="text-uppercase">City:</label>
								<div class="form-group">
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-sm-6">
								<label class="text-uppercase">zip/postal code:</label>
								<div class="form-group">
									<input type="text" class="form-control">
								</div>
							</div>
						</div>
						<div class="clearfix">
							<input id="formCheckbox1" name="checkbox1" type="checkbox">
							<label for="formCheckbox1">Set address as default</label>
						</div>
						<div class="mt-2">
							<button type="reset" class="btn btn--alt js-close-form" data-form="#updateAddress">Cancel</button>
							<button type="submit" class="btn ml-1">Add Address</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>


<?php include_once 'footer.php';  ?>