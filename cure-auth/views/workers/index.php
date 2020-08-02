<?php 
  require_once "../../core/init.php";
  templateController::get('header');
  templateController::get('navigation');
  templateController::setTitle("Register Admin | Cure ");
  $patient = new patient();
  $orgnization = new orgnization();
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
                            <label>Worker Username</label>
                            <select class="form-control" id="workerusername">
                                <option value="2" selected > Editor  </option>
                                <option value="3">Manager</option>
                                <option value="4">Full Admin</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                            <label >Worker Category </label>
                            <input type="email" class="form-control" id="workercategory">
                        </div>
                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                            <label >Branch</label>
                            <input type="text" class="form-control" id="workerbranch">
                        </div>
                      </div> 
                  </div>
                  <div class="box-footer">
                    <button type="button"  class="btn btn-primary">Register</button>
                  </div>
              </div>
                </div>
            </div>
        </section>
    </div>
<?php 

  templateController::get('footer');
  templateController::getScript('workers','add');
  templateController::getScript('workers','operations');
?>
