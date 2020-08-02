<?php 
    require_once "../core/initController.php";
    $patient = new patient();
    $validation = new validation();
    $workerCategories = new workerCategories();
    if ( $patient->isLogged()){
        if (input::get('do') == 'createCategory'){
                $validate = new validation();
                $validate->check($_POST,array(
                    'categoryName' => array (
                        'required' => true 
                    ),
                    'categoryDesc' => array (
                        'required' => true 
                    ),
                    'org_id' => array(
                        'required' => true 
                    )
                ));
                if ( $validate->passed() ){
                        try{
                            $workerCategories -> create(array(
                                'worker_category_name'=> input::get('categoryName'),
                                'worker_category_desc' => input::get('categoryDesc'),
                                'category_premission_type' => input::get('categoryPerm'),
                                'org_id' => input::get('org_id')
                            ));
                            toasters::success('Worker Category Created  Successfuly');
                        }catch(Exception $e){
                            die($e->getMessage());
                        }
                }else{
                    foreach ($validate->errors() as $error ){
                        echo $error;
                    }
                }
        }else if ( input::get('do') == 'select') {
                foreach ($workerCategories->getCategories(input::get('org_id'))  as $info ){
                    ?>
                        <tr>
                            <th ><?php echo $info->worker_category_id;?></th>
                            <th ><?php echo $info->worker_category_name;?></th>
                            <td><?php echo $info->worker_category_desc;?></td>
                            <td><?php 
                            if ( $info->category_premission_type == 1 ) {
                                echo '<label class="label label-success">Full Control </label>';
                            }else if (  $info->category_premission_type == 2 ) {
                                echo '<label class="label label-success">Editor </label>';
                            }else{
                                echo '<label class="label label-success">Moederator </label>';
                            }
                            ?></td>
                            <td>
                                <button class="btn btn-xs btn-danger" onclick="deleteCategory(<?php  echo $info->worker_category_id;?>)"><i class="fa fa-times"></i></button>
                                <button class="btn btn-xs btn-warning" onclick="editCategory(<?php  echo $info->worker_category_id;?>)"><i class="fa fa-edit"></i></button>
                            </td>
                      </tr>
                    <?php 
                }
        }


    } 
?>
