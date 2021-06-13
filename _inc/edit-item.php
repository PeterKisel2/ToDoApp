<?php 

    //include
    require('config.php');

    //update items in DB
    if ( $_POST["message"] === "") {

        $affected = $database->delete('items', 
        [ 'id' => $_POST["id"] ]
        );

    } else {

        $affected = $database->update('items', 
        [ 'text' => $_POST["message"] ],
        [ 'id' => $_POST["id"] ]
        );

    };

    if ( $affected ) {
        redirect('/');
    };

?>