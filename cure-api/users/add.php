<?php 
    require '../core/init.php';
    $patient = new patient();
    $validate = new validation();
    if ( input::get("token") == $token ) {
        $validate->check($_POST,array(
            'patient_email' => array (
                'required' => true ,
                'min'   => 8 ,
                'unique' => 'cure_users'
            ),
            'patient_username' => array (
                'required' => true ,
                'min'   => 6 ,
                'unique' => 'cure_users'
            ),
            'patient_phone' => array(
                'required' => true ,
                'min'   => 10 ,
                'max'   => 13,
                'unique' => 'cure_users'
    
            ),
            'p_password' => array(
                'required' => true ,
                'min'   => 6,
                'max'   => 13
            )
        ));
        if ( $validate->passed() ){
            $salt = hash::salt(32);
            try{
                $patient -> create(array(
                    'patient_username'=> input::get('patient_username'),
                    'patient_email' => input::get('patient_email'),
                    'patient_password' => input::get('p_password'),
                    'patient_salt' => $salt,
                    'patient_hashedpassword' => hash::make(input::get('p_password'),$salt),
                    'patient_phone' => input::get('patient_phone'),
                    'patient_gender' => input::get('p_gender'),
                    'patient_nationality' => input::get('p_natio')
                ));
                http_response_code(200);
                echo json_encode(
                    array("message" => "Signed up successfuly")
                );
                }catch(Exception $e){
                    die($e->getMessage());
                }
    
        }else{
            http_response_code(404);
            echo json_encode(
                array("message" => "incorrect information")
            );
        }
    }
