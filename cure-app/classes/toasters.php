<?php 
class toasters { 
    public static function error ($msg) {
        echo '<div class="alert alert-danger">'.$msg.'</div>';
    }
    public static function warning($msg){
        echo '<div class="alert alert-warning">'.$msg.'</div>';
    }
    public static function success($msg){
        echo '<div class="alert alert-success">'.$msg.'</div>';
    }
}