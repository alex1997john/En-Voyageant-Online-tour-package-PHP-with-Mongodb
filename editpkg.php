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

    </style>
   
</head>
<body>

<?php
 $phpVariable = $_GET['id'];
 echo $phpVariable;
 $id=$phpVariable;
//  $id=(int)$phpVariable;
    if($_POST){
    $pkg_name=$_POST["pkg_name"];
    echo $pkg_name;
    $amount=$_POST["amount"];
    $duration=$_POST["duration"];
    $description=$_POST["description"];
    $type=$_POST["pkg_type"];
    $dest=$_POST["dest"];
    // $pic=$_POST["pic"];
    $pic1=$_POST["pic1"];
    if($_FILES['pic']['name']==""){
    echo $pic1;
    $manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
    $filter = ['_id' => new MongoDB\BSON\ObjectID( $id )];
    $bulk = new MongoDB\Driver\BulkWrite;
    $bulk->update(
    ['_id' => new MongoDB\BSON\ObjectID( $id )],
    ['$set' => ['pkg_name' => $pkg_name,'amount' => $amount,'duration' => $duration,'dest' => $description,'type' => $type]],
    
    );
    $result = $manager->executeBulkWrite('travelo.package', $bulk);
    echo "success";
    // header("Location: login.php");
    }
     else{
     echo $_FILES['pic']['name'];  
     $target_dir = "upload/";
  $target_file = $target_dir . basename($_FILES["pic"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
  }

  if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["pic"]["name"])). " has been uploaded.";
        $picc=htmlspecialchars( basename( $_FILES["pic"]["name"]));
        echo $pic;
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }
    $date=date("Y-m-d"); 
    $manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
    $bulk = new MongoDB\Driver\BulkWrite;
   
   
    $filter = ['_id' => new MongoDB\BSON\ObjectID( $id )];
   
    $bulk->update(
    ['_id' => new MongoDB\BSON\ObjectID( $id )],
    ['$set' => ['pkg_name' => $pkg_name,'amount' => $amount,'duration' => $duration,'dest' => $description,'type' => $type,'pic' => $picc]],
    
    );
    $result = $manager->executeBulkWrite('travelo.package', $bulk);
    header("Location: adminindex.php");
 }
    
}
?>
  
    <div class="main" >

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" action="" name="myForm" enctype="multipart/form-data">
                       <h2 class="form-title">Edit Package Details</h2>
                       <?php


$id=$phpVariable;
$mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$options = [ ];                                            // (2)
$filter = ['_id' => new MongoDB\BSON\ObjectID( $id )];
$z=implode($filter);
echo $z;
$qry=new MongoDB\Driver\Query($filter, $options);
$rows=$mng->executeQuery("travelo.package",$qry);
                      foreach($rows as $row){
                          ?>
                       
                       
                     
                        
	                            <div class="form-group">
                            <input type="text" class="form-input" name="pkg_name"  value="<?php echo $row->pkg_name;?>" id="title" placeholder="Name of the Package" required/>
                        </div>
                        <div class="form-group">
                            <input type="number" value="<?php echo $row->amount;?>" class="form-input" name="amount" id="amount" placeholder="Amount" required/>
                        </div>
                        <div class="form-group">
                            <input type="number" value="<?php echo $row->duration;?>" class="form-input" name="duration" id="duration" placeholder="No. of days" required/>
                        </div>
	                    <div class="form-group">
	                    <textarea value="<?php echo $row->dest;?>" class="form-input" name="description" id="dest" rows="5" cols="60"  required><?php echo $row->dest;?></textarea>
                        </div>
                       <div class="form-group">
	                        <select value="<?php echo $row->type;?>" name="pkg_type" class="form-input" id="pkg_type">
    		                <option selected><?php echo $row->type;?></option>
    		                <option value="family">Family</option>
                            <option value="couple">Couple</option>
                            <option value="Fun">Fun</option>
  		                    </select>
	                    </div>
	                    
                       <div class="form-group">
                            <input type="text" value="<?php echo $row->place;?>" class="form-input" name="dest" id="dest" placeholder="Name of destinations" required/>
                            
                        </div>
                       <div class="form-group">
                       <div class="row">
                       <input type="hidden" value="<?php echo $row->pic;?>" name="pic1">
                     <label>image:<?php echo $row->pic;?> <input type="file" name="pic" value="<?php echo $row->pic;?>"/> </label> 
                      
                       </div></div>
                       
                        <div>
                            <input type="submit"  class="form-submit" />
                        </div>
                      <?php } ?>
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