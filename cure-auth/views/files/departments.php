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
      <li  style="display:inline-block"><a href="departments1.php">اقسام مسئولين نظام كيور</a></li>
      <li style="display:inline-block"><a href="departments1.php"> الاقسام المهنية الطبية</a></li>
      <li style="display:inline-block"><a href="departments1.php"> اقسام الطوارئ</a></li>
      <li style="display:inline-block"><a href="departments1.php">اقسام جهات العمل </a></li>
  </ul>














</div>
</div>
</div>
</div>

</div>



















<?php 
  templateController::get('footer');
?>