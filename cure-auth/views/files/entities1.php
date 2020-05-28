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
      <input type="text" class="form-control" placeholder="اليوزر" >
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder="الباسوورد">
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder="البريد">
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder="اسم جهة العمل">
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder="رقم الهاتف">
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder="رقم الفاكس">
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder="الموقع الرسمي">
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder="القسم التابع له">
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder="عنوان جهة العمل">
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder="رقم الترخيص الخاص بجهة العمل">
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