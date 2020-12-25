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
    <?php include('includes/header1.php');?>


    


    
 

    

    <table class="responstable">
  
  <tr>
    <th>Subject</th>
    <th data-th="Driver details"><span>Message</span></th>
    <th>Name</th>
    <th>Email</th>
  
    <th>Action</th>
    
  </tr><?php
    $mongo=new MongoDB\Driver\Manager("mongodb://localhost:27017");
    $bulk = new MongoDB\Driver\BulkWrite;
    $qry=new MongoDB\Driver\Query(['status'=>"not_replyed"]);
    $rows=$mongo->executeQuery("travelo.enquiry",$qry);
    
    foreach($rows as $row){
           
        ?>
  
  <tr>
  <tr>
<td><?php echo $row->email;?></td>
  <td><?php echo $row->msg;?></td>
<td><?php echo $row->name;?></td>
<td><?php echo $row->subject;?></td>
<td><a href="reply.php?id=<?php echo $row->_id; ?>">Reply</a></td>
    
    
</tr>
<?php } 

 ?>
    
 


    

  

  
  
  

<?php include('includes/js.php');?>
<script>
        $('#datepicker1').datepicker({
            format: 'yyyy-mm-dd',
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
    </script>
    <script>
        $('#datepicker2').datepicker({
            format: 'yyyy-mm-dd',
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
    </script>
</body>

</html>





<!-- // $mongo=new MongoDB\Driver\Manager("mongodb://localhost:27017");
//     $bulk = new MongoDB\Driver\BulkWrite;
//     $qry=new MongoDB\Driver\Query([]);
//     $rows=$mongo->executeQuery("travelo.enquiry",$qry);
    
//     foreach($rows as $row){
           
//         ?> -->
  
