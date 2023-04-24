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

            <h2 style="text-align: center;"><u>Update User Profile</u></h2>
            <table class="table table-borderless">
              <thead>
                <th colspan="2" style="text-align: center;font-size: 20px;"></th>
              </thead>

              <tbody>


             <tr>
                <td>Userame:
                <input type="text" name="cust_username" value="<?php echo $fetch->cust_username;?>" class="form-control"></td>
             </tr>

             <tr>
                <td>First Name:
                <input type="text" name="cust_fname" value="<?php echo $fetch->cust_fname;?>" class="form-control"></td>
              </tr>

              <tr>
                <td>Last Name:
                <input type="text" name="cust_lname" value="<?php echo $fetch->cust_lname;?>" class="form-control"></td>
              </tr>

              <tr>
                <td>Email:
                <input type="text" name="cust_email" value="<?php echo $fetch->cust_email;?>" class="form-control" disabled></td>
              </tr>
              

              <tr>

                <td>Gender:

                  <?php 
                  $gen = $fetch->cust_gender;
                  if($gen=='Male')
                  {
                  ?>
               <div class="form-check-inline">
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="cust_gender" value="Male" checked>Male
                </label>
              </div>
              <div class="form-check-inline">
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="cust_gender" value="Female">Female
                </label>
              </div>
            <?php } ?>

              <?php 
                  $gen = $fetch->cust_gender;
                  if($gen=='Female')
                  {
                  ?>
               <div class="form-check-inline">
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="cust_gender" value="Male" checked>Male
                </label>
              </div>
              <div class="form-check-inline">
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="cust_gender" value="Female" checked>Female
                </label>
              </div>
            <?php } ?>



              </td>
              </tr>


             

              <tr>
                <td>Languages Known:
                 <div class="form-check-inline">
                  <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" id="cust_language" value="Gujarati" name="cust_language[]" 

                  <?php 

                      $lang = $fetch->cust_language;
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
                 <input type="checkbox" class="form-check-input" id="cust_language" value="Hindi" name="cust_language[]"

                 <?php 

                      $lang = $fetch->cust_language;
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
                      <input type="checkbox" class="form-check-input" id="cust_language" value="English" name="cust_language[]"

                      <?php 

                      $lang = $fetch->cust_language;
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
              <input type="text"class="form-control" name="cust_address" value="<?php echo $fetch->cust_address;?>">
              </div>
            </td>

               </tr>

               <tr>
                <td>Mobile:
                <input type="text" class="form-control" name="cust_mobile" value="<?php echo $fetch->cust_mobile;?>"></td>
              </tr>
           

              <tr>
                <td><img src="../web/images/cust_images/<?php echo $fetch->cust_img?>" height="50" width="50">
                <input type="file" name="cust_img" class="form-control"></td>
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