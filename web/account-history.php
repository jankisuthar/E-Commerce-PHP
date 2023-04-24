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
					<a href="account-addresses" class="list-group-item">My Addresses</a>
					<a href="account-wishlist" class="list-group-item">My Wishlist</a>
					<a href="account-history" class="list-group-item active">My Order History</a>
					<a href="#" class="list-group-item disabled">My Reviews</a>
					<a href="#" class="list-group-item disabled">My Saved Tags</a>
					<a href="#" class="list-group-item disabled">Compare Products</a>
				</div>
			</div>
			<div class="col-md-14 aside">
			<h1 class="mb-3">Order History</h1>
				<div class="table-responsive">
					<table class="table table-bordered table-striped table-order-history">
						<thead>
						<tr>
							
							<th scope="col">Order Number</th>
							<th scope="col">Order Date </th>
							<th scope="col">Status</th>
							<th scope="col">Total Price</th>
							<th scope="col"></th>
						</tr>
						</thead>
						<tbody>
							<?php 

							if(!empty($ord_arr))
							{
								foreach ($ord_arr as $ord)
								 {
									
							?>
						<tr>
							
							<td><b><?php echo $ord->ORDERID; ?></b> <a href="order-view-details" class="ml-1">View Details</a></td>
							<td><?php echo $ord->TXNDATE; ?></td>
							<td>Shipped</td>
							<td><span class="color"><span style="font-weight: bold;">INR</span><?php echo $ord->TXNAMOUNT;?></span></td>
							<td><a href="#" class="btn btn--grey btn--sm">REORDER</a></td>
						</tr>

						<?php  

								}

							}



						?>
						
						</tbody>
					</table>
				</div>
			
			</div>
		</div>
	</div>
</div>
</div>

<?php include_once 'footer.php';  ?>