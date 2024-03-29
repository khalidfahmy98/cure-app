<?php

class workerCategories{

    private $_db,$_data,$_sessionName,$_isLogged,$_cookieName;
    public function __construct($user = null){
        $this->_db = database::getInstance();
    }
    public function getCategories($org_id){
        $data = $this->_db->get("worker_categories",array('org_id','=',$org_id));
        if ( $data->count() > 0 ){
            return $data->results();
        }
        return false;
    }
    public function create( $fields = array() ){
        if( !$this->_db->insert('worker_categories',$fields) ){
            throw new Exception ('there was a problam creating new account');
        }
    }
    public function getCount(){
        $data = $this->_db->get('worker_categories',array('worker_category_id','>=',1));
        return $data->count();
    }
    public function find($user = null){
        if($user){
            $data = $this->_db->get('worker_categories',array('worker_category_id','=',$user));
            if($data->count()){
                return $this->_data = $data->first();
            }
        }
        return false;
    }
    public function orgStatus($user){
        if($user){
            $data = $this->_db->get('worker_categories',array('worker_category_id','=',$user));
            if($data->count()){
                return $this->_data = $data->first()->org_status;
            }
        }
        return false;
    }
    public function delete($id){
        return $this->_db->delete('worker_categories',array('worker_category_id','=',$id));
    }
    public function update($items = array() , $id = null ){
        if( !$id  && $this->isLogged()){
            $id = $this->data()->id;
        }
        if( !$this->_db->update('worker_categories','worker_category_id',$id,$items)){
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