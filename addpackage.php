<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addpackage</title>
    <?php include('includes/css.php');?>
    <style>
.a{
  font-family: "Times New Roman", Times, serif;
  font-size:30px;
  font-color:white;
}
.section-top-border{
    background-color: #b3c3ff;
}
/* input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #555;
  outline: none;
} */


    </style>
</head>

<body>

<?php include('includes/header.php');?>
<?php
 $phpVariable = $_GET['data'];
 $id=$phpVariable;
 ?>
<?php
if($_POST){
	 if(isset($_SESSION['login_user'])){

	$first_name=$_POST['first_name'];
	$amount=$_POST['amount'];
	$count=$_POST['count'];
	$adult_count=$_POST['Acount'];
	$child_count=$_POST['Ccount'];
	if($count==""){
		$count=2;
		$adult_count=2;
		$child_count=0;

	}
	$user=$_SESSION['login_user'];
	$mobileno=$_POST['mobileno'];
	$email=$_POST['email'];
	$date=$_POST['date'];
	$booking_date=date("Y-m-d");
	$status="pending";

	
	$doc = ['user' => $user,'amount' => $amount,'first_name' => $first_name,'mobileno'=>$mobileno,'count'=>$count,'email'=>$email,'date'=>$date,'child_count'=>$child_count,'adult_count'=>$adult_count,'booking_date'=>$booking_date,'pkg_id'=>$id,'status'=>$status];
	$_SESSION['value']=$doc;
	$_SESSION['amount']=$amount;
	$_SESSION['email']=$email;

	?>
	<script>
    window.location = 'card.php';
</script>
<?php
}
else{
	echo "<script>if(confirm('You are not login in !!! please login...')){document.location.href='login.php'};</script>";
}
}
?>
<form action="" method="post">
<?php
   
    $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
    $options = [ ];                                            // (2)
    $filter = ['_id' => new MongoDB\BSON\ObjectID( $id )];
    $qry=new MongoDB\Driver\Query($filter, $options);
    $rows=$mng->executeQuery("travelo.package",$qry);
    $v="a";
    
    foreach($rows as $row){ 
        
   
   ?>
<div class="section-top-border">
    <div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8">
						<h3 class="a">Booking Details</h3><br>
						<form action="#">
							<div class="mt-10">
								<input type="text" name="first_name" placeholder="First Name"
									onfocus="this.placeholder = 'Contact Name'" onblur="this.placeholder = 'Contact Name'" required
									class="single-input">
									<input type="hidden" name="amount" value="<?php echo $row->amount;?>">
                            </div>
                            
							<?php
							if($row->type!="couple"){

							?>
							<div class="mt-10">
								<input type="number" name="count" min=1 max=10 placeholder="Number of passangers"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Number of passangers'" required
									class="single-input">
							</div>
							<div class="mt-10">
								<input type="number" name="Acount" min=1 max=10 placeholder=" Number of Adults'"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Number of Adults'" required
									class="single-input">
							</div>
							<div class="mt-10">
								<input type="number" name="Ccount" min=1 max=10 placeholder="Number of children"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Number of children'" required
									class="single-input">
							</div>
							<?php } ?>
							
							<div class="input-group-icon mt-10">
								<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
								<input type="text" name="mobileno" placeholder="Contact Phone Number" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Contact Phone Number'" required class="single-input">
							</div>
							<div class="input-group-icon mt-10">
								<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
								<input type="date" name="date" placeholder="Date" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Date'" required class="single-input">
							</div>

							<div class="input-group-icon mt-10">
								<div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
								<input type="text" name="email" placeholder="Contact Email" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Contact Email'" required class="single-input">
                            </div>
                            
							<br>
                           
                            <div class="form-group mt-3">
                                <button type="submit" class="genric-btn danger circle arrow">Book</button>
                            </div>
                           
							<?php } ?>      
</div>
</div>
</div>
</div>

							</form>
            <?php include('includes/footer.php');?>  
            <?php include('includes/js.php');?>        
</body>
</html>