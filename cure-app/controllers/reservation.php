<?php 
    require '../core/initControllers.php';
    $patient = new patient ();
    $reservation = new reservation();
    if (input::exists('get')){
        if ( $_GET['do'] == 'createReservation' ){
            try{
                $reservation -> create(array(
                    'patient_id'=> input::get('patient_id'),
                    'sched_id' => input::get('sessionTime'),
                    'clinic_id' => input::get('org_id'),
                ));
                toasters::success('Reservation Regisetered successfuly' );
            }catch(Exception $e){
                die($e->getMessage());
            }
        }
    }