<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/cardstyle.css">
    <style> 

    /* @import url(https://fonts.googleapis.com/css?family=Roboto:400,900,700,500);

body {
  padding: 60px 0;
  background-color: rgba(178,209,229,0.7);
  margin: 0 auto;
  width: 600px;
}
.body-text {
  padding: 0 20px 30px 20px;
  font-family: "Roboto";
  font-size: 1em;
  color: #333;
  text-align: center;
  line-height: 1.2em;
}
.form-container {
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.card-wrapper {
  background-color: #6FB7E9;
  width: 100%;
  display: flex;

}
.personal-information {
  background-color: #3C8DC5;
  color: #fff;
  padding: 1px 0;
  text-align: center;
}
h1 {
  font-size: 1.3em;
  font-family: "Roboto"
}
input {
  margin: 1px 0;
  padding-left: 3%;
  font-size: 14px;
}
input[type="text"]{
  display: block;
  height: 50px;
  width: 97%;
  border: none;
}
input[type="email"]{
  display: block;
  height: 50px;
  width: 97%;
  border: none;
}
input[type="submit"]{
  display: block;
  height: 60px;
  width: 100%;
  border: none;
  background-color: #3C8DC5;
  color: #fff;
  margin-top: 2px;
  curson: pointer;
  font-size: 0.9em;
  text-transform: uppercase;
  font-weight: bold;
  cursor: pointer;
}
input[type="submit"]:hover{
  background-color: #6FB7E9;
  transition: 0.3s ease;
}
#column-left {
  width: 46.5%;
  float: left;
  margin-bottom: 2px;
}
#column-right {
  width: 46.5%;
  float: right;
}

@media only screen and (max-width: 480px){
  body {
    width: 100%;
    margin: 0 auto;
  }
  .form-container {
    margin: 0 2%;
  }
  input {
    font-size: 1em;
  }
  #input-button {
    width: 100%;
  }
  #input-field {
    width: 96.5%;
  }
  h1 {
    font-size: 1.2em;
  }
  input {
    margin: 2px 0;
  }
  input[type="submit"]{
    height: 50px;
  }
  #column-left {
    width: 96.5%;
    display: block;
    float: none;
  }
  #column-right {
    width: 96.5%;
    display: block;
    float: none;
  }
}
 */


    </style>
</head>
<body>
<?php
   include('session.php');
?> 
<?php if($_POST){
$name=$_POST['first-name'];
$card_number=$_POST['number'];
$expiry=$_POST['expiry'];
$cvv=$_POST['cvc'];


          $doc=$_SESSION['value'];
          $email=$_SESSION['email'];
          $results = print_r($doc, true);  
  
    $mongo=new MongoDB\Driver\Manager("mongodb://localhost:27017");
    $bulk = new MongoDB\Driver\BulkWrite;
    $qry=new MongoDB\Driver\Query([]);
    $rows=$mongo->executeQuery("travelo.payment",$qry);
    
    foreach($rows as $row){
       if(strtoupper($name)==$row->name && $card_number==$row->card_no && $expiry==$row->expire && $cvv==$row->cvv){
        // session_register("email");
        $bulk->insert($doc);
        $mongo->executeBulkWrite('travelo.booking', $bulk);
        

    
    $mailname = "name";
    $mailto = $email;
    $mailphone="895488";
    $maildata = "haii alex";
    $mailmsg="gundaa";
    $mailSub = "Booking Confirmation Email";
    //Email Html Template
    $mailMsg = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
    <html xmlns='http://www.w3.org/1999/xhtml' xmlns:o='urn:schemas-microsoft-com:office:office'>
    
    <head>
        <meta charset='UTF-8'>
        <meta content='width=device-width, initial-scale=1' name='viewport'>
        <meta content='telephone=no' name='format-detection'>
        <title></title>
        <!--[if (mso 16)]>
        <style type='text/css'>
        a {text-decoration: none;}
        </style>
        <![endif]-->
        <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]-->
        <!--[if gte mso 9]>
    <xml>
        <o:OfficeDocumentSettings>
        <o:AllowPNG></o:AllowPNG>
        <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->
    </head>
    
    <body>
        <div class='es-wrapper-color'>
            <!--[if gte mso 9]>
                <v:background xmlns:v='urn:schemas-microsoft-com:vml' fill='t'>
                    <v:fill type='tile' color='#cccccc'></v:fill>
                </v:background>
            <![endif]-->
            <table class='es-wrapper' width='100%' cellspacing='0' cellpadding='0'>
                <tbody>
                    <tr>
                        <td class='esd-email-paddings' valign='top'>
                            <table class='es-content esd-header-popover' cellspacing='0' cellpadding='0' align='center'>
                                <tbody>
                                    <tr>
                                        <td class='es-adaptive esd-stripe' esd-custom-block-id='24' align='center'>
                                            <table class='es-content-body' style='background-color: #efefef;' width='600' cellspacing='0' cellpadding='0' bgcolor='#efefef' align='center'>
                                                <tbody>
                                                    <tr>
                                                        <td class='esd-structure es-p10' align='left'>
                                                            <!--[if mso]><table width='580'><tr><td width='280' valign='top'><![endif]-->
                                                            <table class='es-left' cellspacing='0' cellpadding='0' align='left'>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class='esd-container-frame' width='280' align='left'>
                                                                            <table width='100%' cellspacing='0' cellpadding='0'>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class='es-infoblock esd-block-text' align='center'>BOOKING STATUS
                                                                                        
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!--[if mso]></td><td width='20'></td><td width='280' valign='top'><![endif]-->
                                                            <table class='es-right' cellspacing='0' cellpadding='0' align='right'>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class='esd-container-frame' width='280' align='left'>
                                                                            <table width='100%' cellspacing='0' cellpadding='0'>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class='es-infoblock esd-block-text' align='right'>
                                                                                            <p><a href='https://viewstripo.email' target='_blank' class='view'></a></p>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!--[if mso]></td></tr></table><![endif]-->
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class='es-header' cellspacing='0' cellpadding='0' align='center'>
                                <tbody>
                                    <tr>
                                        <td class='esd-stripe' esd-custom-block-id='3089' align='center'>
                                            <table class='es-header-body' width='600' cellspacing='0' cellpadding='0' align='center'>
                                                <tbody>
                                                    <tr>
                                                        <td class='esd-structure es-p10t es-p10b es-p10r es-p10l' align='left'>
                                                            <table width='100%' cellspacing='0' cellpadding='0'>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class='esd-container-frame' width='580' valign='top' align='center'>
                                                                            <table width='100%' cellspacing='0' cellpadding='0'>
                                                                                <tbody>
                                                                                    <tr>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class='esd-structure es-p5r es-p5l' style='background-color: #4a7eb0;' bgcolor='#4a7eb0' align='left'>
                                                            <table width='100%' cellspacing='0' cellpadding='0'>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class='esd-container-frame' width='590' valign='top' align='center'>
                                                                            <table width='100%' cellspacing='0' cellpadding='0'>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class='esd-empty-container' align='center' style='display: none;'></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class='es-content' cellspacing='0' cellpadding='0' align='center'>
                                <tbody>
                                    <tr>
                                        <td class='esd-stripe' esd-custom-block-id='3109' align='center'>
                                            <table class='es-content-body' style='background-color: #ffffff;' width='600' cellspacing='0' cellpadding='0' bgcolor='#ffffff' align='center'>
                                                <tbody>
                                                    <tr>
                                                        <td class='esd-structure es-p20t es-p20b es-p40r es-p40l' esd-general-paddings-checked='true' align='left'>
                                                            <table width='100%' cellspacing='0' cellpadding='0'>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class='esd-container-frame' width='520' valign='top' align='center'>
                                                                            <table width='100%' cellspacing='0' cellpadding='0'>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class='esd-block-text' align='left'>
                                                                                            <h1 style='color: #4a7eb0;'>Booking Confirmed</h1>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class='esd-block-spacer es-p5t es-p20b' style='font-size:0' align='left'>
                                                                                            <table width='5%' height='100%' cellspacing='0' cellpadding='0' border='0'>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td style='border-bottom: 2px solid #999999; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; height: 1px; width: 100%; margin: 0px;'></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class='esd-block-text es-p10b' align='left'> 
                                                                                             <p><span style='font-size: 16px; line-height: 150%;'>
                                                                                             Hello   $v !!! Welcome to En-Voyagant
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class='esd-block-text' align='left'>
                                                                                            Your Booking is confirmed ....For  details you will get a detailed email. please wait
                                                                                            
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class='esd-block-text' align='left'>
                                                                                            <p>If you need help visit the <a target='_blank' href='contact.php'>Help</a> page or <a target='_blank' href='http://localhost/travelo/contact.php'>contact us</a>.</p>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class='esd-structure es-p20t es-p20b es-p40r es-p40l' esd-general-paddings-checked='true' align='left'>
                                                            <table width='100%' cellspacing='0' cellpadding='0'>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class='esd-container-frame' width='520' valign='top' align='center'>
                                                                            <table width='100%' cellspacing='0' cellpadding='0'>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class='esd-block-spacer es-p20t es-p20b es-p5r' style='font-size:0' align='center'>
                                                                                            <table width='100%' height='100%' cellspacing='0' cellpadding='0' border='0'>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td style='border-bottom: 1px solid #ffffff; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; height: 1px; width: 100%; margin: 0px;'></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class='esd-footer-popover es-content' cellspacing='0' cellpadding='0' align='center'>
                                <tbody>
                                    <tr>
                                        <td class='esd-stripe' align='center'>
                                            <table class='es-content-body' style='background-color: transparent;' width='600' cellspacing='0' cellpadding='0' align='center'>
                                                <tbody>
                                                    <tr>
                                                        <td class='esd-structure es-p30t es-p30b es-p20r es-p20l' align='left'>
                                                            <table width='100%' cellspacing='0' cellpadding='0'>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class='esd-container-frame' width='560' valign='top' align='center'>
                                                                            <table width='100%' cellspacing='0' cellpadding='0'>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class='esd-empty-container' align='center' style='display: none;'></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
    
    </html>
    ";
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();

   
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465;  
   $mail ->IsHTML(true);
   $mail ->Username = "18cs601002@kristujayanti.com";
   $mail ->Password = "Marykutty1.";
   $mail ->SetFrom("18cs601002@kristujayanti.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
    echo "<script>if(confirm('Your Bookingis is confirmed.Please check your email for confirmation.')){document.location.href='index.php'};</script>";
   }




       
       }
      }


}

?>

  


    <div class="body-text">Write your name in the right fields. Also write your imaginary card number. By clicking CCV field card will turn.</div>
    <form action="" method="POST" >
      
      <!-- <input type="hidden" -->
      <div class="form-container">
        <div class="personal-information">
          <h1>Payment Information</h1>
          
        </div> <!-- end of personal-information -->
        <?php $amount=$_SESSION['amount'];
          ?>
             
            <input id="input-field" type="text" name="first-name" placeholder="Enter Name"/>
            
            <input id="input-field" type="text" name="number" placeholder="Card Number"/>
            <input id="column-left" type="text" name="expiry" placeholder="MM / YY"/>
            <input id="column-right" type="text" name="cvc" placeholder="CCV"/>
           
            <div class="card-wrapper"></div>
        
            
            <input  type="submit" id="input-button" value="PAY  <?php echo $amount;?> ">
          
      </form>
    </div> 
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/121761/card.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/121761/jquery.card.js'></script><script  src="js/script.js"></script>

</body>
</html>