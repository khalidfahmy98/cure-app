<?php

class doantions{

    private $_db,$_data,$_sessionName;
    public function __construct($user = null){
        $this->_db = database::getInstance();
    }
    public function getDonations(){
        $data = $this->_db->innerJoinQuery("donation_requests",'cure_users','patient_id','patient_id',array('donation_requests.donate_status','=','0'));
        if ( $data->count() > 0 ){
            return $data->results();
        }
        return false;
    }
    public function create( $fields = array() ){
        if( !$this->_db->insert('donation_requests',$fields) ){
            throw new Exception ('there was a problam creating new account');
        }
    }
    public function createdonationAccess( $fields = array() ){
        if( !$this->_db->insert('donated_users',$fields) ){
            throw new Exception ('there was a problam creating new account');
        }
    }

    public function getCount(){
        $data = $this->_db->get('donation_requests',array('reqeust_id','>=',1));
        return $data->count();
    }
    public function delete($id){
        return $this->_db->delete('donation_requests',array('reqeust_id','=',$id));
    }
    public function update($items = array() , $id = null ){
        if( !$this->_db->update('donation_requests','reqeust_id',$id,$items)){
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