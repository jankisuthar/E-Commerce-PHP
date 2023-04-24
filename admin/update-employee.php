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
         


         <form id="myform" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">

            <h2 style="text-align: center;"><u>Update Employee Profile</u></h2>
            <table class="table table-borderless">
              <thead>
                <th colspan="2" style="text-align: center;font-size: 20px;"></th>
              </thead>

              <tbody>

             

             <tr>
                <td>Userame:
                <input type="text" name="emp_username" value="<?php echo $fetch->emp_username;?>" class="form-control"></td>
             </tr>

             <tr>
                <td>First Name:
                <input type="text" name="emp_fname" value="<?php echo $fetch->emp_fname;?>" class="form-control"></td>
              </tr>

              <tr>
                <td>Last Name:
                <input type="text" name="emp_lname" value="<?php echo $fetch->emp_lname;?>" class="form-control"></td>
              </tr>

              <tr>
                <td>Email:
                <input type="text" name="emp_email"  class="form-control" value="<?php echo $fetch->emp_email;?>" disabled=""></td>
              </tr>

              
              <tr>

             

              <tr>

                <td>Gender:

                  <?php 

                  $gen = $fetch->emp_gender;

                  if($gen == "Male")
                  {


                   ?>
                  
               <div class="form-check-inline">
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="emp_gender" value="Male" checked>Male
                </label>
              </div>
              <div class="form-check-inline">
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="emp_gender" value="Female">Female
                </label>
              </div>

            <?php }?>


                  <?php 

                  $gen = $fetch->emp_gender;

                  if($gen == "Female")
                  {


                   ?>
                  
               <div class="form-check-inline">
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="emp_gender" value="Male">Male
                </label>
              </div>
              <div class="form-check-inline">
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="emp_gender" value="Female" checked>Female
                </label>
              </div>

            <?php }?>
              </td>
              </tr>


             

              <tr>
                <td>Languages Known:
                 <div class="form-check-inline">
                  <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="Gujarati" name="emp_language[]" value="Gujarati"

                   <?php 

                      $lang = $fetch->emp_language;
                      $lang_arr = explode(",",$lang);
                      if(in_array("Gujarati", $lang_arr))
                      {
                        echo "checked";
                      }

                  ?>

                  >Gujarati
                 </label>
                </div>
                <div class="form-check-inline">
                  <label class="form-check-label">
                 <input type="checkbox" class="form-check-input" value="Hindi" name="emp_language[]" value="Hindi"

                  <?php 

                      $lang = $fetch->emp_language;
                      $lang_arr = explode(",",$lang);
                      if(in_array("Hindi", $lang_arr))
                      {
                        echo "checked";
                      }

                  ?>
                 >Hindi
                 </label>
                  </div>
                  <div class="form-check-inline">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" value="English" name="emp_language[]" value="English"


                       <?php 

                      $lang = $fetch->emp_language;
                      $lang_arr = explode(",",$lang);
                      if(in_array("English", $lang_arr))
                      {
                        echo "checked";
                      }

                  ?>
                      >English
                    </label>
                  </div>
              </td>
              </tr>

             
              <tr>
                <td>
                  <div class="form-group">
              <label for="comment">Address:</label>
              <input type="text" name="emp_address" class="form-control" value="<?php echo $fetch->emp_address;?>"> 
                  </div>
            </td>

               </tr>

               <tr>
                <td>Mobile:
                <input type="text" class="form-control" name="emp_mobile" value="<?php echo $fetch->emp_mobile;?>"></td>
              </tr>
           

              <tr>
                <td>Upload Image:
                  <img src="../web/images/emp_images/<?php echo $fetch->emp_img;?>" height="50" width="50">
                <input type="file" name="emp_img" class="form-control"></td>
              </tr>

              <tr>
                
                <td><input type="submit" name="submit" class="btn btn-info btn-block" value="Save"></td>
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


    emp_username: 
    {
      required: true,
      alphanumeric: true

    },

    emp_fname: 
    {
      required: true,
      lettersonly: true

    },

    emp_lname: 
     {
      required: true,
      lettersonly: true

    },

    emp_email: {
      required: true,
      email: true
    },

    /* emp_dob: {
      required: true,
      
    },*/

    emp_gender: "required",
    emp_language: "required",
    emp_address: {
                  required: true,
                  
                  
                },
    emp_mobile: 

     {
      required: true,
      digits: true,
      minlength: 10,
      maxlength: 10

    },

  /*  emp_img:

     {
      required: true,
      extension: "jpg|JPG|png|PNG|jpeg|JPEG|gif|GIF|webp|WEBP"
    },*/


    emp_password: {
                  required: true,
                  alphanumeric: true,
                  rangelength: [7, 15]
                },

    emp_cpass: {
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