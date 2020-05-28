
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
      <li  style="display:inline-block"><a href="products1.php"> تسجيل منتج مرخص جديد</a></li>
      <li style="display:inline-block"><a href="products2.php">عمليات المنتجات المرخصة</a></li>
  </ul>

</div>
</div>
</div>
</div>

</div>



















<?php 
  templateController::get('footer');
?>