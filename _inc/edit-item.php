<?php 

    //include
    require('config.php');

    //update items in DB
    $affected = $database->update('items', 
    [ 'text' => $_POST["message"] ],
    [ 'id' => $_POST["id"] ]
    );

    if ( $affected ) {
        header("Location: $base_url/index.php");
        die();
    };

?>