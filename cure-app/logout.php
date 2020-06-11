<?php 
    require 'core/init.php';
    $patient = new patient();
    $patient->logout();
    redirect::to('login.php');