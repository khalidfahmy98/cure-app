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
      <input type="text" class="form-control" placeholder="اسم المنتج" >
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder="تفاصيل المنتج">
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder="المادة الفعالة">
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder="نوع الدواء">
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder="دولة الصنع">
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder="حجم العبوة">
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder="القسم التابع له من المنتجات">
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder="السعر الرسمي" >
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder="الباركود الدولي" >
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder="ناشر الدواء" >
    </div>
    <div class="col-md-6">
      <input type="file" class="form-control" >
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