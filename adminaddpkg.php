<?php
$mongo=new MongoDB\Driver\Manager("mongodb://localhost:27017");
$bulk = new MongoDB\Driver\BulkWrite;

if($_POST){
    $pkg_id=$_POST["pkg_id"];
    $amount=$_POST["amount"];
    $duration=$_POST["duration"];
    $place=$_POST["place"];
    $count=$_POST["count"];
    $dest=$_POST["dest"];
    
    echo $pkg_id;?><br><?php
    echo $amount;?><br><?php
    echo $duration;?><br><?php
    echo $place;?><br><?php
    echo $count;?><br><?php
    echo $dest;?><br><?php
    

   
    $doc = ['place'=>$place];
    
    // $qry=new MongoDB\Driver\Query(['pkg_id'=>$pkg_id]);
    // $rows=$mongo->executeQuery("travelo.package_details",$qry);
    $v="";
    // foreach($rows as $row){
    //    $v=$row->pkg_id;
   
    // }
//     if($v==""){
//     // $bulk->insert($doc);
//     // $mongo->executeBulkWrite('travelo.package', $bulk);
//     header("Location: adminaddpkg.php");
//     }
//     else{
//         echo"Package id already exists";
//     }
}
else{
    echo "no data inserted";
}