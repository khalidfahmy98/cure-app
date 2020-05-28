<?php 
  require_once "../../core/init.php";
  templateController::get('header');
  templateController::get('navigation');
  templateController::setTitle("Homepage | Cure Systems");
?>
<div class="content-wrapper">
  
<div class="container">
<div class="row">
<div class="col-md-8 col-sm-6 col-xs-12">



<form>
  <div class="row">
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder="اسم الطبيب" >
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder="رقم النقابة">
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder="الرقم القومي">
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder="البريد الالكتروني">
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder="الهاتف">
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder="اليوزرنيم">
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder="الباسورد">
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder="الجهة التابع لها">
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder="القسم التابع له">
    </div>
  </div>
</form>












</div>
</div>
</div>
</div>





















<?php 
  templateController::get('footer');
?>