<?php 
    require '../core/init.php';
    $patient = new patient();
    if ( input::get('token') == $token) {
        http_response_code(200);
        $userArray = (array) $patient->info(input::get('patient_id'));
        echo json_encode($userArray);
    }else{
        http_response_code(404);
    }

