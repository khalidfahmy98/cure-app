<?php 
  require_once "../../core/init.php";
  templateController::get('header');
  templateController::get('navigation');
  templateController::setTitle("Homepage | Cure Systems");
  $patient = new patient();
  $orgnization = new orgnization();
  if ($patient->isLogged()){
    ?>
    <div class="content-wrapper">
    <section class="content">
    <!-- Info boxes -->
    <?php 
      if ( $patient->data()->worker_account_type == 0 ) {
        // get org-id & set into session 
          // first check where if the user is owner or not 

          // second check if the user not owner but worker 
          echo session::get('orgnizationId') . " org <br>";
          echo session::get('workCategory')  . "work cat <br>";
          echo session::get('permissions')  . "perm <br>";
          echo session::get('orgType')  . "org type <br>";

          // get worker permissions  & set into session 
          // get org work category and open her operations 
        ?>
          <div class="alert alert-info">Register Now Your Own Orgnization Or Work ! </div>
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-6 form-group">
                    <label>Work Type : </label>
                    <select class="form-control input-sm" id="accountType">
                        <option value="1">Service Provider</option>
                        <option value="2">Doctor </option>
                    </select>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 form-group">
                    <label>Orgnization Name :  </label>
                    <input type="text" class="form-control input-sm" id="orgnizationName">
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 form-group">
                    <label>Orgnization Type :  </label>
                    <select class="form-control input-sm" id="orgnizationType">
                      <option value="1"> Pharmacy</option>
                      <option value="2"> Factory </option>
                      <option value="3"> Labortary </option>
                      <option value="4">Clinic</option>
                    </select>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 form-group">
                    <label>Orgnization Email :  </label>
                    <input type="text" class="form-control input-sm" id="orgnizationEmail">
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 form-group">
                    <label>Orgnization Phone :  </label>
                    <input type="text" class="form-control input-sm" id="orgnizationPhone">
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 form-group">
                    <label>License Number :  </label>
                    <input type="text" class="form-control input-sm" id="orgnizationLicense">
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 form-group">
                    <label>City :  </label>
                    <input type="text" class="form-control input-sm" id="orgnizationCity">
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 form-group">
                    <label>Address :  </label>
                    <input type="text" class="form-control input-sm" id="orgnizationAddress">
                </div>
            </div>
            <div class="form-group">
              <button class="btn btn-sm btn-success" onclick="createOrgnization(<?php echo $patient->data()->patient_id; ?>)">Create Orgnization</button>
            </div>
        <?php 
      }else{
        if ( $orgnization->orgStatus($patient->data()->patient_id) == 0 ) {
          toasters::warning('Wait until cure confirmation and review for your orgnization');
        }else{
          ?> 
               <div class="row">
               <?php 
          echo session::get('orgnizationId') . " org <br>";
          echo session::get('workCategory')  . "work cat <br>";
          echo session::get('permissions')  . "perm <br>";
          echo session::get('orgType')  . "org type <br>";
               ?>
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
      }
    ?>
    <div id="responserWrapper"></div>
    <!-- /.row -->

    </section>
  </div>

<?php 
  }else{
    redirect::to('../../../cure-app/');
  }
  templateController::get('footer');
  templateController::getScript('home','accountSettings');
?>

