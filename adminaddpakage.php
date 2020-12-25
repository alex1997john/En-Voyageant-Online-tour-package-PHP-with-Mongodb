<?php
$mongo=new MongoDB\Driver\Manager("mongodb://localhost:27017");
$bulk = new MongoDB\Driver\BulkWrite;
$qry=new MongoDB\Driver\Query([]);
$rows=$mongo->executeQuery("travelo.package",$qry);
$pkg_id=0;
foreach($rows as $row){
  $pkg_id=$row->pkg_id;
}
$pkg_id=$pkg_id+1;


echo $pkg_id;
if($_POST){
  //$pkg_id=$_POST["pkg_id"];
  $pkg_name=$_POST["pkg_name"];
  $amount=$_POST["amount"];
  $duration=$_POST["duration"];

  $place=$_POST["place"];
  $type=$_POST["type"];
  $dest=$_POST["description"]; 
  $target_dir = "upload/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
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
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        $pic=htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
        echo $pic;
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }
$date=date("Y-m-d");
  $doc = ['pkg_id' => $pkg_id,'pkg_name' => $pkg_name,'amount' => $amount,'type' => $type,'duration' => $duration,'place' => $place,'dest'=>$dest,'pic'=>$pic,'date'=>$date];
  $bulk->insert($doc);
  $mongo->executeBulkWrite('travelo.package', $bulk);
  echo"successful";
  header("Location: add_package.php");
}
else{
  echo "no data inserted";
}
?>