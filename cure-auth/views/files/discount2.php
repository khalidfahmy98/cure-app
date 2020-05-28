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
      <input type="text" class="form-control" placeholder="اسم العرض" >
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder="تفاصيل العرض">
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder=" سعر العرض">
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder=" العرض من">
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder=" العرض الي">
    </div>
    <div class="col-md-6">
      <input type="file" class="form-control">
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
      <th class="th-sm">اسم العرض
      </th>
      <th class="th-sm">تفاصيل العرض
      </th>
      <th class="th-sm">سعر العرض 
      </th>
      <th class="th-sm">العرض من
      </th>
      <th class="th-sm">العرض الي
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
      <td>2011/04/25</td>
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
      <td>2011/04/25</td>
      
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