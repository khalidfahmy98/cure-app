
<?php 
  require_once "../../core/init.php";
  templateController::get('header');
  templateController::get('navigation');
  templateController::setTitle("Homepage | Cure Systems");
?>
<div class="content-wrapper">
  
<div class="container">
<div class="row">
<div class="col-md-4 col-sm-6 col-xs-12">
<div class="list">
  <ul style="list-style-type:none;color:white">
      <li  style="display:inline-block"><a href="paramedics1.php">تسجيل مسعف</a></li>
      <li style="display:inline-block"><a href="paramedics2.php">عمليات المسعفين المسجلين</a></li>
  </ul>

</div>
</div>
</div>
</div>

</div>



















<?php 
  templateController::get('footer');
?>