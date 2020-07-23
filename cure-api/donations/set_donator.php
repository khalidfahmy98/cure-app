<?php 
    require '../core/init.php';
    $donations = new donations();
    $validate = new validation();
    http_response_code(200);
    if ( input::get("token") == $token ) {
        try{
            $donations -> setDonator(array(
                'patient_id'=> input::get('userId'),
                'request_id' => input::get('requestId')
            ));
            echo json_encode(
                array("message" => "setted donator successfuly",
                    "error" => false)
            );
            }catch(Exception $e){
                die($e->getMessage());
                echo json_encode(
                    array("message" => $e->getMessage(),
                            "error" => true )
                );
            }
    }else{
        echo json_encode(
            array("message" => "Token failed ",
                    "error" => true )
        );
    }
