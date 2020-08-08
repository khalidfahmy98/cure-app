<?php 
    require 'core/init.php';
    templateController::setTitle('Medical File | Cure');
    templateController::get('header');
    $treatment = new treatments();
    $patient = new patient ();
    $orgnization = new orgnization();
    $product = new product();
    if ( $patient->isLogged() ) {

?>
       <!--Start Medical File-->
       <div class="medical-file col-md-7">      
        <h2>My Medical File / Profile </h2>
        <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="true" aria-controls="collapsefour">
                    Master Information 
                    <span class="main-info"><i class="fas fa-plus"></i></span>
                  </button>
                </h2>
              </div>
          
              <div id="collapsefour" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6  col-sm-6 form-group col-xs-12">
                      <div>Username : <?php echo $patient->data()->patient_username;?></div>
                    </div>
                    <div class="col-md-6  col-sm-6 form-group col-xs-12">
                      <div>Email Address : <?php echo $patient->data()->patient_email;?></div>
                    </div>
                    <div class="col-md-6  col-sm-6 form-group col-xs-12">
                      <div> Nationality : <?php echo $patient->data()->patient_nationality;?></div>
                    </div>
                    <div class="col-md-6  col-sm-6 form-group col-xs-12">
                      <div>My  Adress : <?php echo $patient->data()->patient_nationality;?></div>
                    </div>
                    <div class="col-md-6  col-sm-6 form-group col-xs-12">
                      <div>My  Donation Status  : <?php 
                        if ( $patient->data()->patient_donation_status == 0 ) {
                          echo 'Not Donor';
                        }else{
                          echo ' Donor';
                        }
                      ?></div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Medical Information
                    <span class="main-info"><i class="fas fa-plus"></i></span>
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                            <div>Medical Description  : <br>  </div>
                          </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                        <div>Smoker   : Yes | NO </div>
                        
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                      <div>Blood Type  :  A+ </div>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                        <div>Body Weight  :  98 KLG </div>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                        <div>Tall  :  120 cm </div>
                      </div>

                      </div>
                </div>
              </div>
            </div>
          </div>

    </div>
    <!--End Medical File-->
<?php 
      }else{
        redirect::to('login.php');
      }
      templateController::get('footer');
?>
