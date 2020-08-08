<?php

class reservation{

    private $_db,$_data,$_sessionName;
    public function __construct($user = null){
        $this->_db = database::getInstance();
    }
    public function getResevations($orgid){
        $data = $this->_db->aggergateJoin("reservations",'cure_users','clinics_schedule','patient_id','sched_id','patient_id','sched_id',array('reservations.clinic_id','=',$orgid));
        if ( $data->count() > 0 ){
            return $data->results();
        }
        return false;
    }
    public function create( $fields = array() ){
        if( !$this->_db->insert('reservations',$fields) ){
            throw new Exception ('there was a problam creating new account');
        }
    }
    public function getCount(){
        $data = $this->_db->get('reservations',array('reserve_id','>=',1));
        return $data->count();
    }
    public function delete($id){
        return $this->_db->delete('reservations',array('reserve_id','=',$id));
    }
    public function update($items = array() , $id = null ){
        if( !$this->_db->update('reservations','reserve_id',$id,$items)){
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