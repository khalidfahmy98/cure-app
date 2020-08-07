<?php 
    require_once "../../core/init.php";
    templateController::get('header');
    templateController::get('navigation');
    templateController::setTitle("Market Orders | Cure Systems");
    $patient = new patient();
    $orgnization = new orgnization();
    $authTreatments = new authTreatments();
    $warehousing =  new warehousing();
    if ($patient->isLogged()){
    ?>
    <div class="content-wrapper">
        <section class="content">
        <div class="row">
            <div class="col-xs-12">
              <div id="responserWrapper"></div>
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Market Orders</h3>
                </div>
                  <div class="box-body">
                  <input type="hidden" class="hide" value="<?php echo session::get('orgnizationId'); ?>" id="orgId">
                  <table class="table table-striped table-responsive table-hover">
                    <thead>
                      <tr>
                        <th >Product Code</th>
                        <th >Quantity</th>
                        <th >Sell Price</th>
                        <th >Total Price</th>
                        <th >Pruchase Date</th>
                        <th >Customer</th>
                      </tr>
                    </thead>
                    <tbody id="liveTableData">
                    </tbody>
                  </table>
                   </div>
              </div>
                </div>
            </div>
        </section>
    </div>
    <?php
    
    }else{
        redirect::to('../../../cure-app/');
    }
    templateController::get('footer');
    templateController::getScript('warehouseSell','orders'); 
?>