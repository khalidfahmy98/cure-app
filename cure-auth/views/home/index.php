<?php 
  require_once "../../core/init.php";
  templateController::get('header');
  templateController::get('navigation');
  templateController::setTitle("Homepage | Cure Systems");
  $patient = new patient();
  if ($patient->isLogged()){
    ?>
    <div class="content-wrapper">
    <section class="content">
    <!-- Info boxes -->
    <?php 
      if ( $patient->data()->worker_account_type == 0 ) {
        ?>
          <div class="alert alert-info">Register Now Your Own Orgnization Or Work ! </div>
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-6 form-group">
                    <label>Work Type : </label>
                    <select class="form-control input-sm">
                        <option value="1">Service Provider</option>
                        <option value="2">Doctor </option>
                    </select>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 form-group">
                    <label>Orgnization Name :  </label>
                    <input type="text" class="form-control input-sm">
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 form-group">
                    <label>Orgnization Type :  </label>
                    <input type="text" class="form-control input-sm">
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 form-group">
                    <label>Orgnization Email :  </label>
                    <input type="text" class="form-control input-sm">
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 form-group">
                    <label>Orgnization Phone :  </label>
                    <input type="text" class="form-control input-sm">
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 form-group">
                    <label>License Number :  </label>
                    <input type="text" class="form-control input-sm">
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 form-group">
                    <label>City :  </label>
                    <input type="text" class="form-control input-sm">
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 form-group">
                    <label>Address :  </label>
                    <input type="text" class="form-control input-sm">
                </div>
            </div>
            <div class="form-group">
              <button class="btn btn-sm btn-success">Create Orgniztion</button>
            </div>
        <?php 
      }else{
          ?>
            <div class="row">
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">CPU Traffic</span>
                    <span class="info-box-number">90<small>%</small></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Likes</span>
                    <span class="info-box-number">41,410</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->

              <!-- fix for small devices only -->
              <div class="clearfix visible-sm-block"></div>

              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Sales</span>
                    <span class="info-box-number">760</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">New Members</span>
                    <span class="info-box-number">2,000</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
            </div>
          <?php 
      }
    ?>
  
    <!-- /.row -->

    </section>
  </div>

<?php 
  }else{
    redirect::to('../../../cure-app/');
  }
  templateController::get('footer');
  templateController::getScript('accountSettings');
?>

