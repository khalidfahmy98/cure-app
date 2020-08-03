<?php 
    require_once "../core/initController.php";
    $patient = new patient();
    $validation = new validation();
    $orgnization = new orgnization();
    $branch = new branch();
    if ( $patient->isLogged()){
        if (input::get('do') == 'createBranch'){
                $validate = new validation();
                $validate->check($_POST,array(
                    'branchName' => array (
                        'required' => true 
                    ),
                    'branchPhone' => array (
                        'required' => true 
                    ),
                    'org_work_id' => array (
                        'required' => true,
                        'unique' => 'cure_organizations',

                    ),
                    'branchCity' => array (
                        'required' => true 
                    ),
                    'branchAddress' => array (
                        'required' => true 
                    )
                ));
                if ( $validate->passed() ){
                        try{
                            $branch -> create(array(
                                'org_name'=> input::get('org_id') . "-" . input::get('branchName'),
                                'org_fax'=> input::get('branchPhone'),
                                'org_work_type'=> input::get('branchWork'),
                                'org_tree_type'=> input::get('org_id'),
                                'org_work_id'=> input::get('org_work_id'),
                                'org_town'=> input::get('branchCity'),
                                'org_address'=> input::get('branchAddress'),
                                'owner_id' => input::get('ownerId')
                            ));
                            toasters::success('Orgnization Branch Created Successfully');
                        }catch(Exception $e){
                            die($e->getMessage());
                        }
                }else{
                    foreach ($validate->errors() as $error ){
                        echo $error;
                    }
                }
        }else if ( input::get('do') == 'select') {
                foreach ($branch->getBranches(input::get('orgId'))  as $info ){
                    ?>
                        <tr>
                            <th ><?php echo $info->org_name;?></th>
                            <th ><?php echo $info->org_fax;?></th>
                            <td><?php echo $info->org_work_id;?></td>
                            <td><?php echo $info->org_town;?></td>
                            <td><?php echo $info->org_address;?></td>
                            <td><?php
                                if ($info->org_work_type == 1 ) {
                                    echo '<label class="label label-info">Pharmacy</label>';
                                }else if ( $info->org_work_type == 2) {
                                    echo '<label class="label label-info">Factory</label>';
                                }else if ( $info->org_work_type == 3) {
                                    echo '<label class="label label-info">Labortary</label>';
                                }else {
                                    echo '<label class="label label-info">Clinic</label>';
                                }
                            ?></td>
                            <td><?php 
                            if ( $info->org_status == 1 ) {
                                echo '<label class="label label-success">Branch Approved</label>';
                            }else {
                                echo '<label class="label label-warning">Pending & Review Process </label>';
                            }
                            ?></td>
                            <td>
                                <button class="btn btn-xs btn-danger" onclick="deleteBranch(<?php  echo $info->org_id;?> ,   <?php  echo $info->org_tree_type;?> )"><i class="fa fa-times"></i></button>
                                <button class="btn btn-xs btn-warning" onclick="editBranch(<?php  echo $info->org_id;?> , <?php  echo $info->org_tree_type;?> )"><i class="fa fa-edit"></i></button>
                            </td>
                      </tr>
                    <?php 
                }
        }else if ( input::get('do') == 'delete'){
            if ( is_numeric(input::get('org_id')) ){
                $branch->delete(input::get('org_id'));
            } 
        } 


    } 
?>
