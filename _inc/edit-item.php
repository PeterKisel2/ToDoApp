<?php 

    //include
    require('config.php');

    //add new items to DB
    $id = $database->insert('items', [
        'text' => $_POST["message"]
    ]);

    if ( $id ) {
        die("success");
    };

?>