<?php 
    require_once "../core/initController.php";
    $patient = new patient();
    $orgnization = new orgnization();
    $branch = new branch();
    $workers = new workers();
    if ( $patient->isLogged()){
        if (input::get('do') == 'createWorker'){
                try{
                    $workers -> create(array(
                        'worker_id'=> input::get('workerusername'),
                        'orgniztion_id'=> input::get('workerbranch'),
                        'work_category'=> input::get('workercategory'),
                        'manager_id'=> input::get('ownerId')
                    ));
                    toasters::success('Assigned Worker To  Branch  Successfully');
                }catch(Exception $e){
                    die($e->getMessage());
                }
        }else if ( input::get('do') == 'select') {
                foreach ($workers->getWorkers(input::get('ownerId'))  as $info ){
                    ?>
                        <tr>
                            <th ><?php echo $info->worker_id;?></th>
                            <th ><?php echo $info->orgniztion_id;?></th>
                            <td><?php echo $info->work_category;?></td>
                            <td>
                                <button class="btn btn-xs btn-danger" onclick="deleteWorker(<?php  echo $info->aggregte_id;?> ,   <?php  echo $info->manager_id;?> )"><i class="fa fa-times"></i></button>
                            </td>
                      </tr>
                    <?php 
                }
        }else if ( input::get('do') == 'delete'){
            if ( is_numeric(input::get('aggId')) ){
                $workers->delete(input::get('aggId'));
            } 
        } 


    } 
?>
