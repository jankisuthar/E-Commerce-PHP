<?php
error_reporting(0);
include 'model.php';

class control extends model

{

	//session_start();
	function __construct()
	{

		session_start();
		model::__construct();
		$url = $_SERVER['PATH_INFO'];

		//$uid = $_SESSION['uid'];

			$cate_arr = $this->select('category'); //to get catogory names in each page	



		if(isset($_SESSION['uid'])){

			$cust_id=$_SESSION['uid'];
				//to show products  in each pop up of Header 

				$where = array("cust_id"=>$cust_id);
				$cart = $this->select_join_where_multidata('cart','product','cart.prod_id = product.prod_id',$where);

				

			

			$uid = $_SESSION['uid'];

				$where = array("cust_id"=>$uid);
				$wish= $this->select_join_where_multidata('wishlist','product','wishlist.prod_id = product.prod_id',$where);

				
				}

				
		

		switch ($url) {

			case '/index':	

			if(isset($_REQUEST['submit']))
				{					
					$email = $_REQUEST['cust_email'];
					$pwd = $_REQUEST['cust_password'];		


					if(isset($_REQUEST['rem'])){

					setcookie('email',$email,time()+3600);
					setcookie('pwd',$pwd,time()+3600);	}		

					$where=array("cust_email"=>$email,"cust_password"=>$pwd);
					$login = $this->select_where('customer',$where);

					$chk=$login->num_rows;

					if($chk==1)
							{
								$fetch=$login->fetch_object();
								$status= $fetch->status;

								if($status=='Block')
								{
									echo "<script>
										alert('Acount blocked...! Please Mail us to solve this..');
										window.location ='account-login';
										</script>";
								}

								else
								{
									//$fetch_email = $fetch->cust_email;
									$fetch_uid = $fetch->cust_id;
									$fetch_unm = $fetch->cust_username;

									$_SESSION['user']=$fetch_unm;
									$_SESSION['uid']=$fetch_uid;

									echo "<script>
										alert('Login success...!');
										window.location ='home';
										</script>";


								}
								
							}

							else
							{
								echo "<script>
										alert('Login failed...!');
										window.location ='account-login';
										</script>";
							}

					}	

				
						
				include_once 'index.php';
				break;

			case '/home':	

				
						
				include_once 'index.php';
				break;

			

			case '/about':
				
				include_once 'about.php';
				break;

			case '/account-addresses':

			$cust_id = $_SESSION['uid'];
				$where = array ("cust_id"=>$cust_id);
				$cust_arr = $this->select_where('customer',$where);

				$cust = $cust_arr->fetch_object();

				$country_arr = $this->select('country');
				
				include_once 'account-addresses.php';
				break;

			
			case '/account-create':

			if(isset($_REQUEST['submit']))
				{					
					$email = $_REQUEST['cust_email'];
					$pwd = $_REQUEST['cust_password'];		


					
					$where=array("cust_email"=>$email,"cust_password"=>$pwd);
					$login = $this->select_where('customer',$where);

					$chk=$login->num_rows;

					if($chk==1)
							{
								$fetch=$login->fetch_object();
								$status= $fetch->status;

								if($status=='Block')
								{
									echo "<script>
										alert('Acount blocked...! Please Mail us to solve this..');
										window.location ='account-login';
										</script>";
								}

								else
								{
									//$fetch_email = $fetch->cust_email;
									$fetch_uid = $fetch->cust_id;
									$fetch_unm = $fetch->cust_username;

									$_SESSION['user']=$fetch_unm;
									$_SESSION['uid']=$fetch_uid;

									echo "<script>
										alert('Login success...!');
										window.location ='home';
										</script>";


								}
								
							}

							else
							{
								echo "<script>
										alert('Login failed...!');
										window.location ='account-login';
										</script>";
							}

					}	


				if(isset($_REQUEST['register']))
				{
					
					$cust_email = $_REQUEST['cust_email'];

 					$where = array ("cust_email"=>$cust_email);

					$res = $this->select_where('customer',$where);
					$chk = $res->fetch_object();

					$oldemail = $chk->cust_email;

					if($oldemail==$cust_email)
					{
						echo "<script>
						alert('Email already exists ...!  Please Login to continue');
						window.location = 'account-login';
						</script>";

					}

					else
					{

						$cust_username = $_REQUEST['cust_username'];
					$cust_email = $_REQUEST['cust_email'];
					$cust_fname = $_REQUEST['cust_fname'];
					$cust_lname = $_REQUEST['cust_lname'];
					$cust_password = $_REQUEST['cust_password'];
					$cust_cpass = $_REQUEST['cust_cpass'];
					$cust_gender = $_REQUEST['cust_gender'];

					$lan_arr = $_REQUEST['cust_language'];
					$cust_language = implode(",", $lan_arr);
					
					$cust_address = $_REQUEST['cust_address'];
					$cust_mobile = $_REQUEST['cust_mobile'];

					$cust_img = $_FILES['cust_img']['name'];
					$tmp_img = $_FILES['cust_img']['tmp_name'];

					move_uploaded_file($tmp_img, 'images/cust_images/'.$cust_img);

					$data = array ("cust_username"=>$cust_username,"cust_fname"=>$cust_fname,"cust_lname"=>$cust_lname,"cust_password"=>$cust_password,"cust_cpass"=>$cust_cpass,"cust_gender"=>$cust_gender,"cust_email"=>$cust_email,"cust_mobile"=>$cust_mobile,"cust_language"=>$cust_language,"cust_address"=>$cust_address,"cust_img"=>$cust_img);

					$insert = $this->insert('customer',$data);

					if($insert)

					{
						echo "<script>

									alert('Thank you for being a part of our Family...!  Please Login to Continue');
									window.location='account-login';
									</script>";
					}

					}

				}




				
				
					
				
				include_once 'account-create.php';
				break;

			case '/account-details':


				$cust_id = $_SESSION['uid'];
				$where = array ("cust_id"=>$cust_id);
				$cust_arr = $this->select_where('customer',$where);

				$cust = $cust_arr->fetch_object();

				if(isset($_REQUEST['submit']))

				{
					
					$cust_fname = $_REQUEST['cust_fname'];
					$cust_lname = $_REQUEST['cust_lname'];
					
					
					$cust_address = $_REQUEST['cust_address'];
					$cust_mobile = $_REQUEST['cust_mobile'];

					if($_FILES['cust_img']['size'] > 0)

					{

						$cust_img = $_FILES['cust_img']['name'];
						$tmp_img = $_FILES['cust_img']['tmp_name'];

						move_uploaded_file($tmp_img, 'images/cust_images/'.$cust_img);

						$data = array ("cust_fname"=>$cust_fname,"cust_lname"=>$cust_lname,"cust_mobile"=>$cust_mobile,"cust_address"=>$cust_address,"cust_img"=>$cust_img);

					$update = $this->update('customer',$data,$where);

						if($update)
							{
								echo "<script>

									alert('Details updated..!');
									window.location='account-details';
									</script>";

							}


					}

					else
					{
						$data = array ("cust_fname"=>$cust_fname,"cust_lname"=>$cust_lname,"cust_mobile"=>$cust_mobile,"cust_address"=>$cust_address);
					$update = $this->update('customer',$data,$where);

						if($update)
							{
								echo "<script>

									alert('Details updated..!');
									window.location='account-details';
									</script>";

							}


					}


				}
				
				include_once 'account-details.php';
				break;

			case '/account-history':
				
				include_once 'account-history.php';
				break;

			case '/account-login':

						

				if(isset($_REQUEST['login']))
				{					
					$email = $_REQUEST['email'];
					$pwd = $_REQUEST['password'];

					if (isset($_POST['rem']))
					{
						setcookie('email',$email,time()+20);
						setcookie('pwd',$pwd,time()+20);
					}

					

					$where=array("cust_email"=>$email,"cust_password"=>$pwd);
					$login = $this->select_where('customer',$where);

					$chk=$login->num_rows;

					if($chk==1)
							{
								$fetch=$login->fetch_object();
								$status= $fetch->status;

								if($status=='Block')
								{
									echo "<script>
										alert('Acount blocked...! Please Mail us to solve this..');
										window.location ='account-login';
										</script>";
								}

								else
								{
									//$fetch_email = $fetch->cust_email;
									$fetch_uid = $fetch->cust_id;
									$fetch_unm = $fetch->cust_username;

									$_SESSION['user']=$fetch_unm;
									$_SESSION['uid']=$fetch_uid;





									$count=$_SESSION['count']; 

									echo "<script>
										alert('Login success...!');
										window.location ='home';
										</script>";


								}
								
							}

							else
							{
								echo "<script>
										alert('Login failed...!');
										window.location ='account-login';
										</script>";
							}

					}	
				
				
				include_once 'account-login.php';
				break;


			case '/forgotpass':

			if(isset($_REQUEST['reset']))
			{
				$email = $_REQUEST['email'];

				
				$where = array("cust_email"=>$email);

				$res = $this->select_where('customer',$where);
				$fetch = $res->fetch_object();

				$chkemail = $fetch->cust_email;

				if($email==$chkemail)
				{

					$_SESSION['chkemail']=$chkemail;
					echo "<script>

						window.location = 'createpassword';
						</script>";

				}

				else
				{
					echo "<script>
						alert('We do not have record of the Email you entered...!');

						</script>";
				}

			}



				include_once 'forgotpass.php';
				break;

			case '/createpassword':

				if(isset($_REQUEST['reset']))
				{

					$email = $_SESSION['chkemail'];
					$newpwd = $_REQUEST['newpwd'];
					$repeatpwd = $_REQUEST['repeatpwd'];

					$where = array("cust_email"=>$email);

					$data = array("cust_password"=>$newpwd,"cust_cpass"=>$repeatpwd);

					$reset = $this->update('customer',$data,$where);

					if($reset)
					{
						unset($_SESSION['chkemail']);
						echo "<script>
						alert('Your new password is saved...!');
						window.location = 'account-login';

						</script>";
					}					
					
				}

				include_once 'createpassword.php';
				break;

			case '/logout':

				unset($_SESSION['user']);
				unset($_SESSION['uid']);
				unset($_SESSION['count']);
				echo "<script> 
						alert('Logot Success ');
						window.location='index';
					</script>";
				break;

			case '/account-wishlist':

				$cust_id=$_SESSION['uid'];
				
				$where = array("cust_id"=>$cust_id);
				

				$wish = $this->select_join_where_multidata('wishlist','product','wishlist.prod_id = product.prod_id',$where);

				if(isset($_REQUEST['del_wish_id']))
				{
					$del_wish_id = $_REQUEST['del_wish_id'];

					$where = array('prod_id' =>$del_wish_id);
					$del_wish = $this->delete_where('wishlist',$where);

					if($del_wish)
					{
						echo "<script> 
						alert('Product removed from Wishlist...! ');
						window.location='account-wishlist';
					</script>";
					}
				}
				
				include_once 'account-wishlist.php';
				break;

			case '/cart':

			$uid = $_SESSION['uid'];

				$where = array("cust_id"=>$uid);
				$cart = $this->select_join_where_multidata('cart','product','cart.prod_id = product.prod_id',$where);

				if(isset($_REQUEST['del_cart_id']))
				{
					$prod_id = $_REQUEST['del_cart_id'];
					$where = array("prod_id"=>$prod_id);
					
					$del = $this->delete_where('cart',$where);

					if($del)
					{
						echo "<script> 
						alert('Product removed from Cart...! ');
						window.location='cart';
					</script>";

					}

				}


				
				
					
					$where = array("status"=>'In Stock');
				$prod_arr = $this->select_join_where_multidata('product','category','product.cate_id=category.cate_id',$where);
					

				include_once 'cart.php';
				break;

			case '/cart-empty':


				
				include_once 'cart-empty.php';
				break;

			case '/single-product':

			$uid = $_SESSION['uid'];

				$where = array("cust_id"=>$uid);
				$cart = $this->select_join_where_multidata('cart','product','cart.prod_id = product.prod_id',$where);	

			if(isset($_REQUEST['single_pro']))
					{
						$prod_id = $_REQUEST['single_pro'];
						$where = array("prod_id"=>$prod_id);
						$prod_arr = $this->select_join_where_multidata('product','category','product.cate_id=category.cate_id',$where);
					}
			
				

					$where = array("status"=>'In Stock');
				$prod_arrX = $this->select_join_where_multidata('product','category','product.cate_id=category.cate_id',$where);
				
				include_once 'single-product.php';
				break;

			case '/addtocart':

				if (isset($_SESSION['uid'])) 
				{
					if(isset($_REQUEST['btn_add_cart']))
					{

						$uid = $_SESSION['uid'];
						$prod_id = $_REQUEST['prod_id'];
						$prod_qty = $_REQUEST['prod_qty'];

						$where = array("cust_id"=>$uid,"prod_id"=>$prod_id);
						$res = $this->select_where('cart',$where);

						

						$fetch = $res->fetch_object();
						$qty= $fetch->quantity;


						$wish_chk = $this->select_where('wishlist',$where);
						$wish_get = $wish_chk->fetch_object();

						$wish_prod_id = $wish_get->prod_id;

						if($prod_id==$wish_prod_id)
						{
							$where = array("prod_id"=>$wish_prod_id);
							$chk_res = $this->delete_where('wishlist',$where);

							if($chk_res)
							{
								echo "<script>

									alert('Product removed from Wishlist...!   and   Added to cart');
									window.location='product';
									</script>";
							}

						}

						

						if($qty>0)
						{

							$qty= $fetch->quantity;

							
							$main_qty = $qty+$prod_qty;

							$data =array ("quantity"=>$main_qty);

							$add_more = $this->update('cart',$data,$where);


							

							if($add_more)
							{
								echo "<script>

									alert('product added to Cart...!');
									window.location='product';
									</script>";
							}

						}

						else
						{

							$prod_id = $_REQUEST['prod_id'];
							$qty = $_REQUEST['prod_qty'];
							$cust_id = $_SESSION['uid'];

							
							
							
							

							$data = array("prod_id"=>$prod_id,"quantity"=>$qty,"cust_id"=>$cust_id);						
							$add = $this->insert('cart',$data);

							if($add)
							{
								echo "<script>

									alert('product added to Cart...!');
									window.location='product';
									</script>";
							} 

						}

					


					} //Btn_request
					
				}



				else 
				{
					echo "<script>

						alert('Please LogIn first...!');
						window.location='account-login';
						</script>";
				}

				

				
				
				include_once 'single-product.php';
				break;

			
			case '/product':

				$uid = $_SESSION['uid'];

				$where = array("cust_id"=>$uid);
				$cart = $this->select_join_where_multidata('cart','product','cart.prod_id = product.prod_id',$where);



					if(isset($_REQUEST['btn_cat_id']))
					{
						$cate_id = $_REQUEST['btn_cat_id'];
						$where = array("cate_id"=>$cate_id);
						$prod_arr = $this->select_where_multidata('product',$where);

					

						$cate_arrx = $this->select_where('category',$where);
						$fetch = $cate_arrx->fetch_object();



					
					}
				

					$where = array("status"=>'In Stock');
				$prod_arrX = $this->select_join_where_multidata('product','category','product.cate_id=category.cate_id',$where);
						


				include_once 'product.php';
				break;


			case '/addtowish':

			if (isset($_SESSION['uid'])) 
				{
					if(isset($_REQUEST['btn_add_wish']))
					{

						$uid = $_SESSION['uid'];
						$prod_id = $_REQUEST['prod_id'];
						$prod_qty = $_REQUEST['prod_qty'];

						$where = array("cust_id"=>$uid,"prod_id"=>$prod_id);
						$res = $this->select_where('wishlist',$where);
						$fetch = $res->fetch_object();
						$qty= $fetch->quantity;


						if($qty>0)
						{

							$qty= $fetch->quantity;

							
							$main_qty = $qty+$prod_qty;

							$data =array ("quantity"=>$main_qty);

							$add_more = $this->update('wishlist',$data,$where);


							

							if($add_more)
							{

								
								echo "<script>

									alert('product added to Wishlist...!');
									window.location='account-wishlist';
									</script>";
							}

						}

						else
						{

							$prod_id = $_REQUEST['prod_id'];
							$qty = $_REQUEST['prod_qty'];
							$cust_id = $_SESSION['uid'];

							
							
							
							

							$data = array("prod_id"=>$prod_id,"quantity"=>$qty,"cust_id"=>$cust_id);						
							$add = $this->insert('wishlist',$data);

							if($add)
							{
								echo "<script>

									alert('product added to Wishlist...!');
									window.location='account-wishlist';
									</script>";
							} 

						}
					} //Btn_request
					
				}



				else 
				{
					echo "<script>

						alert('Please LogIn first...!');
						window.location='account-login';
						</script>";
				}

				

				
				
				include_once 'single-product.php';
				break;



				break;

			case '/account-wishlist':

				$uid = $_SESSION['uid'];

				$where = array("cust_id"=>$uid);
				$wish= $this->select_join_where_multidata('wishlist','product','wishlist.prod_id = product.prod_id',$where);

			
				
				if(isset($_REQUEST['del_id']))
				{
					 $prod_id = $_REQUEST['del_id'];

					 $where = array("prod_id"=>$prod_id);
					 $del = $this->delete_where('wishlist',$where);

					 if($del)
					 {
					 	echo "<script>
					 			alert('Product removed from Wishlist...!');
					 			window.location = 'account-wishlist';
					 		</script>";
					 }

				}
					

				


					
				
				include_once 'account-wishlist.php';
				break;

			case '/empty-wishlist':
				
				include_once 'empty-wishlist.php';
				break;



			case '/checkout':
				
				include_once 'checkout.php';
				break;

			case '/paytm_payment':
				
				include_once 'paytm_payment.php';
				break;

			case '/contact':
				
				include_once 'contact.php';
				break;

			case '/faq':
				
				include_once 'faq.php';
				break;

			case '/coming-soon':
				
				include_once 'coming-soon.php';
				break;

			

			
			case '/404':
				
				include_once '404.php';
				break;
			
			default:
				# code...
				break;
		}
	}
}

$obj = new control();

?>