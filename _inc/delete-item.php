<?php 

    //include
    require('config.php');

    //delete items in DB
    $affected = $database->delete('items', 
    [ 'id' => $_POST["id"] ]
    );

    if ( $affected ) {
        redirect('/');
    };

?>