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
      <input type="text" class="form-control" placeholder="اسم الخصم" >
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder="نوع الخصم  نسبة ام  مبلغ">
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder="قيمة الخصم">
    </div>
    </div>
</form>
</div>
</div>
</div>
<!-- ---------------------------------------------------------- -->
<div class="table-responsive">
<table id="dtBasicExample" class="table datatable table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">اسم الخصم
      </th>
      <th class="th-sm">نوع الخصم
      </th>
      <th class="th-sm">قيمة الخصم 
      </th>
      <th class="th-sm">الحالة
      </th>
      <th class="th-sm">العملية
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Tiger Nixon</td>
      <td>System Architect</td>
      <td>Edinburgh</td>
      <td>61</td>
      <td>2011/04/25</td>
      <td>
      <input type="button" class="btn btn-default" value="حظر " >
      <input type="button" class="btn btn-default" value="انهاء حظر">
      <input type="button" class="btn btn-default" value="تعديل " >
      <input type="button" class="btn btn-default" value="حذف">
      </td>
    </tr>
  
    <tr>
      <td>Donna Snider</td>
      <td>Customer Support</td>
      <td>New York</td>
      <td>27</td>
      <td>2011/01/25</td>
      <td>
      <input type="button" class="btn btn-default" value="حظر " >
      <input type="button" class="btn btn-default" value="انهاء حظر">
      <input type="button" class="btn btn-default" value="تعديل " >
      <input type="button" class="btn btn-default" value="حذف">
      </td>
    </tr>
    <tr>
      <td>Tiger Nixon</td>
      <td>System Architect</td>
      <td>Edinburgh</td>
      <td>61</td>
      <td>2011/04/25</td>
     
      <td>
      <input type="button" class="btn btn-default" value="حظر " >
      <input type="button" class="btn btn-default" value="انهاء حظر">
      <input type="button" class="btn btn-default" value="تعديل " >
      <input type="button" class="btn btn-default" value="حذف">
      </td>
    </tr>
  
    <tr>
      <td>Donna Snider</td>
      <td>Customer Support</td>
      <td>New York</td>
      <td>27</td>
      <td>2011/01/25</td>
      
      <td>
      <input type="button" class="btn btn-default" value="حظر " >
      <input type="button" class="btn btn-default" value="انهاء حظر">
      <input type="button" class="btn btn-default" value="تعديل " >
      <input type="button" class="btn btn-default" value="حذف">
      </td>
    </tr>
    
  
  </tbody>

</table>

</div>











</div>





















<?php 
  templateController::get('footer');
?>