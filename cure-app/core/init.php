<?php 
require 'core.php';
spl_autoload_register(function($class){
    require_once "classes/" . $class . ".php";
});
require_once 'functions/sanitize.php';

$patient = new patient();