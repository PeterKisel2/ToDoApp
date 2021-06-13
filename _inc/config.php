<?php

//show all errors
ini_set("display_startup_errors", "On");
ini_set("display_errors", "On");
error_reporting(-1);

// Require Composer's autoloader.
require("vendor/autoload.php");

// Variables
require("variables.php");

//Database - Medoo
require("database.php");

//Functions
require("functions.php");

//initialize Whoops package for error display
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

?>