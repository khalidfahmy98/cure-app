<?php 
    require_once "../core/init.php";
    $patient = new patient();
    $orgnization = new orgnization();
    $validation = new validation();
    if ( $patient->isLogged()){
        if (input::get('do') == 'createOrgnization'){
                // update patient account type 
                $patient->update(array(
                    'worker_account_type' => input::get('accoutType')
                ), input::get('owner_id'));
                // register orgnization 
                $validate = new validation();
                $validate->check($_POST,array(
                    'orgnizationName' => array (
                        'required' => true 
                    ),
                    'org_email' => array (
                        'required' => true ,
                        'min'   => 6 ,
                        'unique' => 'cure_organizations'
                    ),
                    'org_fax' => array(
                        'required' => true ,
                        'min'   => 10 ,
                        'max'   => 13,
                        'unique' => 'cure_organizations'

                    ),
                    'org_work_id' => array(
                        'required' => true ,
                        'min'   => 13,
                        'max'   => 26,
                        'unique' => 'cure_organizations'
                    ),
                    'orgnizationCity' => array(
                        'required' => true 
                    ),
                    'owner_id' => array(
                        'required' => true ,
                        'unique' => 'cure_organizations'
                    ),
                    'orgnizationAddress' => array(
                        'required' => true 
                    )
                ));
                if ( $validate->passed() ){
                        try{
                            $orgnization -> create(array(
                                'org_name'=> input::get('orgnizationName'),
                                'org_email' => input::get('org_email'),
                                'org_fax' => input::get('org_fax'),
                                'org_work_type' => input::get('orgnizationType'),
                                'org_work_id' => input::get('org_work_id'),
                                'org_town' => input::get('orgnizationCity'),
                                'org_address' => input::get('orgnizationAddress'),
                                'owner_id' => input::get('owner_id')
                            ));
                            toasters::success('Your Orgnization Created Successfuly');
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
?>
