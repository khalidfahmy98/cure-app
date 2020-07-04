<?php 
    require 'core/init.php';
    templateController::setTitle('Homepage | Cure');
    templateController::get('header');
    if ( $patient->isLogged() ) {
?>
    <!--Start Categories-->
    <div class="category-list col-md-7">
        <h3>Market</h3>
        <ul class="list-unstyled row text-center">
          <li class="col-md">All</li>
          <li class="col-md">Treatment</li>
          <li class="col-md">Tools</liclass="col-md">
          <li class="col-md">Treatment</li>
          <li class="col-md">Tools</li>
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
    <!--Start Donate Section-->
    <div class="donation col-md-2">
      <div class="donation-fixed">
        <input class="search-market" type="text" placeholder="Search Market"/>
        <div class="row setting-donation">
          <h4 class="col-md">Donation</h4>
          <i class="col-md fas fa-cog"></i>
          <div id="accordion">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Donate Request In Sharqia
                  </button>
                </h5>
              </div>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Donate Request In Sharqia
                  </button>
                </h5>
              </div>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute
                </div>
              </div>
            </div>
            
            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Show More
                  </button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row cure-inc">                  
        <a href="#">Terms</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Cookies</a>
        <a href="#">Ads Info</a>
        <a href="#">More</a>        
      </div>
      <p class="inc-2020 text-center"> &copy;2020 cure.Ins</p>
    </div>

<?php 
      }else{
        redirect::to('login.php');
      }
      templateController::get('footer');
?>