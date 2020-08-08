<?php

class orgnization{

    private $_db,$_data,$_sessionName,$_isLogged,$_cookieName;
    public function __construct($user = null){
        $this->_db = database::getInstance();
    }
    public function getOrgnizations(){
        $data = $this->_db->get("cure_organizations",array('org_id','>=',"1"));
        if ( $data->count() > 0 ){
            return $data->results();
        }
        return false;
    }
    public function getClinicOrganizations(){
        $data = $this->_db->get("cure_organizations",array('org_work_type','=',"4"));
        if ( $data->count() > 0 ){
            return $data->results();
        }
        return false;
    }
    public function getClinicSchedule($orgId){
        $data = $this->_db->get("clinics_schedule",array('clinic_id','=',$orgId));
        if ( $data->count() > 0 ){
            return $data->results();
        }
        return false;
    }
    public function create( $fields = array() ){
        if( !$this->_db->insert('cure_organizations',$fields) ){
            throw new Exception ('there was a problam creating new account');
        }
    }
    public function getCount(){
        $data = $this->_db->get('cure_organizations',array('org_id','>=',1));
        return $data->count();
    }
    public function getOrgType($orgId){
        if($orgId){
            $data = $this->_db->get('cure_organizations',array('org_id','=',$orgId));
            if($data->count()){
                return $this->_data = $data->first()->org_work_type;
            }
        }
        return false;
    }
    public function find($user = null){
        if($user){
            $data = $this->_db->get('cure_organizations',array('owner_id','=',$user));
            if($data->count()){
                return  $data->first();
            }
        }
        return false;
    }
    public function orgStatus($user){
        if($user){
            $data = $this->_db->get('cure_organizations',array('owner_id','=',$user));
            if($data->count()){
                return $this->_data = $data->first()->org_status;
            }
        }
        return false;
    }
    public function delete($id){
        return $this->_db->delete('cure_organizations',array('org_id','=',$id));
    }
    public function update($items = array() , $id = null ){
        if( !$id  && $this->isLogged()){
            $id = $this->data()->id;
        }
        if( !$this->_db->update('cure_organizations','org_id',$id,$items)){
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