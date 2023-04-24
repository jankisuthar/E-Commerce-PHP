<?php include_once 'validate-header.php';?>

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
         <div class="col-md-3">
         </div>

         <div class="col-md-6">
         


         <form id="myform" action="" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">

            <h2 style="text-align: center;"><u>Add Products</u></h2>
            <table class="table table-borderless">
              <thead>
                <th colspan="2" style="text-align: center;font-size: 20px;"></th>
              </thead>

              <tbody>

                <tr>
                <td>
                  Select Category:

                  <select class="form-control" name="cate_id">
                    <option>                  </option>
                      <?php foreach($cate_arr as $cate){?>
                          <option value="<?php echo $cate->cate_id;?>"><?php echo $cate->cate_name;?></option>
                      <?php } ?>
                  </select>
                </td>               
             </tr>


             <tr>
                <td>Product Name:
                <input type="text" name="prod_name" value="<?php echo $fetch->prod_name;?>" class="form-control"></td>
             </tr>

             <tr>
                <td>Product Description:
                <input type="text" name="prod_description" value="<?php echo $fetch->prod_description;?>" class="form-control"></td>
              </tr>

              <tr>
                <td>Product Price:
                <input type="text" name="prod_price" value="<?php echo $fetch->prod_price;?>" class="form-control"></td>
              </tr>

              <tr>
                <td>Discount Price:
                <input type="text" name="discounted_price" value="<?php echo $fetch->discounted_price;?>" class="form-control"></td>
              </tr>

             

              <tr>
                <td>Product Image:
                  <img src="images/prod_images/<?php echo $fetch->prod_img;?>" height="250" width="150">
                <input type="file" name="prod_img" class="form-control"></td>
              </tr>

              <tr>
                
                <td><input type="submit" name="submit" class="btn btn-info btn-block" value="Update Product"></td>
              </tr>
            </tbody>
            </table>
          </form>


<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

<script>
// just for the demos, avoids form submit
/*jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});*/
$( "#myform" ).validate({
  rules: {


    cate_id: 
    {
      required: true,
      

    },

    prod_name: 
    {
      required: true,
      

    },

    prod_description: 
     {
      required: true,
      

    },

    prod_price: 
     {
      required: true,
      digits: true
      

    },

    discounted_price:

    {
      required: true,
      digits: true
      

    },


   prod_img:

     {
      required: true,
      extension: "jpg|JPG|png|PNG|jpeg|JPEG|gif|GIF|webp|WEBP"
    },


    password: {
                  required: true,
                  alphanumeric: true,
                  rangelength: [7, 15]
                },

    cpassword: {
      required: true,
      equalTo: "#password"
    }
  },

   messages: {
    
    email: {
      required: "We need your email address to contact you",
      email: "Your email address must be in the format of name@domain.com"
    }
  }


});
</script>

        </div>

        <div class="col-md-3">
          
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