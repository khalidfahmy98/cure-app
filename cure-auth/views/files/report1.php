
<?php 
  require_once "../../core/init.php";
  templateController::get('header');
  templateController::get('navigation');
  templateController::setTitle("Homepage | Cure Systems");
?>
<div class="content-wrapper">






<div class="">
<div class="row">
<div class="col-sm-12">

<div class="table-responsive">
<table id="dtBasicExample" class="table datatable table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">حالة المشكلة
      </th>
      <th class="th-sm">اسم المشكلة
      </th>
      <th class="th-sm">تفاصيل المشكلة
      </th>
      <th class="th-sm"> اسم صاحب المشكلة
      </th>
      <th class="th-sm">اسم الصفحة 
      </th>
      <th class="th-sm"> نوع الجهاز 
      </th>
      <th class="th-sm"> العمليات
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
      <td>$320,800</td>
      
     
      
      <td>
      <input type="button" class="btn btn-default" value="حذف" >
        <input type="button" class="btn btn-default" value="رد">
        <input type="button" class="btn btn-default" value="اهمال">
        <input type="button" class="btn btn-default" value="قبول الشكوي">
      </td>
    </tr>
    <tr>
      <td>Garrett Winters</td>
      <td>Accountant</td>
      <td>Tokyo</td>
      <td>63</td>
      <td>2011/07/25</td>
      <td>$86,000</td>
      
      
      <td>
      <input type="button" class="btn btn-default" value="حذف" >
        <input type="button" class="btn btn-default" value="رد">
        <input type="button" class="btn btn-default" value="اهمال">
        <input type="button" class="btn btn-default" value="قبول الشكوي">
      </td>
    </tr>
    <tr>
      <td>Ashton Cox</td>
      <td>Junior Technical Author</td>
      <td>San Francisco</td>
      <td>66</td>
      <td>2009/01/12</td>
      <td>$86,000</td>
      
    
      
      <td>
      <input type="button" class="btn btn-default" value="حذف" >
        <input type="button" class="btn btn-default" value="رد">
        <input type="button" class="btn btn-default" value="اهمال">
        <input type="button" class="btn btn-default" value="قبول الشكوي">
      </td>
    </tr>
    <tr>
      <td>Cedric Kelly</td>
      <td>Senior Javascript Developer</td>
      <td>Edinburgh</td>
      <td>22</td>
      <td>2012/03/29</td>
      <td>$433,060</td>
      

      
      <td>
      <input type="button" class="btn btn-default" value="حذف" >
        <input type="button" class="btn btn-default" value="رد">
        <input type="button" class="btn btn-default" value="اهمال">
        <input type="button" class="btn btn-default" value="قبول الشكوي">
      </td>
    </tr>
    <tr>
      <td>Airi Satou</td>
      <td>Accountant</td>
      <td>Tokyo</td>
      <td>33</td>
      <td>2008/11/28</td>
      <td>$162,700</td>
     
      
    
      <td>
      <input type="button" class="btn btn-default" value="حذف" >
        <input type="button" class="btn btn-default" value="رد">
        <input type="button" class="btn btn-default" value="اهمال">
        <input type="button" class="btn btn-default" value="قبول الشكوي">
      </td>
    </tr>
    </tbody>
</table>

</div>
</div>
</div>
</div>



<!-- ---------------------------------modal-------------------- -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  الرد
</button> 

<!-- Modal -->
 <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <textarea cols="70" rows="10"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> 
</div>





























<?php 
  templateController::get('footer');
?>