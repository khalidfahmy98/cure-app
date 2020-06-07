<?php 

class templateController {
    public static function get($name){
        if ( isset($name) ) {
            return require_once('includes/' . $name .'.php');
        }
        return false;
    }
    public static function setTitle($name){
        if (isset($name)){
             echo '<title>'.$name.'</title>';
        }
    }
    public static function getScript($directory = null , $name , $local = true  ){
        if ( isset($name) ){
            if( $directory == null  && $local == false ){
                echo '<script src="'.$name.'"></script>';
            }else{
                echo '<script src="scripts/'.$directory.'/'.$name.'.js"></script>';
            }
        }
    }
}