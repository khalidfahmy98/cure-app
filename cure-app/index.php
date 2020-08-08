<?php 
    require 'core/init.php';
    templateController::setTitle('Homepage | Cure');
    templateController::get('header');
    $treatment = new treatments();
    $patient = new patient ();
    $orgnization = new orgnization();
    $product = new product();
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
        <!--Start All Products-->
        <h4>Cure Market Products</h4>
        <div class="trend row">
            <?php 
              foreach ( $product->getProducts() as $info ){
                ?>
                <div class="trend-category col-md-4  col-sm-4 col-xs-12">
                  <img src="../storage/<?php echo $info->product_image;?>"/>
                  <p><?php echo $info->product_name;?></p>
                  <ins><?php echo $info->item_price?> L.E</ins>
                  <?php 
                    if ( $info->item_price < $info->product_price){
                      ?>
                        <del><?php echo $info->product_price?> L.E </del>
                      <?php
                    } 
                  ?>
                  <p>Seller : <a href="orgmarket?id=<?php echo $info->org_id;?>"><?php echo $info->org_name;?></a></p>
                  <button class="btn btn-primary btn-sm" onclick="addToCart(<?php echo $info->item_id;?>)">Add To Cart</button>
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
?>