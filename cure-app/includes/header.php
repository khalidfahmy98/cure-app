<?php 
$patient = new patient();
?>
<html >
<head>
   <meta charset="utf-8" />
   <!--First Mobile Meta-->
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--End Mobile Meta-->
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
   <link rel="stylesheet" href="assets/css/profile.css">
   <link rel="stylesheet" href="assets/css/mfile.css">
   <link rel="stylesheet" href="assets/css/blood.css">
   <link rel="stylesheet" href="assets/css/cart.css">
   <link rel="stylesheet" href="assets/css/style.css">
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
            <?php 
              if ( $patient->data()->patient_image_code == null ) {
                echo '<img src="assets/imgs/tn.png"/>';
              }else{
                echo '<img src="../storage/'. $patient->data()->patient_image_code  .'"/>';
              }
            ?>
              <div class="acc-write">
                <h4><?php echo $patient->data()->patient_username; ?></h4>
                <span class="text-center"><i class="fas fa-dollar-sign"></i><?php echo $patient->data()->patient_e_coins; ?></span>
              </div>
            </div>
             <ul class="list-unstyled">
               <li style="display:block;height:47px;"><a class="active" href="index.php"><i class="fas fa-store-alt"></i>Market</a></li>
               <li style="display:block;height:47px;"><a href="mfile.php"><i class="fas fa-file-medical-alt"></i>Medical File</a></li>
               <li style="display:block;height:47px;"><a href="bloodDonations.php"><i class="fas fa-prescription-bottle-alt"></i>Blood Donation</a></li>
               <li style="display:block;height:47px;"><a href="booking.php"><i class="fas fa-book-medical"></i>Booking Session</a></li>
               <li style="display:block;height:47px;" ><a href="../cure-auth/"><i class="fas fa-cogs"></i>Cure Business</a></li>
               <li style="display:block;height:47px;"><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
             </ul>
            </div>
          </div>
          <!--End Sidebar-->

