<?php 
    require_once "../core/initController.php";
    $patient = new patient();
    $schedule = new schedule();
    if ( $patient->isLogged()){
        if (input::get('do') == 'createSchedule'){
            try{
                $schedule -> create(array(
                    'day_name'=> input::get('dayname'),
                    'time_start'=> input::get('starttime'),
                    'time_end'=> input::get('endtime'),
                    'clinic_id'=> input::get('org_id')
                ));
                toasters::success('Session Schedule Registered');
            }catch(Exception $e){
                die($e->getMessage());
            }
        }else if ( input::get('do') == 'select') {
                foreach ($schedule->getSchedules(input::get('orgId'))  as $info ){
                    ?>
                        <tr>
                            <th ><?php echo $info->day_name;?></th>
                            <th ><?php echo $info->time_start;?></th>
                            <td><?php echo $info->time_end;?></td>
                            <td>
                            <?php 
                                if ( session::get('permissions') == 11 || session::get('permissions') == 1  || session::get('permissions') == 3) {
                                    ?>
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
