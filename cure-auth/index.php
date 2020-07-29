<?php 
    require_once 'core/initRoute.php';
    if ( $patient->isLogged()){
      redirect::to('views/home/');
    }else{
      redirect::to('../cure-app/');
    }
?>
