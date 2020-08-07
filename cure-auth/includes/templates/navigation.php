<?php 
  $patient  = new patient();
  $orgnization = new orgnization();
?>
<header class="main-header">
<!-- Logo -->
<a href="../Home/" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->
  <span class="logo-mini"><b>CURE</b></span>
  <!-- logo for regular state and mobile devices -->
  <span class="logo-lg"><b>CURE</b></span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>
  <!-- Navbar Right Menu -->
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- User Account: style can be found in dropdown.less -->
      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <?php 
            if ( $patient->data()->patient_image_code == null ) {
              echo '<img class="user-image" alt="User Image" src="../../assets/dist/img/tn.png" />';
            }else{
              echo '<img  class="user-image" alt="User Image" src="../../storage/'. $patient->data()->patient_image_code  .'"/>';
            }
        ?>
          <span class="hidden-xs"><?php echo  $patient->data()->patient_username; ?></span>
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">
          <?php 
            if ( $patient->data()->patient_image_code == null ) {
              echo '<img class="img-circle" alt="User Image" src="../../assets/dist/img/tn.png"/>';
            }else{
              echo '<img class="img-circle" alt="User Image" src="../../storage/'. $patient->data()->patient_image_code  .'"/>';
            }
        ?>
            <p>
              <?php echo $patient->data()->patient_username; ?>
              <small>Member since <?php echo $patient->data()->patient_registerdate; ?></small>
            </p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="pull-left">
              <a href="#" class="btn btn-default btn-flat">Profile</a>
            </div>
            <div class="pull-right">
              <a href="../../../cure-app/logout.php" class="btn btn-default btn-flat">Sign out</a>
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
    <?php 
            if ( $patient->data()->patient_image_code == null ) {
              echo '<img class="img-circle" alt="User Image" src="../../assets/dist/img/tn.png"/>';
            }else{
              echo '<img class="img-circle" alt="User Image" src="../../storage/'. $patient->data()->patient_image_code  .'"/>';
            }
        ?>
    </div>
    <div class="pull-left info">
      <p><?php echo $patient->data()->patient_username; ?></p>
      <a href="#"><i class="fa fa-circle text-aqua"></i>
            <?php 
              if ( $patient->data()->worker_account_type == 1 ){
                echo 'Service Provider';
              }else if ($patient->data()->worker_account_type == 2 ) {
                echo 'Doctor';
              }else{
                echo 'Worker';
              }
            ?>
      </a>
    </div>
  </div>
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu" data-widget="tree">
      <?php 
          if ( $orgnization->orgStatus(session::get('orgnizationId')) == 0 ){
            ?>
            <li class="header">Pending </li>
            <?php 
          }else{
                ?>
              <li class="header"> 
                <?php 
                if ( session::get('orgType') == 1 ) {
                  echo 'Pharma Naviagtion';
                  // show some feature for pharma worker 
                }else if ( session::get('orgType') == 2 ) {
                  echo 'Factory Naviagtion';
                    // show some feature for Factory worker 
                }else if ( session::get('orgType') == 3 ) {
                  echo 'Laboratory Naviagtion';
                    // show some feature for Laboratory worker 
                }else if ( session::get('orgType') == 4 ) {
                  echo 'Clinic Naviagtion';
                    // show some feature for Clinic worker 
                }
              ?>
              </li>
              <?php 
                if (session::get('permissions') == 11 ){
                    ?>
                  <li class=" treeview menu-open active">
                      <a href="#">
                        <i class="fa fa-users"></i> <span>Orgnization Workers</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="../../views/workers/"><i class="fa fa-circle-o"></i>Workers Operations</a></li>
                        <li><a href="../../views/workers/categories.php"><i class="fa fa-circle-o"></i>Categories Operations</a></li>
                      </ul>
                    </li>
                    <li class=" treeview menu-open ">
                      <a href="#">
                        <i class="fa fa-arrows-alt"></i> <span>Branches</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="../branches/"><i class="fa fa-circle-o"></i>Branches Operations</a></li>
                      </ul>
                    </li>
                    <?php 
                } 
              ?>
              <?php 
                  if ( session::get('orgType') == 1 ) {
                        // show some feature for pharma worker 
                    ?>
                  <li class=" treeview menu-open ">
                    <a href="#">
                      <i class="fa fa-shopping-cart"></i> <span>Warehouse & Sell</span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="../warehouseSell/index.php"><i class="fa fa-circle-o"></i>Warehouse Operations</a></li>
                      <li><a href="../warehouseSell/selloperations.php"><i class="fa fa-circle-o"></i>Sell </a></li>
                      <li><a href="../warehouseSell/orders.php"><i class="fa fa-circle-o"></i>Market Orders </a></li>
                    </ul>
                  </li>
                    <?php
                  }else if ( session::get('orgType') == 2 ) {
                      // show some feature for Factory worker 
                    ?>
                      <li class=" treeview menu-open ">
                        <a href="#">
                          <i class="fa fa-shopping-cart"></i> <span>Warehouse & Sell</span>
                          <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu">
                          <li><a href="../warehouseSell/index.php"><i class="fa fa-circle-o"></i>Warehouse Operations</a></li>
                          <li><a href="../warehouseSell/selloperations.php"><i class="fa fa-circle-o"></i>Sell </a></li>
                          <li><a href="../warehouseSell/orders.php"><i class="fa fa-circle-o"></i>Market Orders </a></li>
                        </ul>
                      </li>
                  <?php
                  }else if ( session::get('orgType') == 3 ) {
                      // show some feature for Laboratory worker 
                      ?>
                    <li class=" treeview menu-open ">
                          <a href="#">
                            <i class="fa fa-leanpub"></i> <span>Lab</span>
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                          </a>
                          <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i>Lab Operations</a></li>
                          </ul>
                        </li>
                      <?php
                  }else if ( session::get('orgType') == 4 ) {
                      // show some feature for Clinic worker 
                      ?>  
                  <li class=" treeview menu-open ">
                      <a href="#">
                        <i class="fa fa-file"></i> <span>Reservations</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i>Reservations List </a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Session Scheduale</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Perceptions</a></li>
                      </ul>
                    </li>
                      <?php 
                  }
              ?>
           
      
           
    

              <?php 
            }
      ?>
    
    <!-- <li><a href="../../views/files/report2.php"><i class="fa fa-book"></i> <span>Policies & Terms</span></a></li> -->
    <li class="header">SHORTCUTS</li>
    <li><a href="../../../cure-app/"><i class="fa fa-circle-o text-aqua"></i> <span>Cure Platform</span></a></li>
  </ul>
</section>
<!-- /.sidebar -->
</aside>
<!-- Content Wrapper. Contains page content -->
