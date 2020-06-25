<?php 
    require '../core/init.php';
    $patient = new patient();
    if ( input::get('token') == $token) {
        if ( $patient->find(input::get('patient_username')) ) {

            if($patient->login(input::get('patient_username'),input::get('patient_password'))){
                http_response_code(200);
                echo json_encode(
                    array("message" => "Login Success")
                );
            }else{
                http_response_code(404);
                echo json_encode(
                   array("message" => "Incorrect Information")
               );
            }
    
        }else{
            http_response_code(404);
             echo json_encode(
                array("message" => "Not Registered")
            );
        }
    }else{
        http_response_code(404);
    }

