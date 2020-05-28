<?php 
  require_once "../../core/init.php";
  templateController::get('header');
  templateController::get('navigation');
  templateController::setTitle("Homepage | Cure Systems");
?>
<div class="content-wrapper">
  
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">




<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">اسم القسم</th>
      <th scope="col">الحالة</th>
      <th scope="col">العمليات</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Mark</td>
      <td>
     
     <input type="button" value="بلوك" >
     <input type="button" value="تعديل">
     <input type="button" value="حذف">
     <input type="button" value="فك البلوك">
           </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Mark</td>
      <td>Mark</td>
      <td>
     
     <input type="button" value="بلوك" >
     <input type="button" value="تعديل">
     <input type="button" value="حذف">
     <input type="button" value="فك البلوك">
           </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Jacob</td>
      <td>Mark</td>
      
      <td>
     
     <input type="button" value="بلوك" >
     <input type="button" value="تعديل">
     <input type="button" value="حذف">
     <input type="button" value="فك البلوك">
           </td>
      
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Larry</td>
      <td>Mark</td>
      <td>
     
     <input type="button" value="بلوك" >
     <input type="button" value="تعديل">
     <input type="button" value="حذف">
     <input type="button" value="فك البلوك">
           </td>
     
    </tr>
    </tbody>
</table>

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
        <input type="text" placeholder="اسم القسم">
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