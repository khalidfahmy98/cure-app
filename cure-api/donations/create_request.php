<?php 
    require '../core/init.php';
    $donations = new donations();
    http_response_code(200);
    if ( input::get('token') == $token) {
        
    }else{
        echo json_encode(array(
            "message" => "Token Wrong",
            "error" => true 
        ));

    }

