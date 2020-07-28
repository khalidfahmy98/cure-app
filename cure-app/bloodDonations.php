<?php 
    require 'core/init.php';
    templateController::setTitle('Blood Donation | Cure');
    templateController::get('header');
    $treatment = new treatments();
    if ( $patient->isLogged() ) {
?>

        <!--Start Blood Donation-->
        <div class="blood-donation col-md-7"> 
            <h2>Blood Donation</h2>   
            <div class="col-md-3">    
                <div class="sidebar">
                <div class="location-image row">
                  <img src="assets/imgs/profile.png"/>
                  <div class="acc-write">
                    <h4>Tarek NeGm</h4>
                    <span class="text-center"><i class="location fas fa-map-marker-alt"></i>Egypt</span>
                    
                  </div>
                </div>
                </div>
              </div>
        </div>
        <!--End Blood Donation-->

<?php 
      }else{
        redirect::to('login.php');
      }
      templateController::get('footer');
?>
