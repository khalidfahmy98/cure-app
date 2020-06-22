<?php 
    require '../core/init.php';
    $patient = new patient();
    if ( input::get('token') == $token) {
        if ( $patient->find(input::get('patient_id')) ) {
            http_response_code(200);
            $userInfo =  $patient->info(input::get('patient_id'));
            echo json_encode(
                array(
                    "id" => $userInfo->patient_id,
                    "username" => $userInfo->patient_username,
                    "email" =>$userInfo->patient_email,
                    "phone" =>$userInfo->patient_phone,
                    "gender" =>$userInfo->patient_gender,
                    "birthdate" =>$userInfo->patient_birthdate,
                    "nationality" =>$userInfo->patient_nationality,
                    "address" =>$userInfo->patient_address,
                    "coins" =>$userInfo->patient_e_coins,
                    "donation" =>$userInfo->patient_donation_status,
                    "account" =>$userInfo->patient_account_status,
                    "password" =>$userInfo->patient_password,
                )
            );
        }else{
            http_response_code(404);
             echo json_encode(
                array("message" => "Not Registered")
            );
        }
    }

