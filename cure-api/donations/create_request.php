<?php 
    require '../core/init.php';
    $donations = new donations();
    $validate = new validation();
    http_response_code(200);
    if ( input::get('token') == $token) {
        if ( !empty(input::get("bloodType")) ||   !empty(input::get("donatQuantity")) || !empty(input::get("donatAddress")) || !empty(input::get("userId"))  ) {
            try{
                $donations -> create(array(
                    'blood_type'=> input::get('bloodType'),
                    'donators_qunatity' => input::get('donatQuantity'),
                    'donation_address' => input::get('donatAddress'),
                    'patient_id' => input::get("userId")
                ));
                echo json_encode(
                    array("message" => "created donation request successfuly",
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
            echo json_encode(array(
                "message" => "All Data Must Be Setted ",
                "error" => true 
            ));
        }
    }else{
        echo json_encode(array(
            "message" => "Token Wrong",
            "error" => true 
        ));

    }

