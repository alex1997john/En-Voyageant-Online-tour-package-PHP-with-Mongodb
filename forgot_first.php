<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
</head>
<body>
    <form action="" id="vform" method="POST">
        <label for="email">Enter your email:</label>
        <input id="emailtxt" type="email" id="email" onkeyup="manage(this)" name="email" value="<?php if(isset($_POST['email'])){ echo $_POST['email'];} ?>">
        <button id="btverify" type="submit" name="verify" value="verify">Verify</button>
        <br>
        <br>
    </form>

    <form action="forgot_second.php" id="cform" method="POST" disabled>

        <label for="email">Enter your OTP pin:</label>
        <input type="text" id="otp" name="otp" maxlength="4"  id="pin" pattern="\d{4}" required/>
        <br>
        <br>

        <label for="psw">New Password</label>
        <input type="password" id="pwd" name="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  required>
        <br>
        <br>

        <label for="psw">Confirm Password</label>
        <input type="password" id="cpwd" name="cpwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  required>
        <br>
        <br>
       

        <button type="submit" id="btchange" name="change" value="change">Change</button>
      </form>

     <?php
      
      if(isset($_POST['verify']))
      {
         $email=$_POST['email'];
         $_SESSION["email"] = $email;
        
         
 
         $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
 
 
         $filter = [
             'Email'=>$email
 
         ];
         $query = new MongoDB\Driver\Query($filter);
         $cursor = $manager->executeQuery('EasyPoint.Customer', $query);
 
         $ans = current($cursor->toArray());
         if (!empty($ans)) 
         {
     
             $otp=verify($email);
            
            
         } 
         else 
         {
            
            echo '<script>alert("Invalid user.\nPlease register to proceed!")</script>';
               
         }
        
     }
     function verify($email){
         
         function generateNumericOTP($n) 
         { 
             $generator = "1357902468"; 
             $result = "";
             for ($i = 1; $i <= $n; $i++) 
             { 
                 $result .= substr($generator, (rand()%(strlen($generator))), 1); 
             } 
             return $result; 
         } 
         require_once('PHPMailer/PHPMailerAutoload.php');
         $mail=new PHPMailer();
         $mail->isSMTP();
         $mail->SMTPAuth=true;
         $mail->SMTPSecure='ssl';
         $mail->Host='smtp.gmail.com';
         $mail->Port='465';
         $mail->isHTML();
         $mail->Username='easy.point.project@gmail.com';
         $mail->Password='easypointproject';
 
         $mail->SetFrom('no-reply@easypoint.org');
         $mail->Subject='OTP verification';
         $otp=generateNumericOTP(4);
         $_SESSION["otp"] = $otp;
         $mail->Body="Dear User,\n\n\n\nYour verfication code [$otp]\n\n\n\nPlease do not share your OTP with anyone.\n\n\n\nThank you!";
         $mail->AddAddress($email);
         if(!$mail->Send())
         {
             echo '<script>alert("Dear User,\nError occured while processing.Please try after sometime!")</script>'; 
 
         }
         else
         {
             echo '<script>alert("Dear User,\nPlease check your mail for the verification code!")</script>'; 
             
        ; 
 
             return $otp;
         }
      }
 
      
     ?>
</body>
</html>