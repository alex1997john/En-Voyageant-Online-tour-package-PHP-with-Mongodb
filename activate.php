    <?php
    $id=$_GET['id'];
    $manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
    $filter = ['_id' => new MongoDB\BSON\ObjectID( $id )];
    $bulk = new MongoDB\Driver\BulkWrite;
    $bulk->update(
    ['_id' => new MongoDB\BSON\ObjectID( $id )],
    ['$set' => ['status' => "active"]]
    
    );
    $result = $manager->executeBulkWrite('travelo.user', $bulk);
    echo "<script>
    alert('successfully Activated...!');
    window.location.href='http://localhost/travelo/user_view.php';
    </script>"
    ?>