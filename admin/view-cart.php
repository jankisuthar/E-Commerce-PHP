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

            <h2 style="text-align: center;color: #FFF"><u>View Cart</u></h2>

            <table id="example" class="table table-dark table-responsive" style="font-size: 14px;">
              <thead>

             <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Password</th>
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
<?php  if(!empty($cart_arr))

{
  foreach ($cart_arr as $c) {
   

?>
              <tr>
                <td><img src="../admin/images/prod_images/<?php echo $c->prod_img;?>" height="85" width="110"></td>
                <td><?php echo $c->prod_name;?></td>
                <td><?php echo $c->prod_description;?></td>
                <td><?php echo $c->prod_price;?></td>
                <td><?php echo $c->discounted_price;?></td>
                <td><?php echo $c->prod_img;?></td>
                <td><?php echo $c->prod_img;?></td>
                <td><?php echo $c->prod_img;?></td>
                <td><?php echo $c->prod_img;?></td>
                <td><a href=""><img src="images/delete2.png" height="50" width="50"></a></td>
                <td><a href=""><img src="images/edit3.png" height="50" width="50"></a></td>
                <td><a href=""><img src="images/lock.png" height="50" width="50"></a></td>
              </tr>

 <?php
       } 
          }
?>
             
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