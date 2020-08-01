<?php 
    require_once "../../core/init.php";
    $patient = new patient();
    if ( $patient->isLogged()){
        if (input::get('do') == 'createOrgnization'){
                // update patient account type 
                    $patient->update(array(
                        'worker_account_type' => input::get('accoutType')
                    ), input::get('ownerId'));

                // register orgnization 

        } 
    } 
?>
