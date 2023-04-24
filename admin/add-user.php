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
         


         <form id="myform" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">

            <h2 style="text-align: center;"><u>User Registration</u></h2>
            <table class="table table-borderless">
              <thead>
                <th colspan="2" style="text-align: center;font-size: 20px;"></th>
              </thead>

              <tbody>


             <tr>
                <td>Userame:
                <input type="text" name="cust_username"  class="form-control"></td>
             </tr>

             <tr>
                <td>First Name:
                <input type="text" name="cust_fname"  class="form-control"></td>
              </tr>

              <tr>
                <td>Last Name:
                <input type="text" name="cust_lname"  class="form-control"></td>
              </tr>

              <tr>
                <td>Email:
                <input type="text" name="cust_email"  class="form-control"></td>
              </tr>

              <tr>
                <td>Password:
                <input type="password" id="password" name="cust_password"  class="form-control"></td>
              </tr>

              <tr>
                <td>Confirm Password:
                <input type="password" id="password_again" name="cust_cpass"  class="form-control"></td>
              </tr>

              <tr>

                <td>Gender:
               <div class="form-check-inline">
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="cust_gender" value="Male">Male
                </label>
              </div>
              <div class="form-check-inline">
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="cust_gender" value="Female">Female
                </label>
              </div>
              </td>
              </tr>


             

              <tr>
                <td>Languages Known:
                 <div class="form-check-inline">
                  <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" id="cust_language" value="Gujarati" name="cust_language[]">Gujarati
                 </label>
                </div>
                <div class="form-check-inline">
                  <label class="form-check-label">
                 <input type="checkbox" class="form-check-input" id="cust_language" value="Hindi" name="cust_language[]">Hindi
                 </label>
                  </div>
                  <div class="form-check-inline">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" id="cust_language" value="English" name="cust_language[]">English
                    </label>
                  </div>
              </td>
              </tr>

             
              <tr>
                <td>
                  <div class="form-group">
              <label for="comment">Address:</label>
              <textarea class="form-control" rows="5" id="comment" name="cust_address" class="form-control"></textarea>
              </div>
            </td>

               </tr>

               <tr>
                <td>Mobile:
                <input type="text" class="form-control" name="cust_mobile"></td>
              </tr>
           

              <tr>
                <td>Upload Image:
                <input type="file" name="cust_img" class="form-control"></td>
              </tr>

              <tr>
                
                <td><input type="submit" name="submit" class="btn btn-info btn-block" value="Register"></td>
              </tr>
            </tbody>
            </table>
          </form>


<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

<script>
// just for the demos, avoids form submit

$( "#myform" ).validate({
  rules: {


    cust_username: 
    {
      required: true,
      alphanumeric: true

    },

    cust_fname: 
    {
      required: true,
      lettersonly: true

    },

    cust_lname: 
     {
      required: true,
      lettersonly: true

    },

    cust_email: {
      required: true,
      email: true
    },

    cust_gender: "required",
    cust_language: "required",
    cust_address: {
                  required: true,
                  
                  
                },
    cust_mobile: 

     {
      required: true,
      digits: true,
      minlength: 10,
      maxlength: 10

    },

    cust_img:

     {
      required: true,
      extension: "jpg|JPG|png|PNG|jpeg|JPEG|gif|GIF|webp|WEBP"
    },


    cust_password: {
                  required: true,
                  alphanumeric: true,
                  rangelength: [7, 15]
                },

    cust_cpass: {
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