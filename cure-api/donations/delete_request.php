<?php 
    require '../core/init.php';
    $donations = new donations();
    if ( input::get('token') == $token) {
            http_response_code(200);
            if ( is_numeric(input::get("requestId"))) {
                $donations->delete(input::get('requestId'));
            }else{
                echo json_encode(array(
                    "message" => "Request Id Must be Integer ",
                    "error" => true 
                ));
            }
        }else{
        http_response_code(200);
        echo json_encode(array(
            "message" => "Tokens Wrong",
            "error" => true 
        ));
    }

