<?php 
    require_once "../core/initController.php";
    $patient = new patient();
    $validation = new validation();
    $orgnization = new orgnization();
    $warehousing = new warehousing();
    $order = new orders();
    $branch = new branch();
    if ( $patient->isLogged()){
        if (input::get('do') == 'craeteOrder'){
                $validate = new validation();
                $validate->check($_POST,array(
                    'org_id' => array (
                        'required' => true 
                    ),
                    'productPrice' => array (
                        'required' => true 
                    ),
                    'productQuantity' => array (
                        'required' => true
                    )
                ));
                if ( $validate->passed() ){
                        try{
                            $warehousing -> create(array(
                                'item_quantity'=> input::get('productQuantity'),
                                'item_price'=> input::get('productPrice'),
                                'treatment_id'=> input::get('productName'),
                                'org_id'=> input::get('org_id')
                            ));
                            toasters::success('Product registered successfuly');
                        }catch(Exception $e){
                            die($e->getMessage());
                        }
                }else{
                    foreach ($validate->errors() as $error ){
                        echo $error;
                    }
                }
        }else if ( input::get('do') == 'select') {
                foreach ($order->getOrders(input::get('orgId'))  as $info ){
                    ?>
                        <tr>
                            <th ><?php echo $info->item_id;?></th>
                            <td><?php echo $info->order_quantity;?></td>
                            <td><?php echo $info->item_price;?></td>
                            <td><?php echo $info->item_price * $info->order_quantity;?></td>
                            <td><?php echo $info->order_date;?></td>
                            <td><?php echo $info->patient_username;?></td>
                      </tr>
                    <?php 
                }
        }else if ( input::get('do') == 'delete'){
            if ( is_numeric(input::get('item_id')) ){
                $warehousing->delete(input::get('item_id'));
            } 
        }else if ( input::get('do') == 'selectSell') {
            foreach ($warehousing->getItems(input::get('orgId'))  as $info ){
                $orgSell = $info->item_price * $info->item_quantity;
                $mainSell = $info->product_price * $info->item_quantity;
                ?>
                    <tr>
                        <th ><?php echo $info->product_global_barcode;?></th>
                        <th ><?php echo $info->product_name;?></th>
                        <td><?php echo $info->item_quantity;?></td>
                        <td><?php echo $info->item_price;?></td>
                        <td><?php echo $info->product_price;?></td>
                        <td><?php echo $info->item_price * $info->item_quantity;?></td>
                        <td><?php echo $orgSell - $mainSell;?></td>
                        <td><?php 
                            if ( $info->sell_visiblity == 0 ) {
                                echo '<label class="label label-warning">Not In Market</label>';
                            }else{
                                echo '<label class="label label-success"> In Market</label>';
                            }
                        ?></td>
                        <td>
                            <?php 
                                if (session::get('permissions') == 1 ||  session::get('permissions') == 11  ||  session::get('permissions') == 3 ){
                                    if ($info->sell_visiblity == 0 ) {
                                        ?>
                                        <button class="btn btn-xs btn-success" onclick="activeSell( <?php  echo $info->item_id;?> ,   <?php  echo $info->org_id;?>  )">Sell</button>
                                        <?php 
                                    }else{
                                        ?>
                                        <button class="btn btn-xs btn-warning" onclick="blockSell( <?php  echo $info->item_id;?> ,   <?php  echo $info->org_id;?>  )">Dont Sell</button>
                                        <?php 
                                    }
                                    ?>
                                    <?php 
                                }
                            ?>
                        </td>
                  </tr>
                <?php 
            }
        }else if ( input::get('do') == 'sell'){
            if ( is_numeric(input::get('item_id'))){
                $warehousing->update(array(
                    'sell_visiblity' => 1 
                ),input::get('item_id'));
            } 

        }else if (input::get('do') == 'revoke') {
            if ( is_numeric(input::get('item_id'))){
                $warehousing->update(array(
                    'sell_visiblity' => 0 
                ),input::get('item_id'));
            } 
        }


    } 
?>
