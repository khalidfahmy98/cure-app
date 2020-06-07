<?php 
    require '../core/initControllers.php';
    $patient = new patient ();
    if (input::exists('get')){
        if ( $_GET['do'] == 'register' ){
                $validate = new validation();
                $validate->check($_POST,array(
                    'patient_email' => array (
                        'required' => true ,
                        'min'   => 8 ,
                        'unique' => 'patient'
                    ),
                    'patient_username' => array (
                        'required' => true ,
                        'min'   => 6 ,
                        'unique' => 'patient'
                    ),
                    'patient_phone' => array(
                        'required' => true ,
                        'min'   => 10 ,
                        'max'   => 13,
                        'unique' => 'patient'

                    ),
                    'p_password' => array(
                        'required' => true ,
                        'min'   => 6,
                        'max'   => 13
                    )
                ));
                if ( $validate->passed() ){
                    $salt = hash::salt(32);
                    if ( input::get('type') !== 1 ) {
                        try{
                            $patient -> create(array(
                                'patient_username'=> input::get('patient_username'),
                                'patient_email' => input::get('patient_email'),
                                'patient_password' => input::get('p_password'),
                                'patient_salt' => $salt,
                                'patient_hashedpassword' => hash::make(input::get('p_password'),$salt),
                                'patient_phone' => input::get('patient_phone'),
                                'patient_gender' => input::get('p_gender'),
                                'patient_nationality' => input::get('p_natio'),
                            ));
                            toasters::successWithLink('Account Created Successfuly' , 'login.php' , 'Login Now ! ');
                        }catch(Exception $e){
                            die($e->getMessage());
                        }
                    }else {
                        toasters::warning('Creating Account Not Available For This Type Of Users');
                    }
                }else{
                    foreach ($validate->errors() as $error ){
                        echo $error;
                    }
                }
        }
    }