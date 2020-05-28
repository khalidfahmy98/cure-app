<?php 
  require_once "../../core/init.php";
  templateController::get('header');
  templateController::get('navigation');
  templateController::setTitle("Homepage | Cure Systems");
?>
<div class="content-wrapper">



<div class="container">
<div class="row">
<div class="col-md-6">



<form>
  <div class="form-group">
    <label for="exampleInputEmail1">الاسم بالكامل</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Full Name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">اليوزر</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter User Name">
  
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">القسم التابع له</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">الصلاحية</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
   
  </div>
  
     <div class="custom-file">
  <input type="file" class="custom-file-input" id="customFile">
  <label class="custom-file-label" for="customFile">Choose Image</label>
</div>
   
  <button type="submit" class="btn btn-primary">Submit</button>
</form>










</div>


</div>
</div>
</div>

















<?php 
  templateController::get('footer');
?>