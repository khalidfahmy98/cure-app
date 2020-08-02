<?php 
  require_once "../../core/init.php";
  templateController::get('header');
  templateController::get('navigation');
  templateController::setTitle("Worker Categories | CURE");
  $patient = new patient();
  $orgnization = new orgnization();
?>
   <div class="content-wrapper" onload="selectCategories(<?php echo $orgnization->find($patient->data()->patient_id)->org_id;?>)">
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Create Categories For Workers</h3>
                </div>
                  <div class="box-body">
                    <div class="row">
                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                            <label>Category Name</label>
                            <input type="text" class="form-control input-sm" id="categoryName" autocomplete="off">
                        </div>
                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                            <label>Category Description </label>
                            <input type="text" class="form-control input-sm" id="categoryDesc" autocomplete="off">
                        </div>
                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                            <label>Category Permission</label>
                            <select class="form-control" id="categoryPerm">
                                <option value="2" selected > Editor  </option>
                                <option value="3">Moderator</option>
                                <option value="1">Full Control</option>
                            </select>
                        </div>
                      </div> 
                  </div>
                  <div class="box-footer">
                    <button type="button"  class="btn btn-primary" onclick="createCategory(<?php echo $orgnization->find($patient->data()->patient_id)->org_id;?>)">Register</button>
                  </div>
              </div>
              <div id="responserWrapper"></div>
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Registererd Categories</h3>
                </div>
                  <div class="box-body">
                  <table class="table table-striped table-responsive table-hover">
                    <thead>
                      <tr>
                        <th >#</th>
                        <th >Category Name </th>
                        <th >Category Description </th>
                        <th >Category Permission</th>
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
  templateController::getScript('workerCategories','operations');
  templateController::getScript('workerCategories','add');
?>
