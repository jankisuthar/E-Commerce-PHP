<?php


/**
 * 
 */

include_once 'model.php';


class control extends model
{
	
	function __construct()
	{
		session_start();
		model::__construct();

		$url = $_SERVER['PATH_INFO'];

	
		switch ($url) {


			case '/index':

			if(isset($_REQUEST['submit']))
			{
				$unm=$_REQUEST['username'];
				$pass=$_REQUEST['password'];

				if (isset($_REQUEST['rem'])) 
				{

					setcookie('email',$unm,time()+3600);
					setcookie('pwd',$pass,time()+3600);
				}
				//$enc_pass=md5($pass);
				
				$where=array("username"=>$unm,"password"=>$pass);
				
				$res=$this->select_where('admin',$where);
				$chk=$res->num_rows;  // check row
				if($chk==1)
				{
					$fetch=$res->fetch_object();
					//$uid=$fetch->id;
					$unm_ses=$fetch->username;
					
					$_SESSION['user']=$unm_ses;
					//$_SESSION['aid']=$uid;
				
					
					echo "<script> 
						alert('Login Success ');
						window.location='welcome';
					</script>";
				}
				else
				{
					echo "<script> 
						alert('Login Failed ');
						window.location='index';
					</script>";
				}
			}

				
				include_once 'index.php';
				break;

			case '/welcome':
				
				include_once 'dashboard.php';
				break;

			case '/logout':
				
					unset($_SESSION['user']);
			//unset($_SESSION['aid']);
			echo "<script> 
						alert('Logot Success ');
						window.location='index';
					</script>";
				break;

			case '/ajax_data':
			  

      	   if(isset($_REQUEST['btn'])) { 

      	   		$value = $_REQUEST['btn'];
      	   		$search = $this->select_like('customer','cust_username',$value);
      	   	?>

					<div>


						<table class="table">
							
							<?php 
								foreach($search as $c)
										{
							?>

								<tr>
								<td><?php echo $c->cust_id;?></td>
								<td><?php echo $c->cust_username;?></td>
								<td><?php echo $c->cust_password;?></td>
								<td><?php echo $c->cust_gender;?></td>
								<td><?php echo $c->cust_email;?></td>
								<td><?php echo $c->cust_mobile;?> Known</td>
								<td><?php echo $c->cust_language;?></td>
								<td><?php echo $c->cust_address;?></td>
								<td><img src="../admin/cust_images/<?php echo $c->cust_img;?>" height="50" width="50"></td>
								
								
							</tr>

							<?php
										}
							?>
						</table>

						</div> <?php } 

			break;



			case '/add-user':

			if(isset($_REQUEST['submit']))
			{
				$cust_username=$_REQUEST['cust_username'];
				$cust_fname=$_REQUEST['cust_fname'];
				$cust_lname=$_REQUEST['cust_lname'];
				$cust_password=$_REQUEST['cust_password'];
				$cust_cpass=$_REQUEST['cust_cpass'];

				
				$cust_gender=$_REQUEST['cust_gender'];
				$cust_email=$_REQUEST['cust_email'];
				$cust_mobile=$_REQUEST['cust_mobile'];

				$lang_arr=$_REQUEST['cust_language'];
				$cust_language=implode(",",$lang_arr);
				$cust_address=$_REQUEST['cust_address'];
				
				
				//img upload
				$cust_img=$_FILES['cust_img']['name'];  
				$path='../web/images/cust_images/'.$cust_img;          
				$dup_file=$_FILES['cust_img']['tmp_name'];  
				move_uploaded_file($dup_file,$path);  
				
				$data=array("cust_username"=>$cust_username,"cust_fname"=>$cust_fname,"cust_lname"=>$cust_lname,"cust_password"=>$cust_password,"cust_cpass"=>$cust_cpass,"cust_gender"=>$cust_gender,"cust_email"=>$cust_email,"cust_mobile"=>$cust_mobile,"cust_language"=>$cust_language,"cust_address"=>$cust_address,"cust_img"=>$cust_img);

			
				$res=$this->insert('customer',$data);
				if($res)
				{
					echo "<script> 
						alert('user Submitted ');
						window.location='add-user';
					</script>";
				}
				else
				{
					echo "<script> 
						alert('Something went wrong...!!!');
						window.location='add-user';
					</script>";
				}
				
			}
				
				include_once 'add-user.php';
				break;


			case '/manage-users':

				$cust_arr=$this->select('customer');

			if(isset($_REQUEST['btn_search']))
			{
				$value = $_REQUEST['search'];
				$search = $this->select_like('customer','cust_username',$value);
			}
				
				include_once 'manage-users.php';
				break;

			case '/delete-user':

				if(isset($_REQUEST['del_id']))
			{
				$uid=$_REQUEST['del_id'];
				$where=array("cust_id"=>$uid);
				
				//get img for delete
				$res=$this->select_where('customer',$where);
				$fetch=$res->fetch_object();
				$img=$fetch->cust_img;
				
				
				$res=$this->delete_where("customer",$where);
				if($res)
				{
					//unlink('images/cust_images/'.$img);
					echo "<script> 
						alert('Delete Success');
						window.location='manage-users';
					</script>";
				}
			}
				break;

			case '/update-user':


				if(isset($_REQUEST['update_id']))
					{
						$uid = $_REQUEST['update_id']; 
						$where = array("cust_id"=>$uid);
						$res = $this->select_where('customer',$where);

						$fetch = $res->fetch_object();
						$img = $fetch->cust_img;

						if(isset($_REQUEST['submit']))
								{

									
									$cust_username=$_REQUEST['cust_username'];
									$cust_fname=$_REQUEST['cust_fname'];
									$cust_lname=$_REQUEST['cust_lname'];
									

									
									$cust_gender=$_REQUEST['cust_gender'];
									
									$cust_mobile=$_REQUEST['cust_mobile'];

									$lang_arr=$_REQUEST['cust_language'];
									$cust_language=implode(",",$lang_arr);
									$cust_address=$_REQUEST['cust_address'];
									
									if($_FILES['cust_img']['size'] > 0)
									{

										$cust_img=$_FILES['cust_img']['name'];  
									$path='../web/images/cust_images/'.$cust_img;          
									$dup_file=$_FILES['cust_img']['tmp_name'];  
									move_uploaded_file($dup_file,$path);  
									
									$data=array("cust_username"=>$cust_username,"cust_fname"=>$cust_fname,"cust_lname"=>$cust_lname,"cust_gender"=>$cust_gender,"cust_mobile"=>$cust_mobile,"cust_language"=>$cust_language,"cust_address"=>$cust_address,"cust_img"=>$cust_img);


									$res=$this->update('customer',$data,$where);
									if($res)
									{
										//unlink('images/cust_images/'.$img);
										echo "<script> 
											alert('User profile updated...! ');
											window.location='manage-users';
										</script>";
									}
									


									}

									else
									{

									
									$data=array("cust_username"=>$cust_username,"cust_fname"=>$cust_fname,"cust_lname"=>$cust_lname,"cust_gender"=>$cust_gender,"cust_mobile"=>$cust_mobile,"cust_language"=>$cust_language,"cust_address"=>$cust_address);


									$res=$this->update('customer',$data,$where);
									if($res)
									{
										
										echo "<script> 
											alert('User profile updated...! ');
											window.location='manage-users';
										</script>";
									}

									}
									
									
															
								}



					}

				

		
				include_once 'update-user.php';
				break;




				case '/user_status':

				if(isset($_REQUEST['status_id']))
				{
					$cust_id=$_REQUEST['status_id'];
					$where = array("cust_id"=>$cust_id);

					$res=$this->select_where('customer',$where);
					$fetch=$res->fetch_object();
					$status = $fetch->status;

					if($status=='Unblock')
					{
						$data = array("status"=>"Block");
						$update = $this->update('customer',$data,$where);

						if($update)
						{
							echo "<script>

								alert('Customer account Blocked...!');
								window.location = 'manage-users';

								</script>";
						}
					}

					else
					{
						$data = array("status"=>"Unblock");
						$update = $this->update('customer',$data,$where);

						if($update)
						{
							echo "<script>

								alert('Customer account is Unblocked...!');
								window.location = 'manage-users';

								</script>";
						}

					}


				}
				

			case '/add-employee':

				if(isset($_REQUEST['submit']))
			{
				$emp_username=$_REQUEST['emp_username'];
				$emp_fname=$_REQUEST['emp_fname'];
				$emp_lname=$_REQUEST['emp_lname'];
				$emp_password=$_REQUEST['emp_password'];
				$emp_cpass=$_REQUEST['emp_cpass'];
				$emp_dob=$_REQUEST['emp_dob'];
				
				$emp_gender=$_REQUEST['emp_gender'];
				$emp_email=$_REQUEST['emp_email'];
				$emp_mobile=$_REQUEST['emp_mobile'];

				$lang_arr=$_REQUEST['emp_language'];
				$emp_language=implode(",",$lang_arr);
				$emp_address=$_REQUEST['emp_address'];
				
				
				//img upload
				$emp_img=$_FILES['emp_img']['name']; 
				$path='../web/images/emp_images/'.$emp_img;           
				$dup_file=$_FILES['emp_img']['tmp_name'];  
				move_uploaded_file($dup_file,$path);  
				
				$data=array("emp_username"=>$emp_username,"emp_fname"=>$emp_fname,"emp_lname"=>$emp_lname,"emp_password"=>$emp_password,"emp_cpass"=>$emp_cpass,"emp_dob"=>$emp_dob,"emp_gender"=>$emp_gender,"emp_email"=>$emp_email,"emp_mobile"=>$emp_mobile,"emp_language"=>$emp_language,"emp_address"=>$emp_address,"emp_img"=>$emp_img);


				$res=$this->insert('employee',$data);
				if($res)
				{
					echo "<script> 
						alert('Employee Submitted ');
						window.location='add-employee';
					</script>";
				}
				else
				{
					echo "<script> 
						alert('Something went wrong...!!!');
						window.location='add-employee';
					</script>";
				}
				
			} 
				
				include_once 'add-employee.php';
				break;

				case '/delete-employee':

				if(isset($_REQUEST['del_id']))
			{
				$uid=$_REQUEST['del_id'];
				$where=array("emp_id"=>$uid);
				
				//get img for delete
				$res=$this->select_where('employee',$where);
				$fetch=$res->fetch_object();
				$img=$fetch->emp_img;
				
				
				$res=$this->delete_where("employee",$where);
				if($res)
				{
					//unlink('images/emp_images/'.$img);
					echo "<script> 
						alert('Delete Success');
						window.location='manage-employees';
					</script>";
				}
			}
				break;

			case '/update-employee':


				if(isset($_REQUEST['update_id']))
					{
						$uid = $_REQUEST['update_id']; 
						$where = array("emp_id"=>$uid);
						$res = $this->select_where('employee',$where);

						$fetch = $res->fetch_object();
						$img = $fetch->emp_img;

						if(isset($_REQUEST['submit']))
								{

									
									$emp_username=$_REQUEST['emp_username'];
									$emp_fname=$_REQUEST['emp_fname'];
									$emp_lname=$_REQUEST['emp_lname'];
									
									
									$emp_gender=$_REQUEST['emp_gender'];
									
									$emp_mobile=$_REQUEST['emp_mobile'];

									$lang_arr=$_REQUEST['emp_language'];
									$emp_language=implode(",",$lang_arr);
									$emp_address=$_REQUEST['emp_address'];
									
									if($_FILES['emp_img']['size'] > 0)
									{

										$emp_img=$_FILES['emp_img']['name'];  
									$path='../web/images/emp_images/'.$emp_img;          
									$dup_file=$_FILES['emp_img']['tmp_name'];  
									move_uploaded_file($dup_file,$path);  
									
									$data=array("emp_username"=>$emp_username,"emp_fname"=>$emp_fname,"emp_lname"=>$emp_lname,"emp_gender"=>$emp_gender,"emp_mobile"=>$emp_mobile,"emp_language"=>$emp_language,"emp_address"=>$emp_address,"emp_img"=>$emp_img);


									$res=$this->update('employee',$data,$where);
									if($res)
									{
										//unlink('images/emp_images/'.$img);
										echo "<script> 
											alert('Employee profile updated...! ');
											window.location='manage-employees';
										</script>";
									}
									


									}

									else
									{

									
										$data=array("emp_username"=>$emp_username,"emp_fname"=>$emp_fname,"emp_lname"=>$emp_lname,"emp_gender"=>$emp_gender,"emp_mobile"=>$emp_mobile,"emp_language"=>$emp_language,"emp_address"=>$emp_address);


									$res=$this->update('employee',$data,$where);
									if($res)
									{
										
										echo "<script> 
											alert('Employee profile updated...! ');
											window.location='manage-employees';
										</script>";
									}

									}
									
									
															
								}



					}


		
				include_once 'update-employee.php';
				break;


			case '/emp_status':

				if(isset($_REQUEST['status_id']))
				{
					$emp_id=$_REQUEST['status_id'];
					$where = array("emp_id"=>$emp_id);

					$res=$this->select_where('employee',$where);
					$fetch=$res->fetch_object();
					$status = $fetch->status;

					if($status=='Unblock')
					{
						$data = array("status"=>"Block");
						$update = $this->update('employee',$data,$where);

						if($update)
						{
							echo "<script>

								alert('Employee account Blocked...!');
								window.location = 'manage-employees';

								</script>";
						}
					}

					else
					{
						$data = array("status"=>"Unblock");
						$update = $this->update('employee',$data,$where);

						if($update)
						{
							echo "<script>

								alert('Employee account is Unblocked...!');
								window.location = 'manage-employees';

								</script>";
						}

					}


				}

			case '/add-category':


			if(isset($_REQUEST['submit']))
			{
				$cate_name=$_REQUEST['cate_name'];
				$cate_description=$_REQUEST['cate_description'];
							
				
				//img upload
				$cate_img=$_FILES['cate_img']['name'];  
				$path='images/cate_images/'.$cate_img;          
				$dup_file=$_FILES['cate_img']['tmp_name'];  
				move_uploaded_file($dup_file,$path);  
				
				$data=array("cate_name"=>$cate_name,"cate_description"=>$cate_description,"cate_img"=>$cate_img);

		
				$res=$this->insert('category',$data);
				if($res)
				{
					echo "<script> 
						alert('Category Added...!!! ');
						window.location='add-category';
					</script>";
				}
				else
				{
					echo "<script> 
						alert('Something went wrong...!!!');
						window.location='add-category';
					</script>";
				}
				
			}
				
				include_once 'add-category.php';
				break;

			case '/delete-category':
				if(isset($_REQUEST['del_id']))
			{
				$uid=$_REQUEST['del_id'];
				$where=array("cate_id"=>$uid);
				
				//get img for delete
				$res=$this->select_where('category',$where);
				$fetch=$res->fetch_object();
				$img=$fetch->cate_img;
				
				
				$res=$this->delete_where("category",$where);
				if($res)
				{
					//unlink ('images/cate_images/'.$img);
					echo "<script> 
						alert('Delete Success');
						window.location='manage-categories';
					</script>";
				}
			}
				break;

			case '/update-category':

				if(isset($_REQUEST['update_id']))
					{
						$uid = $_REQUEST['update_id']; 
						$where = array("cate_id"=>$uid);
						$res = $this->select_where('category',$where);

						$fetch = $res->fetch_object();
						$img = $fetch->cate_img;

						if(isset($_REQUEST['submit']))
								{

									$cate_name=$_REQUEST['cate_name'];
									$cate_description=$_REQUEST['cate_description'];
								
									if($_FILES['cate_img']['size']>0)
									{

									$cate_img=$_FILES['cate_img']['name'];  
									$path='images/cate_images/'.$cate_img;          
									$dup_file=$_FILES['cate_img']['tmp_name'];  
									move_uploaded_file($dup_file,$path);  
									
									$data=array("cate_name"=>$cate_name,"cate_description"=>$cate_description,"cate_img"=>$cate_img);


									$res=$this->update('category',$data,$where);
									if($res)
									{
										//unlink ('images/cate_images/'.$img);
										echo "<script> 
											alert('Category updated...! ');
											window.location='manage-categories';
										</script>";
									}
									


									}

									else
									{

									
									$data=array("cate_name"=>$cate_name,"cate_description"=>$cate_description);
									$res=$this->update('category',$data,$where);
									if($res)
									{
										
										echo "<script> 
											alert('Category updated...! ');
											window.location='manage-categories';
										</script>";
									}

									}
									
									
															
								}



					}

				
				include_once 'update-category.php';
				break;


			case '/add-subcategory':

			$cate_arr=$this->select('category');

			if(isset($_REQUEST['submit']))
			{

				
				
				$cate_id = $_REQUEST['cate_id'];
				$subcate_name = $_REQUEST['subcate_name'];
				
				
				$data=array("cate_id"=>$cate_id,"subcate_name"=>$subcate_name);


				$res=$this->insert('subcategory',$data);
				if($res)
				{
					echo "<script> 
						alert('Subcategory added ');
						window.location='add-subcategory';
					</script>";
				}
				else
				{
					echo "<script> 
						alert('Something went wrong...!!!');
						window.location='add-subcategory';
					</script>";
				}
				
			} 

				include_once 'add-subcategory.php';
				break;


			case '/getsubcategory':
			if(isset($_REQUEST['btn']))
				{
					$cid=$_REQUEST['btn'];
					$where=array("cate_id"=>$cid);
					$subcate_arr=$this->select_where('subcategory',$where);

					?>
					 <option>Select Subcategory</option>
					<?php
					
					 while ($fetch = $subcate_arr->fetch_object()) {
					 
					 
					?>
						<option value="<?php echo $fetch->subcate_id; ?>">
										<?php echo $fetch->subcate_name; ?>
						</option>
					<?php 

				}
				}
				
			
			break;

			case '/manage-subcategories':
				
				include_once 'manage-subcategories.php';
				break;

			case '/add-product':

			$cate_arr=$this->select('category');

			if(isset($_REQUEST['submit']))
			{

				
				
				$cate_id = $_REQUEST['cate_id'];
				$prod_name = $_REQUEST['prod_name'];
				$prod_description = $_REQUEST['prod_description'];
				$prod_price = $_REQUEST['prod_price'];
				$discounted_price = $_REQUEST['discounted_price'];				
				
				
				//img upload
				$prod_img=$_FILES['prod_img']['name']; 
				$path='images/prod_images/'.$prod_img;           
				$dup_file=$_FILES['prod_img']['tmp_name'];  
				move_uploaded_file($dup_file,$path);  
				
				$data=array("cate_id"=>$cate_id,"prod_name"=>$prod_name,"prod_description"=>$prod_description,"prod_price"=>$prod_price,"discounted_price"=>$discounted_price,"prod_img"=>$prod_img);


				$res=$this->insert('product',$data);
				if($res)
				{
					echo "<script> 
						alert('Product added ');
						window.location='add-product';
					</script>";
				}
				else
				{
					echo "<script> 
						alert('Something went wrong...!!!');
						window.location='add-product';
					</script>";
				}
				
			} 
				
				include_once 'add-product.php';
				break;

			case '/delete-product':

					if($_REQUEST['del_id'])
					{
						$uid=$_REQUEST['del_id'];
						$where=array("prod_id"=>$uid);
						$res=$this->select_where('product',$where);
						$fetch=$res->fetch_object();
						$img = $fetch->prod_img;

						$del=$this->delete_where('product',$where);

						if($del)
						{
							//unlink('images/prod_images/'.$img);
							echo "<script>

								alert('Product deleted...!');
								window.location='manage-products';
								</script>";
						}
					}
					
					break;



				case '/update-product':
				$cate_arr=$this->select('category');

				if(isset($_REQUEST['update_id']))
					{
						$uid = $_REQUEST['update_id']; 
						$where = array("prod_id"=>$uid);
						$res = $this->select_where('product',$where);

						$fetch = $res->fetch_object();
						$img = $fetch->prod_img;

						if(isset($_REQUEST['submit']))
								{

									$prod_name=$_REQUEST['prod_name'];
									$prod_description=$_REQUEST['prod_description'];
									$prod_price=$_REQUEST['prod_price'];
									$discounted_price=$_REQUEST['discounted_price'];
									
								
									if($_FILES['prod_img']['size']>0)
									{

									$prod_img=$_FILES['prod_img']['name'];  
									$path='images/prod_images/'.$prod_img;          
									$dup_file=$_FILES['prod_img']['tmp_name'];  
									move_uploaded_file($dup_file,$path);  
									
									$data=array("prod_name"=>$prod_name,"prod_description"=>$prod_description,"prod_price"=>$prod_price,"discounted_price"=>$discounted_price,"prod_name"=>$prod_name,"prod_img"=>$prod_img);


									$res=$this->update('product',$data,$where);
									if($res)
									{
										//unlink ('images/cate_images/'.$img);
										echo "<script> 
											alert('Product details updated...! ');
											window.location='manage-products';
										</script>";
									}
									


									}

									else
									{

									
									$data=array("prod_name"=>$prod_name,"prod_description"=>$prod_description,"prod_price"=>$prod_price,"discounted_price"=>$discounted_price,"prod_name"=>$prod_name);
									$res=$this->update('product',$data,$where);
									if($res)
									{
										
										echo "<script> 
											alert('Product details updated...! ');
											window.location='manage-products';
										</script>";
									}

									}
									
									
															
								}



					}

				
				include_once 'update-product.php';
				break;


			

			case '/manage-employees':

				$emp_arr=$this->select('employee');
				
				include_once 'manage-employees.php';
				break;

			case '/manage-employees':
				
				include_once 'manage-employees.php';
				break;

			case '/manage-categories':

			$cate_arr=$this->select('category');
				
				include_once 'manage-categories.php';
				break;

			case '/manage-products':

			$prod_arr=$this->select('product');
				
				include_once 'manage-products.php';
				break;

			case '/manage-inquiries':

			$inq_arr = $this->select('customer');
				
				include_once 'manage-inquiries.php';
				break;

			case '/mail':

			if(isset($_REQUEST['mail_id']))
			{
				$mail_id = $_REQUEST['mail_id'];
				$where = array("cust_id"=>$mail_id);
			$inq_arr = $this->select_where('customer',$where);

			$fetch=$inq_arr->fetch_object();

			}

			if(isset($_REQUEST['submit']))
			{
				$email = $_REQUEST['email'];
				$subject = $_REQUEST['subject'];
				$message = $_REQUEST['message'];

				require 'phpmailer/PHPMailerAutoload.php';
					$mail = new PHPMailer;
					$mail->isSMTP();
					$mail->Host = 'smtp.gmail.com';
					$mail->Port = 587;
					$mail->SMTPSecure = 'tls';
					$mail->SMTPAuth = true;
					$mail->Username = 'niravcs2013@gmail.com';// enter your mail
					$mail->Password = 'krishiv223351nirav';// enter pass
					$mail->setFrom('niravcs2013@gmail.com', 'Nirav Patel');  // Enter display email & name
					$mail->addReplyTo('niravcs2013@gmail.com', 'Nirav Patel');  // enter reply to mail & name
					$mail->addAddress($email);
					$mail->Subject = $subject;
					$mail->msgHTML($message);

					if (!$mail->send()) {
					   $error = "Mailer Error: " . $mail->ErrorInfo;
						?><script>alert('<?php echo $error ?>');</script><?php
					} 
					else 
					{
		 				
					   echo "
					   <script>
					   alert('Message sent!');
					   window.location='manage-inquiries';
					   </script> ";
					}
			}

			
				
				include_once 'mail.php';
				break;

			case '/prod_status':

				if(isset($_REQUEST['status_id']))
				{
					$status_id=$_REQUEST['status_id'];
					$where = array("prod_id"=>$status_id);

					$res=$this->select_where('product',$where);
					$fetch=$res->fetch_object();
					$status = $fetch->status;

					if($status=='In Stock')
					{
						$data = array("status"=>"Out of Stock");
						$update = $this->update('product',$data,$where);

						if($update)
						{
							echo "<script>

								alert('Product is OUT OF STOCK now...!');
								window.location = 'manage-products';

								</script>";
						}
					}

					else
					{
						$data = array("status"=>"In Stock");
						$update = $this->update('product',$data,$where);

						if($update)
						{
							echo "<script>

								alert('Product is IN STOCK now...!');
								window.location = 'manage-products';

								</script>";
						}

					}


				}
				
				
				break;

			case '/multifile':
				
				include_once 'multifile.php';
				break;


			case '/manage-feedbacks':
				
				include_once 'manage-feedbacks.php';
				break;

			case '/view-cart':


			//$where = array("prod_id"=>);
			$cart_arr = $this->select_join_where_multidata('cart','product','cart.prod_id=product.prod_id',$where);
				
				include_once 'view-cart.php';
				break;

			case '/view-orders':
				
				include_once 'view-orders.php';
				break;

			case '/view-payments':
				
				include_once 'view-payments.php';
				break;

			
			default:
				include_once '404.php';
				break;
		}
	}
}

$obj = new control();


?>