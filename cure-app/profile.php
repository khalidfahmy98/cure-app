<!DOCTYPE html>
<html >
<head>
   <meta charset="utf-8" />
   <!--First Mobile Meta-->
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--End Mobile Meta-->
   <title>Cure Platform</title>
   <!--Start Fontawesome-->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous">
   <!--End Fontawesome-->
   <!--Start Google Font-->
   <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Tangerine">
   <!--End Google Font-->
      <!--Start Bootstrap Css-->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <!--End Bootstrap Css-->
   <link rel="stylesheet" href="assets/css/profile.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>
<body>
    <!--Start Navbar-->
   <div class="nave">
    <div class="container">
      <div class="row">
        <!--Start Navbar-->  
        <div class="nav-bar">
          <input type="checkbox" id="check">
          <label for="check" class="checkbtn">
             <i class="fas fa-bars"></i>
          </label> 
          <label>
             <img class="cure-logo" src="assets/imgs/logo.png.png"/>
          </label>
          <ul class="list-unstyled">
            <li><a href=""><i class="far fa-envelope fa-x active"></i></a> </li>
            <li><a href=""><i class="far fa-bell fa-x"></i></a> </li> 
            <li><a href="cart.html"><i  class="fas fa-shopping-cart fa-x"></i></a> </li>
         </ul>
       </div>
    <!--End Navbar-->
      </div>
    </div>
  </div>
<section class="categorey">
<!--Start Cure Category-->
<div class="cure-category">
  <div class="container">
     <div class="row">
      <!--Start Sidebar-->
        <div class="col-md-3">    
          <div class="sidebar">
          <div class="acc-image row">
            <img src="assets/imgs/profile.png"/>
            <div class="acc-write">
              <h4>Tarek NeGm</h4>
              <span class="text-center"><i class="fas fa-dollar-sign"></i>999</span>
            </div>
          </div>
           <ul class="list-unstyled">
             <li><a href="index.html"><i class="fas fa-store-alt"></i>Market</a></li>
             <li><a href="#"><i class="fas fa-credit-card"></i>Black Market</a></li>
             <li><a href="mfile.html"><i class="fas fa-file-medical-alt"></i>Medical File</a></li>
             <li><a href="blood.html"><i class="fas fa-prescription-bottle-alt"></i>Blood Donation</a></li>
             <li><a href="#"><i class="fas fa-book-medical"></i>Mdeical Book</a></li>
             <li><a href="#"><i class="fas fa-cogs"></i>Settings</a></li>
             <li><a class="active" href="profile.html"><i class="fas fa-user-alt"></i>Profile</a></li>
             <li><a href="#"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
           </ul>
          </div>
        </div>
        <!--End Sidebar-->
       <!--Start Profile-->
       <div class="profile col-md-7">      
        
        <div class="profile">
            <div class="cover-info">
                <img class="cover" src="assets/imgs/cover.png">
                <button type="button" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" class="btn btn-secondary">Edit Profile</button>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Name</label>
                              <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Location</label>
                                <input type="text" class="form-control" id="recipient-name">
                              </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Website</label>
                                <input type="text" class="form-control" id="recipient-name">
                              </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="close-model btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="save-model btn btn-primary">Save</button>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="row">
                <img class="profile" src="assets/imgs/profile.png">
            </div>
        </div>
        <div class="profile-info">
            <h4>Tarek NeGm</h4>
        </div>

        </div>
    <!--End Profile-->
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
                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
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
                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
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
        <!--End Donate Section-->
      </div>
     </div>
  </div>
</div>
<!--End Cure Category-->
</section>
<!--End Navbar--> 
   <script src="http://code.jquery.com/jquery-1.11.1.js" integrity="sha256-MCmDSoIMecFUw3f1LicZ/D/yonYAoHrgiep/3pCH9rw="
   crossorigin="anonymous"></script>
   <script src="assets/js/main.js"></script>
   <!--Start Bootstrap Js-->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <!--End Loading By JQuery--> 
</body>
</html>