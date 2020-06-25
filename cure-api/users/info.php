<?php 
    require '../core/init.php';
    $patient = new patient();
    if ( input::get('token') == $token) {
        if ( $patient->find(input::get('patient_id')) ) {
            http_response_code(200);
            $userInfo =  $patient->info(input::get('patient_id'));
            
            $userArray = (array) $patient->info(input::get('patient_id'));
            // var_dump($userArray);
            echo json_encode($userArray);
        }else{
            http_response_code(404);
             echo json_encode(
                array("message" => "Not Registered")
            );
        }
    }

