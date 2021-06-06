<?php 

//show all errors
ini_set("display_startup_errors", "On");
ini_set("display_errors", "On");
error_reporting(-1);

// Require Composer's autoloader.
require_once("vendor/autoload.php");

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

echo "<pre>";
print_r( $database->info() );
echo "</pre>";

?>