<?php 
    require '../core/init.php';
    $donations = new donations();
    if ( input::get('token') == $token) {
            http_response_code(200);
            $donationsArr = (array) $donations->ListRequests();
            echo json_encode($donationsArr);
    }else{
        http_response_code(200);
        echo json_encode(array(
            "message" => "Tokens Wrong",
            "error" => true 
        ));
    }

