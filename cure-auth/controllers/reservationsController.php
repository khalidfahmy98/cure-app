<?php 
    require_once "../core/initController.php";
    $patient = new patient();
    $reservation = new reservation();
    if ( $patient->isLogged()){
        if (input::get('do') == 'createReservation'){
            try{
                $reservation -> create(array(
                    'patient_id'=> input::get('patientname'),
                    'sched_id'=> input::get('sessiontime'),
                    'clinic_id'=> input::get('org_id')
                ));
                toasters::success('Reservation Registered');
            }catch(Exception $e){
                die($e->getMessage());
            }
        }else if ( input::get('do') == 'select') {
                foreach ($reservation->getResevations(input::get('orgId'))  as $info ){
                    ?>
                        <tr>
                            <th ><?php echo $info->patient_username;?></th>
                            <th ><?php echo $info->day_name;?></th>
                            <td><?php echo $info->time_start;?></td>
                            <td><?php echo $info->time_end;?></td>
                            <td><?php echo $info->reservation_date;?></td>
                            <td>
                            <?php 
                                if ( session::get('permissions') == 11 || session::get('permissions') == 1  || session::get('permissions') == 3) {
                                    ?>
                                    <a href="#" class="btn btn-info" target="_blank">Show Medical</a>
                                    <button class="btn btn-xs btn-danger" onclick="deleteSchedule(<?php  echo $info->clinic_id;?> ,   <?php  echo $info->sched_id;?> )"><i class="fa fa-times"></i></button>
                                    <button class="btn btn-xs btn-warning" onclick="editSchedule(<?php  echo $info->clinic_id;?> ,   <?php  echo $info->sched_id;?> )"><i class="fa fa-edit"></i></button>
                                    <?php 
                                }
                            ?>
                            </td>
                      </tr>
                    <?php 
                }
        }else if ( input::get('do') == 'delete'){
            if ( is_numeric(input::get('item_id')) ){
                $schedule->delete(input::get('item_id'));
            } 
        } 


    } 
?>
