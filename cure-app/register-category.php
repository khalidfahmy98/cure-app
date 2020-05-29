<?php 
    require 'core/init.php';
    templateController::setTitle('Choose Account Type  | Cure');
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
                  <li><a class="nav-list" href="login.php">Login</a></li>
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
                <a href="register.php?type=patient.png" class="cure-item col-lg-2">
                    <div >
                        <img class="paitent-item" src="assets/Icons/patient.png.png"/>
                    </div>
                </a>
                <a href="register.php?type=doctor-white" class="cure-item col-lg-2">
                    <div >
                        <img class="paitent-item" src="assets/Icons/doctor-white.png"/>
                    </div>
                </a>
                <a href="register.php?type=lab-microscope-white" class="cure-item col-lg-2">
                    <div >
                        <img class="paitent-item" src="assets/Icons/lab-microscope-white.png"/>
                    </div>
                </a>
                <a href="register.php?type=pharmacy-white" class="cure-item col-lg-2">
                    <div >
                        <img class="paitent-item" src="assets/Icons/pharmacy-white.png"/>
                    </div>
                </a>
                <a href="register.php?type=factory-white" class="cure-item col-lg-2">
                    <div >
                        <img class="paitent-item" src="assets/Icons/factory-white.png"/>
                    </div>
                </a>
                <a href="register.php?type=hospital-buildings-white" class="cure-item col-lg-2">
                    <div >
                        <img class="paitent-item" src="assets/Icons/hospital-buildings-white.png"/>
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