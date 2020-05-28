<?php 
session_start();
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
