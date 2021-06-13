<?php 

// Using Medoo namespace.
use Medoo\Medoo;
 
// Connect the database.
$database = new Medoo([
    'type' => 'mysql',
    'host' => 'localhost',
    'database' => 'todo',
    'username' => 'root',
    'password' => ''
]);

?>