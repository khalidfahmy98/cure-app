<?php 
  require_once "../../core/init.php";
  templateController::get('header');
  templateController::get('navigation');
  templateController::setTitle("Register Workers | Cure ");
  $patient = new patient();
  $orgnization = new orgnization();
  $branch = new branch();
  $workerCategories = new workerCategories();
?>
   <div class="content-wrapper">
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Assign Now Workers To Your Orgnization</h3>
                </div>
                  <div class="box-body">
                    <div class="row">
                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                        <input type="hidden" class="hide" value="<?php echo $patient->data()->patient_id; ?>" id="ownerId">
                            <label>Worker Username</label>
                            <select class="form-control" id="workerusername">
                            <?php 
                             foreach($patient->getUsers() as $info ){
                               ?>
                                <option value="<?php echo $info->patient_id; ?>"  > <?php echo $info->patient_username;?>  </option>
                               <?php 
                             }
                            ?>
                          </select>
                        </div>
                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                            <label >Worker Category </label>
                            <select class="form-control" id="workercategory">
                                <?php 
                                  foreach($workerCategories->getCategories($orgnization->find($patient->data()->patient_id)->org_id) as $info ){
                                      ?>
                                        <option value="<?php echo $info->worker_category_id; ?>"  > <?php echo $info->worker_category_name;?>  </option>
                                      <?php 
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                            <label >Branch</label>
                            <select class="form-control" id="workerbranch">
                            <?php 
                                  foreach($branch->getAllBranches($patient->data()->patient_id) as $info ){
                                      ?>
                                        <option value="<?php echo $info->org_id; ?>"  > <?php echo $info->org_name;?>  </option>
                                      <?php 
                                    }
                                ?>
                            </select>
                        </div>
                      </div> 
                  </div>
                  <div class="box-footer">
                    <button type="button"  class="btn btn-primary" onclick="createWorker(<?php echo $patient->data()->patient_id;?>)">Register</button>
                  </div>
                  <div id="responserWrapper"></div>
              </div>
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Registered Workers</h3>
                </div>
                  <div class="box-body">
                  <table class="table table-striped table-responsive table-hover">
                    <thead>
                      <tr>
                        <th >Worker Username</th>
                        <th >Branch</th>
                        <th >Work Category</th>
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

  templateController::get('footer');
  templateController::getScript('workers','operations');
?>
