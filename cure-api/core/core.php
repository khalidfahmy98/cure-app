<?php 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
ini_set("allow_url_fopen", 1);
// error_reporting(0);
$GLOBALS['config'] = array(
    'mysql' => array(
        'host'      =>  'localhost',
        'username'  =>  'root',
        'password'  =>  '',
        'db'        =>  'cure'
    )
);
