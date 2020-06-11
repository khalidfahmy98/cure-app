<?php 
    require 'core/init.php';
    templateController::setTitle('Login | Cure');
    templateController::get('fheader');
    $patient = new patient ();
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
                  <li><a class="nav-list" href="register-category.php">Register</a></li>
                  <li><a class="nav-list" href="#">Support</a></li>
                  <li><a class="nav-list" href="#">Faq</a></li>
               </ul>
            </div>
         <!--End Navbar-->
            <div class="cure-bio col-md-12">
              <h2>Access Now your Account As Patient Only </h2>
              <p>Cure Biometric Measurement <a href="../cure-app/register.php">Create Now Free Account ? </a></p>
            </div>
            <div class="cure-item col-md-7">
               <form action="" method="POST">
                  <ul class="list-unstyled">
                     <li class="cure-list">
                        <label>  Username </label>
                        <input type="text" class="form-control input-sm" id="username" name="username">
                     </li>
                     <li class="cure-list">
                        <label>  Password </label>
                        <input type="password" class="form-control input-sm" id="password" name="password">
                     </li>
                  </ul>
                  <button type="submit" class="btn btn-primary">Login</button>
               </form>
              <?php 
        if( session::exists(config::get('session/session_name'))){
            redirect::to('index.php');
        }else{
                if( input::exists() ) {
                        $validate = new validation();
                        $validate->check($_POST,array(
                            'username' => array(
                                'required' => true 
                            ),
                            'password' => array(
                                'required' => true 
                            )
                        ));
                    if($validate->passed()){
                        $remember = true ;
                        $login = $patient->login(input::get('username'),input::get('password'),$remember);
            
                        if ($login){
                            redirect::to('index.php');
                        }else{
                            toasters::error('Sorry , Cant Sign In Try Again ..');
                        }
            
                    }else{
                        foreach($validate->errors() as $error ){
                            echo $error;
                            }
                        }
                }
        }
            ?> 
            </div>
            <div class="col-md-5">
              <img class="doctor-item img-thumbnail" src="assets/Icons/doctor.png.png"/>
            </div>
        </div>
      </div>
    </div>
  <!--End Create Account-->
  <?php 
      templateController::get('ffooter');
?>