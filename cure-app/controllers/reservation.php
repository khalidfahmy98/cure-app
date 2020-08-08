<?php 
    require '../core/initControllers.php';
    $patient = new patient ();
    $reservation = new reservation();
    $doantions = new doantions();
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
        }else if ( $_GET['do'] == 'createDonation') {
            try{
                $doantions -> createdonationAccess(array(
                    'patient_id'=> input::get('patient_id'),
                    'request_id' => input::get('reqeust_id')
                ));
                toasters::success('Reservation Regisetered successfuly' );
            }catch(Exception $e){
                die($e->getMessage());
            }
            $patient->update(array(
                'patient_e_coins' => $patient->data()->patient_e_coins + 250 
            ) , $patient->data()->patient_id);

        }else if ($_GET['do'] == 'createRequest' ) {
            try{
                $doantions -> create(array(
                    'patient_id'=> input::get('patient_id'),
                    'blood_type' => input::get('bloodType'),
                    'donators_qunatity' => input::get('quantity'),
                    'donation_address' => input::get('donationAddress')
                ));
                toasters::success('Request  Regisetered successfuly' );
            }catch(Exception $e){
                die($e->getMessage());
            }
        }
    }