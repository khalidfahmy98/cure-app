<?php 
    require '../core/init.php';
    $patient = new patient();
    if ( !empty(input::get('username')) && !empty(input::get('email')) && !empty(input::get('password')) ) {
        if ( !$patient->find(input::get('username')) ) {
            $patient->create(array(
                'useremail' =>  input::get('email'), 
                'username' =>  input::get('username'),
                'userpassword' =>  input::get('password')
            ) );
            http_response_code(200);
            echo json_encode(
                array("message" => "Signed up successfuly")
            );

        }else{
            http_response_code(404);
            echo json_encode(
                array("message" => "This user is already registered")
            );
        }
    }else{
        http_response_code(404);
        echo json_encode(
            array("message" => "incorrect information")
        );
    }
