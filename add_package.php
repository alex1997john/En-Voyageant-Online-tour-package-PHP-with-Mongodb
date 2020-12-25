<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add package</title>
  
    <!-- Font Icon -->
    <link rel="stylesheet" href="signup_asset/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="signup_asset/css/style.css">
   
</head>
<body>
<
    <div class="main">
      <center>
        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST"   action="adminaddpakage.php" name="myForm" enctype="multipart/form-data">
                        <h2 class="form-title">Add Package Details</h2>
                        
                        <div class="form-group">
                            <input type="text" class="form-input" name="pkg_name" id="pkg_id" placeholder="Enter package name" required/>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-input" name="amount" id="amount" placeholder="Amount" required/>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-input" name="duration" id="duration" placeholder="No. of days" required/>
                        </div>
	                    <div class="form-group">
                            <input type="text" class="form-input" name="place" id="place" placeholder="Enter the destinations" required/>
                        </div>
                        <div class="form-group">
                        <select value="" name="type" class="form-input" id="pkg_type" placeholder="enter">
                        <option selected >Enter the package</option>
    		                <option value="family">Family</option>
                            <option value="couple">Couple</option>
                            <option value="Fun">Fun</option>
                              </select>                        
                        </div>
                     
                        <div class="form-group">
                            <textarea class="form-input" name="description" id="dest" rows="5" cols="60" placeholder="description" required></textarea>
                        </div>
                       <div class="form-group">
                      image: <input id="text" type="file" name="fileToUpload">
                       </div>
                       <div></div>
                        <div>
                            <input type="submit" name="add" id="add" class="form-submit" value="Add" action="add_package.php"/>
                        </div>
                    </form>
                </div>
            </div>
        </section></center>

    </div>

    <!-- JS -->
    <script src="signup_asset/vendor/jquery/jquery.min.js"></script>
    <script src="signup_asset/js/main.js"></script>
    
 

</body>



<script type = "text/javascript">
   <!--
      // Form validation code will come here.
      function validate() {
      
         if( document.myForm.mobileno.value.length!= 10) {
            alert( "Please provide valid phone number!" );
            document.myForm.mobileno.focus() ;
            return false;
         }

         if( document.myForm.password.value== document.myForm.re_password.value) {
            alert( "Your Passwords are not matching!" );
            document.myForm.password.focus() ;
            return false;
         }
         return( true );
      }
   //-->
</script>
</html>