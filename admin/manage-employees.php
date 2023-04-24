<?php include_once 'header.php';?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
<!--
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard v2</h1>
          </div>--><!-- /.col -->
          <!--<div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div>--><!-- /.col -->
        <!--</div>--><!-- /.row -->

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">CPU Traffic</span>
                <span class="info-box-number">
                  10
                  <small>%</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Likes</span>
                <span class="info-box-number">41,410</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Sales</span>
                <span class="info-box-number">760</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">New Members</span>
                <span class="info-box-number">2,000</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

       
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
         

         <div class="col-md-12" >  

            <h2 style="text-align: center;color: #FFF"><u>Manage Employees</u></h2>

            <table id="example" class="table table-dark table-responsive" style="font-size: 13px;">
              <thead>

             <tr>
                <th>Username</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Password</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Languages Known</th>
                <th>Address</th>
                <th>Mobile</th>
                <th>Image</th>
                <th>Delete</th>
                <th>Edit</th>
                <th>Status</th>
              </tr>

            </thead>

            <tbody>

              <?php if(!empty($emp_arr)){
              foreach($emp_arr as $emp) { ?>

              <tr>
                <td><?php echo $emp->emp_username;?></td>
                <td><?php echo $emp->emp_fname;?></td>
                <td><?php echo $emp->emp_lname;?></td>
                <td><?php echo $emp->emp_email;?></td>
                <td><?php echo $emp->emp_password;?></td>
                <td><?php echo $emp->emp_dob;?></td>
                <td><?php echo $emp->emp_gender;?></td>
                <td><?php echo $emp->emp_language;?></td>
                <td><?php echo $emp->emp_address;?></td>
                <td><?php echo $emp->emp_mobile;?></td>
                <td><img src="../web/images/emp_images/<?php echo $emp->emp_img;?>" height="60" width="35"></td>
                <td><a href="delete-employee?del_id=<?php echo $emp->emp_id;?>"><img src="images/delete2.png" height="35" width="35"></a></td>
                <td><a href="update-employee?update_id=<?php echo $emp->emp_id;?>"><img src="images/edit3.png" height="35" width="35"></a></td>
                


                 <td>

                  <?php 

                    $status=$emp->status;
                    if($status=='Unblock')
                      { ?>

                  <a href="emp_status?status_id=<?php echo $emp->emp_id;?>"><img src="images/unlock.png" height="30" width="30"></a>

                <?php } else {?>

                  <a href="emp_status?status_id=<?php echo $emp->emp_id;?>"><img src="images/lock.png" height="30" width="30"></a>


                <?php }?>
                </td>

              </tr>

            <?php } }?>
             
            </tbody>
            </table>
          

        </div>

       
           
         </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
<?php include_once 'footer.php';?>