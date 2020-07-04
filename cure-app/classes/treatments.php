<?php

class treatments{

    private $_db,$_data;
    public function __construct(){
        $this->_db = database::getInstance();
    }
    public function getTreatments(){
        $data = $this->_db->get("authorized_products",array('product_id','>=',"1"));
        if ( $data->count() > 0 ){
            return $data->results();
        }
        return false;
    }
    public function treatmentInfo($treatment){
        $data = $this->_db->get('authorized_products',array('product_id','=',$treatment));
        if($data->count() > 0){
            return $data->first();
        }
        return false;
    }
    public function listTreatmentsCategories(){
        $data = $this->_db->get("products_categories",array('category_id','>=',"1"));
        if ( $data->count() > 0 ){
            return $data->results();
        }
        return false;
    }
    public function createTreatment( $fields = array() ){
        if( !$this->_db->insert('authorized_products',$fields) ){
            throw new Exception ('there was a problam creating new account');
        }
    }
    public function getCount(){
        $data = $this->_db->get('authorized_products',array('product_id','>=',1));
        return $data->count();
    }
    public function delete($id){
        return $this->_db->delete('authorized_products',array('product_id','=',$id));
    }
    public function update($items = array() , $id = null ){
        if( !$id  && $this->isLogged()){
            $id = $this->data()->id;
        }
        if( !$this->_db->update('authorized_products','product_id',$id,$items)){
            throw new Exception ("there was a problame while updating information"); 
        }
    }
    public function exists(){
        return (!empty($this->_data)) ? true: false;  
    }
    public function data(){
        return $this->_data;
    }
}