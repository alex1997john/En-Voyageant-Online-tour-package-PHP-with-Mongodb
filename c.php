<!doctype html>
<html class="no-js" lang="zxx">

<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Travelo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<?php include('includes/css.php');?>
<style>
    /*

RESPONSTABLE 2.0 by jordyvanraaij
  Designed mobile first!

If you like this solution, you might also want to check out the 1.0 version:
  https://gist.github.com/jordyvanraaij/9069194

*/
.responstable {
  margin: 1em 0;
  width: 100%;
  overflow: hidden;
  background: #fff;
  color: #024457;
  border-radius: 10px;
  border: 1px solid #167f92;
}
.responstable tr {
  border: 1px solid #d9e4e6;
}
.responstable tr:nth-child(odd) {
  background-color: #eaf3f3;
}
.responstable th {
  display: none;
  border: 1px solid #fff;
  background-color: #167f92;
  color: #fff;
  padding: 1em;
}
.responstable th:first-child {
  display: table-cell;
  text-align: center;
}
.responstable th:nth-child(2) {
  display: table-cell;
}
.responstable th:nth-child(2) span {
  display: none;
}
.responstable th:nth-child(2):after {
  content: attr(data-th);
}
@media (min-width: 480px) {
  .responstable th:nth-child(2) span {
    display: block;
  }
  .responstable th:nth-child(2):after {
    display: none;
  }
}
.responstable td {
  display: block;
  word-wrap: break-word;
  max-width: 7em;
}
.responstable td:first-child {
  display: table-cell;
  text-align: center;
  border-right: 1px solid #d9e4e6;
}
@media (min-width: 480px) {
  .responstable td {
    border: 1px solid #d9e4e6;
  }
}
.responstable th,
.responstable td {
  text-align: left;
  margin: 0.5em 1em;
}
@media (min-width: 480px) {
  .responstable th,
  .responstable td {
    display: table-cell;
    padding: 1em;
  }
}

body {
  padding: 0 2em;
  font-family: Arial, sans-serif;
  color: #024457;
  background: #f2f2f2;
}

h1 {
  font-family: Verdana;
  font-weight: normal;
  color: #024457;
}
h1 span {
  color: #167f92;
}

</style>
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <?php include('includes/header.php');?>


    <?php
 if($_SERVER["REQUEST_METHOD"] == "POST") {
    ?>
    <table class="responstable">
  
  <tr>
    <th>User</th>
    <th data-th="Driver details"><span>contact name</span></th>
    <th>Total</th>
    <th>Adults</th>
    <th>childs</th>
    <th>Contact mobileno</th>
    <th>Contaact email</th>
    <th>date</th>
    <th>booking date</th>
    <th>Amount</th>
    <th>package</th>
  </tr><?php
  $start=$_POST["start"];
  $end=$_POST["end"];
//    $start="2020-11-25";
//    $end="2020-11-30";
// $start= (String) $start;
// $end= (String) $end;
echo gettype($start) ;
echo $start;
echo $end;
    $mongo=new MongoDB\Driver\Manager("mongodb://localhost:27017");
    $bulk = new MongoDB\Driver\BulkWrite;
    $qry=new MongoDB\Driver\Query(["booking_date" => array('$gt' => $start, '$lt' => $end)]);
    $rows=$mongo->executeQuery("travelo.booking",$qry);
    
    foreach($rows as $row){
           
        ?>
  
  <tr>
    <td><?php echo $row->user;?></td>
    <td><?php echo $row->first_name;?></td>
    <td><?php echo $row->count;?></td>
    <td><?php echo $row->adult_count;?></td>
    <td><?php echo $row->child_count;?></td>
    <td><?php echo $row->mobileno;?></td>
    <td><?php echo $row->email;?></td>
    <td><?php echo $row->date;?></td>
    <td><?php echo $row->booking_date;?></td>
    <td><?php echo $row->amount;?></td>
    <td><a href="description.php?data=<?=$row->pkg_id?>"><?php echo $row->pkg_id;?></a></td>
    
  </tr>
<?php }
}
?>

    
</body>

</html>