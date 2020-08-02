<?php 
session_start();
ob_start();
// error_reporting(0);
$GLOBALS['config'] = array(
    'mysql' => array(
        'host'      =>  'localhost',
        'username'  =>  'root',
        'password'  =>  '',
        'db'        =>  'cure'
    ),
    'remember' => array (
        'cookie_name'   => 'hash',
        'cookie_expiry' => 604800
    ),
    'session' => array (
        'session_name' => 'user',
        'token_name'   => 'token'
    )
);
spl_autoload_register(function($class){
    require_once "../classes/" . $class . ".php";
});
require_once '../functions/sanitize.php';

$patient = new patient();
