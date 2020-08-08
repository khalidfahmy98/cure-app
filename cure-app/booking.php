<?php 
    require 'core/init.php';
    templateController::setTitle('Session Booking  | Cure');
    templateController::get('header');
    $treatment = new treatments();
    $patient = new patient ();
    $orgnization = new orgnization();
    $product = new product();
    if ( $patient->isLogged() ) {
?>
 <!--Start Categories-->
 <div class="category-list col-md-7">
        <h3>Market</h3>
        <ul class="list-unstyled row text-center">
        <li class="col-md"><a href="market.php?category=0">ALL</a></li>
        <?php 
            foreach ( $treatment->listTreatmentsCategories()  as $cat ){
              ?>  
                <li class="col-md"><a href="market.php?category=<?php echo $cat->category_id; ?>"><?php echo $cat->category_name; ?></a></li>
              <?php 
            }
        ?>
        </ul>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="assets/imgs/carousel-1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/imgs/carousel-2.jpg" alt="Second slide">
            </div>
          </div>                  
        </div>
        <!--Start All Products-->
        <h4>Available Clinic Organizations </h4>
        <div id="responserWrapper"></div>
        <div class="row">
            <?php 
                foreach( $orgnization->getClinicOrganizations() as $info ){
                    ?>
                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="thumbnail">
                            <div class="caption">
                                <h3><?php echo $info->org_name; ?></h3>
                                <p><?php echo $info->org_address; ?>
                                    <div>
                                        <label> Choose You Session Time :  </label>
                                        <select class="form-control input-sm" id="timer<?php echo $info->org_id; ?>">
                                            <?php 
                                                foreach($orgnization->getClinicSchedule($info->org_id) as $infos){
                                                    ?>
                                                        <option value="<?php echo $infos->sched_id;?>"><?php echo $infos->day_name .'-'. $infos->time_start .'-'. $infos->time_end ;?></option>
                                                    <?php 
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </p>
                                <p><button onclick="registerSession(<?php echo $info->org_id;?> , <?php echo $patient->data()->patient_id;?>)" class="btn btn-primary" role="button">Register Session </button> </p>
                            </div>
                            </div>
                        </div>

                    <?php 
                }
            ?>
   
        </div>


    
    </div>
    <!--End Categories-->
<?php 
      }else{
        redirect::to('login.php');
      }
      templateController::get('footer');
      templateController::getScript('booking','operations');
?>