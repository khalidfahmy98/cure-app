<?php 
  require_once "../../core/init.php";
  templateController::get('header');
  templateController::get('navigation');
  templateController::setTitle("Homepage | Cure Systems");
?>


<div class="content-wrapper">
<!-- ---------------------------------modal-------------------- -->
<!-- Button trigger modal -->
 <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Launch demo modal
</button>  -->

<!-- Modal -->
 <!-- <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>  -->
<div class="">
<div class="row">
<div class="col-sm-12">

<div class="table-responsive">
<table id="dtBasicExample" class="table datatable table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">اسم الطوارئ
      </th>
      <th class="th-sm"> رقم الطوارئ
      </th>
      <th class="th-sm"> الجهة التابعة 
      </th>
      <th class="th-sm"> البلد 
      </th>
      <th class="th-sm"> القسم 
      </th>
      <th class="th-sm">  الحالة 
      </th>
      <th class="th-sm">  العمليات 
      </th>
    
     

    </tr>
  </thead>
  <tbody>
  <tr>
      <td>Donna Snider</td>
      <td>Customer Support</td>
      <td>Tiger Nixon</td>
      <td>System Architect</td>
      <td>System Architect</td>
      <td>System Architect</td>
     
      

     
      <td>
      <input type="button" class="btn btn-default" value="حظر " >
      <input type="button" class="btn btn-default" value="تعديل">
      <input type="button" class="btn btn-default" value="حذف">
      </td>
    </tr>
  
    <tr>
      <td>Donna Snider</td>
      <td>Customer Support</td>
      <td>Tiger Nixon</td>
      <td>System Architect</td>
      <td>System Architect</td>
      <td>System Architect</td>
      
      

     
      <td>
      <input type="button" class="btn btn-default" value="حظر " >
      <input type="button" class="btn btn-default" value="تعديل">
      <input type="button" class="btn btn-default" value="حذف">
      </td>
    </tr>
    <tr>
      <td>Tiger Nixon</td>
      <td>System Architect</td>
      <td>Tiger Nixon</td>
      <td>System Architect</td>
      <td>System Architect</td>
      <td>System Architect</td>
    
     
      <td>
      <input type="button" class="btn btn-default" value="حظر " >
      <input type="button" class="btn btn-default" value="تعديل">
      <input type="button" class="btn btn-default" value="حذف">
      </td>
    </tr>
  
    <tr>
      <td>Donna Snider</td>
      <td>Customer Support</td>
      <td>Tiger Nixon</td>
      <td>System Architect</td>
      <td>System Architect</td>
      <td>System Architect</td>
      
      <td>
      <input type="button" class="btn btn-default" value="حظر " >
      <input type="button" class="btn btn-default" value="تعديل">
      <input type="button" class="btn btn-default" value="حذف">
      </td>
    </tr>
    <tr>
      <td>Tiger Nixon</td>
      <td>System Architect</td>
      <td>Tiger Nixon</td>
      <td>System Architect</td>
      <td>System Architect</td>
      <td>System Architect</td>
   
      <td>
      <input type="button" class="btn btn-default" value="حظر " >
      <input type="button" class="btn btn-default" value="تعديل">
      <input type="button" class="btn btn-default" value="حذف">
      </td>
    </tr>
  
    <tr>
      <td>Donna Snider</td>
      <td>Customer Support</td>
      <td>Tiger Nixon</td>
      <td>System Architect</td>
      <td>System Architect</td>
      <td>System Architect</td>
    
      <td>
      <input type="button" class="btn btn-default" value="حظر " >
      <input type="button" class="btn btn-default" value="تعديل">
      <input type="button" class="btn btn-default" value="حذف">
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
  تسجيل مساحة اعلانية
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
        <input type="text" placeholder="اسم الطوارئ">
        <input type="number" placeholder="رقم الطوارئ">
        <input type="text" placeholder= "القسم التابعة له">
        <input type="text" placeholder= "البلد التابعة له">
        <input type="text" placeholder= "الجهة التابعة له">
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
  require_once "../../core/init.php";
  templateController::get('footer');

?>

