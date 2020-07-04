<?php

class donations{

    private $_db,$_data,$_sessionName,$_isLogged,$_cookieName;
    $this->_db = database::getInstance();

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
    public function find($user = null){
        if($user){
            $field = (is_numeric($user)) ? 'patient_id' :'patient_username';
            $data = $this->_db->get('cure_users',array($field,'=',$user));
            if($data->count()){
                $this->_data = $data->first();
                return true;
            }
        }
        return false;
    }
    public function delete($id){
        return $this->_db->delete('cure_users',array('patient_id','=',$id));
    }
    public function update($items = array() , $id = null ){
        if( !$this->_db->update('cure_users','patient_id',$id,$items)){
            throw new Exception ("there was a problame while updating information"); 
        }
    }
    public function exists(){
        return (!empty($this->_data)) ? true: false; // becuase checking wiether we got user data or not 
    }
    public function data(){
        return $this->_data;
    }
}