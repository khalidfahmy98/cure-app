<?php 
    require '../core/init.php';
    $patient = new patient();
    if ( input::get('token') == $token) {

        http_response_code(200);
        // get donation requests here 
        $userArray = (array) $patient->ListConditionedUsers( 'patient_donation_status' , input::get("donate_value") );
        echo json_encode($userArray);

    }else{

        http_response_code(404);
        echo json_encode(array(
            "message" => "Tokens Wrong"
        ));

    }

