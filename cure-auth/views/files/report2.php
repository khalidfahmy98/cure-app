
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
      <th class="th-sm"> الشرط او التفاصيل
      </th>
      <th class="th-sm"> الحالة
      </th>
      <th class="th-sm"> العمليات
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Tiger Nixon</td>
      <td>System Architect</td>
      <td>
      <input type="button" class="btn btn-default" value="حذف" >
        <input type="button" class="btn btn-default" value="ايقاف استخدام">
        <input type="button" class="btn btn-default" value="تعديل">
        <input type="button" class="btn btn-default" value="استكمال استخدام">
      </td>
    </tr>
    <tr>
      <td>Garrett Winters</td>
      <td>Accountant</td>
      <td>
      <input type="button" class="btn btn-default" value="حذف" >
        <input type="button" class="btn btn-default" value="ايقاف استخدام">
        <input type="button" class="btn btn-default" value="تعديل">
        <input type="button" class="btn btn-default" value="استكمال استخدام">
      </td>
    </tr>
    <tr>
      <td>Ashton Cox</td>
      <td>Junior Technical Author</td>
      <td>
      <input type="button" class="btn btn-default" value="حذف" >
        <input type="button" class="btn btn-default" value="ايقاف استخدام">
        <input type="button" class="btn btn-default" value="تعديل">
        <input type="button" class="btn btn-default" value="استكمال استخدام">
      </td>
    </tr>
    <tr>
      <td>Cedric Kelly</td>
      <td>Senior Javascript Developer</td>    
      <td>
      <input type="button" class="btn btn-default" value="حذف" >
        <input type="button" class="btn btn-default" value="ايقاف استخدام">
        <input type="button" class="btn btn-default" value="تعديل">
        <input type="button" class="btn btn-default" value="استكمال استخدام">
      </td>
    </tr>
    <tr>
      <td>Airi Satou</td>
      <td>Accountant</td>
      <td>
      <input type="button" class="btn btn-default" value="حذف" >
        <input type="button" class="btn btn-default" value="ايقاف استخدام">
        <input type="button" class="btn btn-default" value="تعديل">
        <input type="button" class="btn btn-default" value="استكمال استخدام">
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
  اضافة شرط
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
     <textarea cols="60" rows="5"></textarea>
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