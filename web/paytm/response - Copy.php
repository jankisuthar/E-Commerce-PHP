



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


</body>

<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("PaytmKit/lib/config_paytm.php");
require_once("PaytmKit/lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application’s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {

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

		</div>

	</div>

</div>

</div>



	echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
	
	echo "<pre>";
	print_r($_POST);
	echo "<pre>";

		<?php

	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "<b>Transaction status is success</b>" . "<br/>";
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
	}
	else {
		echo "<b>Transaction status is failure</b>" . "<br/>";
	}

	if (isset($_POST) && count($_POST)>0 )
	{ 
		foreach($_POST as $paramName => $paramValue) {
				echo "<br/>" . $paramName . " = " . $paramValue;
		}
	}
	

}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>



<script src="js/vendor-special/lazysizes.min.js"></script>
<script src="js/vendor-special/ls.bgset.min.js"></script>
<script src="js/vendor-special/ls.aspectratio.min.js"></script>

<script src="js/vendor-special/jquery.ez-plus.js"></script>
<script src="js/vendor/vendor.min.js"></script>
<script src="js/app-html.js"></script>

</body>
</html>