<?php 
    require 'core/init.php';
    templateController::setTitle('Craete Account  | Cure');
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
              <p>Cure Biometric Measurement</p>
            </div>
            <div class="cure-item col-lg-2">
              <?php 
                if ( input::get('type')) {
                  ?>
                    <img class="paitent-item" src="assets/Icons/<?php echo input::get('type');?>.png"/>
                  <?php 
                }
              ?>
            </div>
            <div class="cure-item col-md-5">
              <ul class="list-unstyled">
                <li class="cure-list">
                    <label>  Email </label>
                    <input type="hidden" value="<?php echo input::get('cattype');?>">
                    <input type="email" class="form-control input-sm" id="useremail">
                </li>
                <li class="cure-list">
                    <label>  Username </label>
                    <input type="text" class="form-control input-sm" id="username">
                </li>
                <li class="cure-list">
                    <label>  Password </label>
                    <input type="password" class="form-control input-sm" id="userpassword">
                </li>
                <li class="cure-list">
                    <label>  Phone Number </label>
                    <input type="text" class="form-control input-sm" id="userphone">
                </li>
                <li class="cure-list">
                    <label> Nationality </label>
                    <select class="form-control input-sm" id="usernationality">
                        <option  value="EGY"> Egypt </option>
                        <option value="JORD">  Jordan </option>
                        <option value="SUD"> Sudan </option>
                    </select>
                </li>
                <li class="cure-list">
                    <label>   Gender </label>
                    <select class="form-control input-sm" id="usergender">
                        <option value="0"> Male </option>
                        <option value="1">  Female </option>
                        <option value="2"> Other </option>
                    </select>
                </li>
              </ul>
              <button type="button" class="btn btn-primary" onclick="createAccount(<?php echo input::get('cattype'); ?>)">Register</button>
              <div id="responserForToasters">

              </div>
            </div>
        </div>
      </div>
    </div>
  <!--End Create Account-->
  <?php 
      templateController::get('ffooter');
      templateController::getScript('authentication','register');
?>