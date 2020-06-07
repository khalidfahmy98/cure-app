<?php 
    require '../core/init.php';
    $patient = new patient ();
    if (input::exists('get')){
        if ( $_GET['do'] == 'register' ){
                $validate = new validation();
                $validate->check($_POST,array(
                    'w_username' => array (
                        'required' => true ,
                        'min'   => 6 ,
                        'unique' => 'website_users'
                    ),
                    'w_fullname' => array(
                        'required' => true ,
                        'min'   => 6 
                    ),
                    'w_useremail' => array(
                        'required' => true ,
                        'min'   => 6 ,
                        'unique' => 'website_users'
                    ),
                    'w_userpassword' => array(
                        'required' => true ,
                        'min'   => 6,
                        'max'   => 13
                    )
                ));
                if ( $validate->passed() ){
                    $salt = hash::salt(32);
                    try{
                        $patient -> create(array(
                            'w_fullname'=> input::get('w_fullname'),
                            'w_username' => input::get('w_username'),
                            'w_useremail' => input::get('w_useremail'),
                            'w_userpassword' => input::get('w_userpassword'),
                            'w_gender' => input::get('w_gender'),
                            'w_hashedpassword' => hash::make(input::get('w_userpassword'),$salt),
                            'salt' => $salt
                        ));
                        toasters::success('تم إنشاء الحساب بنجاح');
                    }catch(Exception $e){
                        die($e->getMessage());
                    }
                }else{
                    foreach ($validate->errors() as $error ){
                        echo $error;
                    }
                }
        }
    }