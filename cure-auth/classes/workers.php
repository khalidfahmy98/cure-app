<?php

class workers{

    private $_db,$_data;
    public function __construct($user = null){
        $this->_db = database::getInstance();

    }
    public function getWorkers($ownerId){
        $data = $this->_db->get("aggregate_orgs_workers",array('manager_id','=',$ownerId));
        if ( $data->count() > 0 ){
            return $data->results();
        }
        return false;
    }
    public function create( $fields = array() ){
        if( !$this->_db->insert('aggregate_orgs_workers',$fields) ){
            throw new Exception ('there was a problam creating new account');
        }
    }
    public function getCount(){
        $data = $this->_db->get('aggregate_orgs_workers',array('patient_id','>=',1));
        return $data->count();
    }
    public function delete($id){
        return $this->_db->delete('aggregate_orgs_workers',array('aggregte_id','=',$id));
    }
    public function data(){
        return $this->_data;
    }
}