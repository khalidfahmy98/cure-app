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
    public function create( $fields = array() ){
        if( !$this->_db->insert('donation_requests',$fields) ){
            throw new Exception ('there was a problam creating donation request ');
        }
    }
    public function setDonator( $fields = array() ){
        if( !$this->_db->insert('donated_users',$fields) ){
            throw new Exception ('there was a problam setting new donator');
        }
    }
    public function delete($id){
        return $this->_db->delete('donation_requests',array('reqeust_id','=',$id));
    }
    public function data(){
        return $this->_data;
    }
}