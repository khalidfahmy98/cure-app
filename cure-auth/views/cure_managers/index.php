<?php 
  require_once "../../core/init.php";
  templateController::get('header');
  templateController::get('navigation');
  templateController::setTitle("Register Admin | Cure ");
?>
   <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-xs-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Register New Managers To The System </h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                  <div class="box-body">
                    <div class="row">
                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                            <label >Manager Full Name</label>
                            <input type="text" class="form-control" id="fullname">
                        </div>
                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                            <label >Manager Email</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                            <label >Manager Username</label>
                            <input type="text" class="form-control" id="username">
                        </div>
                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                            <label >Manager Password</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                            <label >Manager Rule </label>
                            <select class="form-control" id="rule">
                                <option value="2" selected > Editor  </option>
                                <option value="3">Manager</option>
                                <option value="4">Full Admin</option>
                            </select>
                        </div>
                      </div> <!-- ./row -->
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="button" onclick="saveAdmin()" class="btn btn-primary">Register</button>
                  </div>
              </div><!-- /.box -->
                </div>
            </div>
        </section>
        <!-- ./ Main content -->
    </div>
<?php 

  templateController::get('footer');
  templateController::getScript('cure_managers','register');
?>
