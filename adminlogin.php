<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="signup_asset/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="signup_asset/css/style.css">
   
</head>
<body>
<?php
  
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {

    $uname=$_POST['uname'];
    $password=$_POST['password'];
    $mongo=new MongoDB\Driver\Manager("mongodb://localhost:27017");
    $qry=new MongoDB\Driver\Query([]);
    $rows=$mongo->executeQuery("travelo.adminlogin",$qry);
    
    foreach($rows as $row){
       if($uname==$row->uname && $password==$row->password){
        $_SESSION['login_user'] = $uname;
        header("Location: adminindex.php");
       }
   
    }
    echo"Your username or password is incorrect please check.......!!!!!";
   }
    
    
    ?>
    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="">
                        <h2 class="form-title">Please Login</h2>
                        
                        <div class="form-group">
                            <input type="text" class="form-input" name="uname" id="uname" placeholder="Username" required/>
                        </div>
                        
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password" required/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        
                        
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Login"/>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="signup_asset/vendor/jquery/jquery.min.js"></script>
    <script src="signup_asset/js/main.js"></script>
    


</body>
</html>