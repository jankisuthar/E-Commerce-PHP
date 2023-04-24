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


				<div class="text-center">
					<h3>Your Wishlist is empty</h3>
					<div class="mt-5">
						<a href="index" class="btn">Continue shopping</a>
					</div>
				</div>
				



			</div>


		</div>
	</div>
</div>
</div>

<?php include_once 'footer.php';  ?>