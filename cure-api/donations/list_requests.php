<?php 
    require '../core/init.php';
    $patient = new patient();
    if ( input::get('token') == $token) {
        if (input::get("donate_value") == 0   ||  input::get("donate_value") == 1) {
            http_response_code(200);
            $userArray = (array) $patient->ListConditionedUsers( 'patient_donation_status' , input::get("donate_value") );
            echo json_encode($userArray);
        }else{
            http_response_code(404);
            echo json_encode(array(
                "message" => "Tokens Wrong"
            ));

        }
    }else{
        http_response_code(404);
    }

