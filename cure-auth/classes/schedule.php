<?php

class schedule{

    private $_db,$_data,$_sessionName,$_isLogged,$_cookieName;
    public function __construct($user = null){
        $this->_db = database::getInstance();
    }
    public function getSchedules($orgid){
        $data = $this->_db->get("clinics_schedule",array('clinic_id','=',$orgid));
        if ( $data->count() > 0 ){
            return $data->results();
        }
        return false;
    }
    public function create( $fields = array() ){
        if( !$this->_db->insert('clinics_schedule',$fields) ){
            throw new Exception ('there was a problam creating new account');
        }
    }
    public function getCount(){
        $data = $this->_db->get('clinics_schedule',array('sched_id','>=',1));
        return $data->count();
    }
    public function delete($id){
        return $this->_db->delete('clinics_schedule',array('sched_id','=',$id));
    }
    public function update($items = array() , $id = null ){
        if( !$this->_db->update('clinics_schedule','sched_id',$id,$items)){
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