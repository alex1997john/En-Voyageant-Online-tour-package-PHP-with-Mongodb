<?php
session_start();
?>
<?php
   
     if(isset($_POST['change']))
     {

        $pwd=$_POST['pwd'];
        $eotp=$_POST['otp'];
        // echo '<script>alert("Dear User,\nIncorrect OTP, '.$eotp.'verificati  '.$pwd.'on failed!")</script>'; 
        // echo '<script>alert("Dear User,\nIncorrect OTP,'.$_SESSION['otp'].' verification failed!")</script>'; 


        $correctOTP=$_SESSION['otp'];
        $ciphering = "AES-128-CTR";
        
        $iv_length = openssl_cipher_iv_length($ciphering); 
        $options = 0;
        $encryption_iv = '1234567891011121'; 
        $encryption_key = "EasyPontShopping";
        $encryption = openssl_encrypt($pwd, $ciphering, 
        $encryption_key, $options, $encryption_iv);
        
        if($correctOTP==$eotp)
        {
            $bulk = new MongoDB\Driver\BulkWrite;
            $bulk->update(
            ['Email' => $_SESSION['email']],
            ['$set' => ['Password' => $encryption]],
            );
            $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
            $result = $manager->executeBulkWrite('EasyPoint.Customer', $bulk);
            echo '<script>alert("Dear User,\nYou have successfully reset your password!")</script>'; 
           // header("Location: forgot1.php");   Provide
           
        }
        else
        {
            echo '<script>alert("Dear User,\nIncorrect OTP, verification failed!\nPleae try after sometime!")</script>'; 
            //header("Location: forgot_first.php");

        }
        

     }

     

?>
