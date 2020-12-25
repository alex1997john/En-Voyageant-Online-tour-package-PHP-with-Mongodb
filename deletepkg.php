<?php
$phpVariable = $_GET['id'];
echo $phpVariable;
$id=$phpVariable;
$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
$delRec = new MongoDB\Driver\BulkWrite;
$delRec->delete(['_id' => new MongoDB\BSON\ObjectID( $id )]);
$result = $manager->executeBulkWrite('travelo.package', $delRec);
echo "sucess";