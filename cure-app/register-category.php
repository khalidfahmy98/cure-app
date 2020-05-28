<?php 
    require 'core/init.php';
    templateController::setTitle('Homepage | Cure');
    templateController::get('fheader');
?>
   <!--Start Create Account-->
   <div class="create-account">
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
                  <li><a class="nav-list" href="#">Login</a></li>
                  <li><a class="nav-list" href="#">Support</a></li>
                  <li><a class="nav-list" href="#">Faq</a></li>
               </ul>
            </div>
         <!--End Navbar-->
            <div class="cure-bio col-md-12">
              <h2>Create Free Account</h2>
              <p>Choose Your Account Type First To Continue ..</p>
            </div>
            <div class="row">
                <a href="#" class="cure-item col-lg-2">
                    <div >
                        <img class="paitent-item" src="assets/Icons/patient.png.png"/>
                    </div>
                </a>
                <a href="#" class="cure-item col-lg-2">
                    <div >
                        <img class="paitent-item" src="assets/Icons/patient.png.png"/>
                    </div>
                </a>
                <a href="#" class="cure-item col-lg-2">
                    <div >
                        <img class="paitent-item" src="assets/Icons/patient.png.png"/>
                    </div>
                </a>
                <a href="#" class="cure-item col-lg-2">
                    <div >
                        <img class="paitent-item" src="assets/Icons/patient.png.png"/>
                    </div>
                </a>
                <a href="#" class="cure-item col-lg-2">
                    <div >
                        <img class="paitent-item" src="assets/Icons/patient.png.png"/>
                    </div>
                </a>
                <a href="#" class="cure-item col-lg-2">
                    <div >
                        <img class="paitent-item" src="assets/Icons/patient.png.png"/>
                    </div>
                </a>
                <a href="#" class="cure-item col-lg-2">
                    <div >
                        <img class="paitent-item" src="assets/Icons/patient.png.png"/>
                    </div>
                </a>
                <a href="#" class="cure-item col-lg-2">
                    <div >
                        <img class="paitent-item" src="assets/Icons/patient.png.png"/>
                    </div>
                </a>

            </div>
        </div>
      </div>
    </div>
  <!--End Create Account-->
  <?php 
      templateController::get('ffooter');
?>