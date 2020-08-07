 <?php 
    require_once "../../core/init.php";
    templateController::get('header');
    templateController::get('navigation');
    templateController::setTitle("Warehousing | Cure Systems");
    $patient = new patient();
    $orgnization = new orgnization();
    if ($patient->isLogged()){
    ?>
    <div class="content-wrapper">
        <section class="content">
        <div class="row">
            <div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Feed Warehouse With Products</h3>
                </div>
                  <div class="box-body">
                    <div class="row">
                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                            <label>Product Barcode </label>
                            <select class="form-control input-sm" id="productBarcode">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                            <label>Product Name </label>
                            <select class="form-control input-sm" id="productName">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                            <label>Quantity</label>
                            <input type="text" class="form-control input-sm" id="productQuantity" autocomplete="off">
                        </div>
                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                            <label>Sell Price</label>
                            <input type="text" class="form-control input-sm" id="productPrice" autocomplete="off">
                        </div>
                      </div> 
                  </div>
                  <div class="box-footer">
                    <button type="button"  class="btn btn-primary" onclick="">Register Product</button>
                  </div>
              </div>
              <div id="responserWrapper"></div>
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Warehouse Operations</h3>
                </div>
                  <div class="box-body">
                  <table class="table table-striped table-responsive table-hover">
                    <thead>
                      <tr>
                        <th >Barcode</th>
                        <th >Product Name</th>
                        <th >Quantity</th>
                        <th >Sell Price</th>
                        <th >OPR </th>
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
    templateController::getScript('warehouseSell','warehousing'); 
?>