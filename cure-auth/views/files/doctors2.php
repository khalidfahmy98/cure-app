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
      <th class="th-sm">اسم الطبيب
      </th>
      <th class="th-sm">رقم النقابة
      </th>
      <th class="th-sm">الرقم القومي 
      </th>
      <th class="th-sm">البريد الالكتروني
      </th>
      <th class="th-sm">الهاتف
      </th>
      <th class="th-sm">اليوزر نيم
      </th>
      <th class="th-sm">الباسورد
      </th>
      <th class="th-sm">الجهة التابع لها  
      </th>
      <th class="th-sm">القسم التابع له
      </th>
      <th class="th-sm">الحالة
      </th>
      <th class="th-sm">العمليات
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
      <td>$320,800</td>
      <td>$320,800</td>
      <td>$320,800</td>
      <td>$320,800</td>
      <td>
      <input type="button" class="btn btn-default" value="حظر استخدام" >
      <input type="button" class="btn btn-default" value=" تنبيه بحسسن التصرف">
      <input type="button" class="btn btn-default" value="حذف">
      </td>
    </tr>
  
    <tr>
      <td>Donna Snider</td>
      <td>Customer Support</td>
      <td>New York</td>
      <td>27</td>
      <td>2011/01/25</td>
      <td>$112,000</td>
      <td>$320,800</td>
      <td>$320,800</td>
      <td>$320,800</td>
      <td>$320,800</td>
      <td>
      <input type="button" class="btn btn-default" value="حظر استخدام" >
      <input type="button" class="btn btn-default" value="تنبيه بحسن التصرف">
      <input type="button" class="btn btn-default" value="حذف">
      </td>
    </tr>
    <tr>
      <td>Tiger Nixon</td>
      <td>System Architect</td>
      <td>Edinburgh</td>
      <td>61</td>
      <td>2011/04/25</td>
      <td>$320,800</td>
      <td>$320,800</td>
      <td>$320,800</td>
      <td>$320,800</td>
      <td>$320,800</td>
      <td>
      <input type="button" class="btn btn-default" value="حظر استخدام" >
      <input type="button" class="btn btn-default" value="تنبيه بحسن التصرف">
      <input type="button" class="btn btn-default" value="حذف">
      </td>
    </tr>
  
    <tr>
      <td>Donna Snider</td>
      <td>Customer Support</td>
      <td>New York</td>
      <td>27</td>
      <td>2011/01/25</td>
      <td>$112,000</td>
      <td>$320,800</td>
      <td>$320,800</td>
      <td>$320,800</td>
      <td>$320,800</td>
      <td>
      <input type="button" class="btn btn-default" value="حظر استخدام" >
      <input type="button" class="btn btn-default" value="تنبيه بحسن التصرف">
      <input type="button" class="btn btn-default" value="حذف">
      </td>
    </tr>
    <tr>
      <td>Tiger Nixon</td>
      <td>System Architect</td>
      <td>Edinburgh</td>
      <td>61</td>
      <td>2011/04/25</td>
      <td>$320,800</td>
      <td>$320,800</td>
      <td>$320,800</td>
      <td>$320,800</td>
      <td>$320,800</td>
      <td>
      <input type="button" class="btn btn-default" value="حظر استخدام" >
      <input type="button" class="btn btn-default" value="تنبيه بحسن التصرف">
      <input type="button" class="btn btn-default" value="حذف">
      </td>
    </tr>
  
    <tr>
      <td>Donna Snider</td>
      <td>Customer Support</td>
      <td>New York</td>
      <td>27</td>
      <td>2011/01/25</td>
      <td>$112,000</td>
      <td>$320,800</td>
      <td>$320,800</td>
      <td>$320,800</td>
      <td>$320,800</td>
      <td>
      <input type="button" class="btn btn-default" value="حظر استخدام" >
      <input type="button" class="btn btn-default" value="تنبيه بحسن التصرف">
      <input type="button" class="btn btn-default" value="حذف">
    </tr>
  
  </tbody>

</table>

</div>

</div>

</div>
</div>
</div>



<?php 
  require_once "../../core/init.php";
  templateController::get('footer');

?>

