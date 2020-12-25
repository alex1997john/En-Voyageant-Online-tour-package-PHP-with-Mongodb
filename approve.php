<?php
    $phpVariable = $_GET['data'];
    $id=$phpVariable;
    $manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
    $filter = ['_id' => new MongoDB\BSON\ObjectID( $id )];
    $bulk = new MongoDB\Driver\BulkWrite;
    $bulk->update(
    ['_id' => new MongoDB\BSON\ObjectID( $id )],
    ['$set' => ['status' => 'confirmed']],
    
    );
    $result = $manager->executeBulkWrite('travelo.booking', $bulk);
    header("Location: newbookings.php");
    ?>