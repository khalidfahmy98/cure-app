<?php 
  require_once "../../core/init.php";
  templateController::get('header');
  templateController::get('navigation');
  templateController::setTitle("Branches Managament | CURE");
  $patient = new patient();
  $orgnization = new orgnization();
  $branch = new branch();
?>
   <div class="content-wrapper">
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Register Branches For Your Orgnizations</h3>
                </div>
                  <div class="box-body">
                    <div class="row">
                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                        <input type="hidden" class="hide" id="orgId" value="<?php echo $orgnization->find($patient->data()->patient_id)->org_id;?>">
                            <label>Branch Name</label>
                            <input type="text" class="form-control input-sm" id="branchName" autocomplete="off">
                        </div>
                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                            <label>Branch Phone </label>
                            <input type="text" class="form-control input-sm" id="branchPhone" autocomplete="off">
                        </div>
                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                            <label>Branch License  </label>
                            <input type="text" class="form-control input-sm" id="branchLicense" autocomplete="off">
                        </div>
                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                            <label>Branch City </label>
                            <input type="text" class="form-control input-sm" id="branchCity" autocomplete="off">
                        </div>
                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                            <label>Branch Address </label>
                            <input type="text" class="form-control input-sm" id="branchAddress" autocomplete="off">
                        </div>
                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                            <label>Branch  Work Category </label>
                            <select class="form-control" id="branchWork">
                                <option value="1"> Pharmacy</option>
                                <option value="2"> Factory </option>
                                <option value="3"> Labortary </option>
                                <option value="4">Clinic</option>
                            </select>
                        </div>
                      </div> 
                  </div>
                  <div class="box-footer">
                    <button type="button"  class="btn btn-primary" onclick="createBranch(<?php echo $orgnization->find($patient->data()->patient_id)->org_id;?> , <?php  echo $patient->data()->patient_id; ?>)">Register</button>
                  </div>
              </div>
              <div id="responserWrapper"></div>
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Registererd Branches</h3>
                </div>
                  <div class="box-body">
                  <table class="table table-striped table-responsive table-hover">
                    <thead>
                      <tr>
                        <th >Branch Name </th>
                        <th >Branch Phone </th>
                        <th >Branch License</th>
                        <th >Branch City</th>
                        <th >Branch Address</th>
                        <th >Branch Work Category </th>
                        <th >Status</th>
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
  templateController::getScript('branches','operations');
?>
