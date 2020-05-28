<?php 

class templateController {
    public static function get($name){
        if ( isset($name) ) {
            return require_once('../../includes/templates/' . $name .'.php');
        }
        return false;
    }
    public static function setTitle($name){
        if (isset($name)){
             echo '<title>'.$name.'</title>';
        }
    }
    public static function getImage($name){
        if ( isset($name)){
            echo '../../../assets/dist/img/'.$name;
        }
    }
    public static function go($dir , $file ){
        if ( isset($file)){
            echo '../'.$dir.'/'.$file.'.php';
        }
    }
    public static function getScript($directory = null , $name , $local = true  ){
        if ( isset($name) ){
            if( $directory == null  && $local == false ){
                echo '<script src="'.$name.'"></script>';
            }else{
                echo '<script src="../../scripts/'.$directory.'/'.$name.'.js"></script>';
            }
        }
    }
}