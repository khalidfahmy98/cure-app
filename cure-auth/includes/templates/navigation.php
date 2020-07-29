<?php 
  $patient  = new patient();
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
      <a href="#"><i class="fa fa-circle text-aqua"></i>Doctor</a>
    </div>
  </div>
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class=" treeview menu-open active">
      <a href="#">
        <i class="fa fa-dashboard"></i> <span>Management system</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="../../views/cure_managers/"><i class="fa fa-circle-o"></i>Register Manager</a></li>
        <li><a href="../../views/cure_managers/operations.php"><i class="fa fa-circle-o"></i>Managers Operations</a></li>
        <li><a href="../../views/cure_managers/logs.php"><i class="fa fa-circle-o"></i>Managers Logs</a></li>
      </ul>
    </li>
    <li class=" treeview menu-open active">
      <a href="#">
        <i class="fa fa-dashboard"></i> <span>Emergencies Data</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="../../views/emergencies/"><i class="fa fa-circle-o"></i>Emergency Requests</a></li>
        <li><a href="../../views/emergencies/"><i class="fa fa-circle-o"></i>Emergency Locations</a></li>
        <li><a href="../../views/emergencies/"><i class="fa fa-circle-o"></i>Emergency Workers</a></li>
      </ul>
    </li>
    
    <!-- <li><a href="../../views/files/report2.php"><i class="fa fa-book"></i> <span>Policies & Terms</span></a></li> -->
    <li class="header">SHORTCUTS</li>
    <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Cure Platform</span></a></li>
    <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Report Issues</span></a></li>
    <li><a href="#"><i class="fa fa-circle-o text-success"></i> <span>Support</span></a></li>
  </ul>
</section>
<!-- /.sidebar -->
</aside>
<!-- Content Wrapper. Contains page content -->
