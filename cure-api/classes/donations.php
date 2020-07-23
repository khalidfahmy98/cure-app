<?php

class donations{

    private $_db,$_data;
    public function __construct(){
        $this->_db = database::getInstance();
    }

    public function ListRequests(){
        $data = $this->_db->innerJoinQuery("donation_requests" , "cure_users" , "patient_id" , "patient_id" , array("reqeust_id" , ">=","1")) ;
        if ( $data->count() > 0 ){
            return $data->results();
        } 
        return false;
    }
    public function ListUserRequests($id){
        $data = $this->_db->innerJoinQuery("donation_requests" , "cure_users" , "patient_id" , "patient_id" , array("donation_requests.patient_id","=",$id)) ;
        if ( $data->count() > 0 ){
            return $data->results();
        } 
        return false;
    }

    public function getUsers(){
        $data = $this->_db->get("cure_users",array('patient_id','>=',"1"));
        if ( $data->count() > 0 ){
            return $data->results();
        }
        return false;
    }
    public function create( $fields = array() ){
        if( !$this->_db->insert('cure_users',$fields) ){
            throw new Exception ('there was a problam creating new account');
        }
    }
    public function getCount(){
        $data = $this->_db->get('cure_users',array('patient_id','>=',1));
        return $data->count();
    }
    public function delete($id){
        return $this->_db->delete('cure_users',array('patient_id','=',$id));
    }
    public function update($items = array() , $id = null ){
        if( !$this->_db->update('cure_users','patient_id',$id,$items)){
            throw new Exception ("there was a problame while updating information"); 
        }
    }
    public function data(){
        return $this->_data;
    }
}