<?php 
    require 'core/init.php';
    templateController::setTitle('Homepage | Cure');
    templateController::get('header');
    $treatment = new treatments();
    $patient = new patient ();
    $orgnization = new orgnization();
    $siteStatus = 0 ;
    if ( $patient->isLogged() ) {
      if ( $patient->isOwner($patient->data()->patient_id)){
        $orgId = $orgnization->find($patient->data()->patient_id)->org_id;
        $orgType = $orgnization->find($patient->data()->patient_id)->org_work_type;
        session::put('orgnizationId' , $orgId);
        session::put('workCategory' , 11); // means owner of the orgnization 
        session::put('permissions' , 11);  // means has the full control of all orgnization 
        session::put('orgType' , $orgType);
      }else{
        if ($patient->isWorker($patient->data()->patient_id)) {
          $orgId = $patient->getWorkData($patient->data()->patient_id)->orgniztion_id;
          $workCategory = $patient->getWorkData($patient->data()->patient_id)->work_category;
          $permissions = $patient->getPermissions($workCategory);
          $orgType = $orgnization->getOrgType($orgId);
          session::put('orgnizationId' , $orgId);
          session::put('workCategory' , $workCategory);
          session::put('permissions' , $permissions);
          session::put('orgType' , $orgType);
        }

      }
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
        <!--Start Rated Pharmcy-->
        <h4>Top Rated Pharmcy</h4>
        <div class="row">                 
          <div class="rate-pharmcy col-md-3 col-sm-3">
              <i class="fab fa-500px fa-7x"></i>
          </div>
          <div class="rate-pharmcy col-md-3 col-sm-3">
              <i class="fab fa-500px fa-7x"></i>
          </div>
          <div class="rate-pharmcy col-md-3 col-sm-3">
              <i class="fab fa-500px fa-7x"></i>
          </div>
          <div class="rate-pharmcy col-md-3 col-sm-3">
              <i class="fab fa-500px fa-7x"></i>
          </div>
        </div>
        <!--End Rated Pharmcy-->
        <!--Start Trending-->
        <h4>Trending Now</h4>
        <div class="trend row">
            <div class="trend-category col-sm-4">
              <img class="img-responsive center-block" style="width:175px;" src="assets/imgs/trend-1.jpg"/>
              <p>VaseLine Body Spray Coca Rate ,1909</p>
              <ins>130.00 EGP</ins>
              <del>140.00 EGP</del>
              <p>Eligible for <span>Free Shopping</span></p>
            </div>
            <div class="trend-category col-sm-4">
              <img src="assets/imgs/trend-1.jpg"/>
              <p>VaseLine Body Spray Coca Rate ,1909</p>
              <ins>49.00 EGP</ins>
              <del>60.00 EGP</del>
            </div>
            <div class="trend-category col-sm-4">
              <img src="assets/imgs/trend-1.jpg"/>
              <p>VaseLine Body Spray Coca Rate ,1909</p>
              <ins>300.00 EGP</ins>
            </div>
        </div>
        <!--End Trending-->
        <!--Start All Products-->
        <h4>All Products</h4>
        <div class="trend row">
            <div class="trend-category col-sm-4">
              <img src="assets/imgs/trend-1.jpg"/>
              <p>VaseLine Body Spray Coca Rate ,1909</p>
              <ins>130.00 EGP</ins>
              <del>140.00 EGP</del>
              <p>Eligible for <span>Free Shopping</span></p>
            </div>
            <div class="trend-category col-sm-4">
              <img src="assets/imgs/trend-1.jpg"/>
              <p>VaseLine Body Spray Coca Rate ,1909</p>
              <ins>49.00 EGP</ins>
              <del>60.00 EGP</del>
            </div>
            <div class="trend-category col-sm-4">
              <img src="assets/imgs/trend-1.jpg"/>
              <p>VaseLine Body Spray Coca Rate ,1909</p>
              <ins>300.00 EGP</ins>
            </div>
            <div class="trend-category col-sm-4">
              <img src="assets/imgs/trend-1.jpg"/>
              <p>VaseLine Body Spray Coca Rate ,1909</p>
              <ins>130.00 EGP</ins>
              <del>140.00 EGP</del>
              <p>Eligible for <span>Free Shopping</span></p>
            </div>
            <div class="trend-category col-sm-4">
              <img src="assets/imgs/trend-1.jpg"/>
              <p>VaseLine Body Spray Coca Rate ,1909</p>
              <ins>49.00 EGP</ins>
              <del>60.00 EGP</del>
            </div>
            <div class="trend-category col-sm-4">
              <img src="assets/imgs/trend-1.jpg"/>
              <p>VaseLine Body Spray Coca Rate ,1909</p>
              <ins>300.00 EGP</ins>
            </div>
        </div>
        <div class="trend row">
          <div class="trend-category col-sm-4">
            <img src="assets/imgs/trend-1.jpg"/>
            <p>VaseLine Body Spray Coca Rate ,1909</p>
            <ins>130.00 EGP</ins>
            <del>140.00 EGP</del>
            <p>Eligible for <span>Free Shopping</span></p>
          </div>
          <div class="trend-category col-sm-4">
            <img src="assets/imgs/trend-1.jpg"/>
            <p>VaseLine Body Spray Coca Rate ,1909</p>
            <ins>49.00 EGP</ins>
            <del>60.00 EGP</del>
          </div>
          <div class="trend-category col-sm-4">
            <img src="assets/imgs/trend-1.jpg"/>
            <p>VaseLine Body Spray Coca Rate ,1909</p>
            <ins>300.00 EGP</ins>
          </div>
        </div>
        <div class="trend row">
        <div class="trend-category col-sm-4">
          <img src="assets/imgs/trend-1.jpg"/>
          <p>VaseLine Body Spray Coca Rate ,1909</p>
          <ins>130.00 EGP</ins>
          <del>140.00 EGP</del>
          <p>Eligible for <span>Free Shopping</span></p>
        </div>
        <div class="trend-category col-sm-4">
          <img src="assets/imgs/trend-1.jpg"/>
          <p>VaseLine Body Spray Coca Rate ,1909</p>
          <ins>49.00 EGP</ins>
          <del>60.00 EGP</del>
        </div>
        <div class="trend-category col-sm-4">
          <img src="assets/imgs/trend-1.jpg"/>
          <p>VaseLine Body Spray Coca Rate ,1909</p>
          <ins>300.00 EGP</ins>
        </div>
      </div> 
    </div>
    <!--End Categories-->
<?php 
      }else{
        redirect::to('login.php');
      }
      templateController::get('footer');
?>