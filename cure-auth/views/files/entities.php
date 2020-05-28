<?php 
  require_once "../../core/init.php";
  templateController::get('header');
  templateController::get('navigation');
  templateController::setTitle("Homepage | Cure Systems");
?>
<div class="content-wrapper">
  
<div class="container">
<div class="row">
<div class="col-md-10 col-sm-6 col-xs-12">


<div class="list">
  <ul style="list-style-type:none;color:white">
      <li  style="display:inline-block"><a href="entities1.php">تسجيل جهة عمل</a></li>
      <li style="display:inline-block"><a href="entities2.php">عمليات جهات العمل</a></li>
      <li style="display:inline-block"><a href="entities3.php">مخازن جهات العمل</a></li>
  </ul>














</div>
</div>
</div>
</div>

</div>



















<?php 
  templateController::get('footer');
?>