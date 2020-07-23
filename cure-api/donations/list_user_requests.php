<?php 
    require '../core/init.php';
    $donations = new donations();
    http_response_code(200);
    if ( input::get('token') == $token) {
        if( is_numeric(input::get("user-id"))) {
            $userRequestsArr = (array) $donations->ListUserRequests(input::get('user-id'));
            echo json_encode($userRequestsArr);
        }else{
            echo json_encode(array(
                "message" => "user id wrong",
                "error" => true 
            ));
        }
    }else{
        echo json_encode(array(
            "message" => "Token Wrong",
            "error" => true 
        ));

    }

