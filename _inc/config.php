<?php

//show all errors
ini_set("display_startup_errors", "On");
ini_set("display_errors", "On");
error_reporting(-1);

// Require Composer's autoloader.
require("vendor/autoload.php");

//Global variables
$base_url = 'http://localhost/webrebel2/ToDoApp/master';

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

//initialize Whoops package for error display
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

?>