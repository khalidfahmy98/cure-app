<?php

class patient{

    private $_db,$_data,$_sessionName,$_isLogged,$_cookieName;
    public function __construct($user = null){
        $this->_db = database::getInstance();
        $this->_sessionName = config::get('session/session_name');
        $this->_cookieName = config::get('remember/cookie_name');

        if(!$user){
            if( session::exists($this->_sessionName)){
                $user = session::get($this->_sessionName); // now the user value will be the session of user  value of ... the value of the session is id of user 
                if($this->find($user)){ // this line will check wither the user id is registered or not .. if its exists by username or id the function will grap all his data in _data prop
                    $this->_isLogged = true ;
                }else{
                    // process logout 
                }
            }
        }else{
            $this->find($user); // to get another user data if that user what u want his data is not logged in  as like this $user = new user(5); ! got it !? 
        }   

    }
    public function isOwner($user){
        if($user){
            $data = $this->_db->get('cure_organizations',array('owner_id','=',$user));
            if($data->count()){
                return true;
            }
        }
        return false;
    }
    public function getWorkData($user){
        if($user){
            $data = $this->_db->get('aggregate_orgs_workers',array('worker_id','=',$user));
            if($data->count()){
                return  $data->first();
            }
        }
        return false;
    }
    public function getPermissions($catId){
        if($catId){
            $data = $this->_db->get('worker_categories',array('worker_category_id','=',$catId));
            if($data->count()){
                return  $data->first()->category_premission_type;
            }
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
    public function login($username = null  , $password = null , $remember = false  ){

        if ( !$username && !$password && $this->exists() ) { // for automatic login or remember me cookies shitty things  
            session::put($this->_sessionName , $this->data()->patient_id);
        }else{
            $user = $this->find($username);
            if($user){
                if($this->data()->patient_password === $password ){
                    session::put($this->_sessionName , $this->data()->patient_id);
                    if($remember){
                        $hash = hash::uniqueHash();
                        $hashCheck = $this->_db->get('users_session', array('session_value' , '=' , $this->data()->patient_id) );
                        if( !$hashCheck->count() ){
                            $this->_db->insert('users_session',array(
                                'patient_id' => $this->data()->patient_id,
                                'session_value'    => $hash
                            ));
                        }else{  // notice: we are making this if condition for  making sure that if the user exists in table with old hash value then we will set a new hash value , if the hashcheck is false then we will set a new hash value for him
                            $hash = $hashCheck->first()->session_value;
                        }
                        cookie::put($this->_cookieName , $hash , config::get('remember/cookie_expiry'));
                    }
                    return true;
                }
            }
        }
        return false;
    }
    public function delete($id){
        return $this->_db->delete('cure_users',array('patient_id','=',$id));
    }
    public function update($items = array() , $id = null ){
        if( !$id  && $this->isLogged()){
            $id = $this->data()->id;
        }
        if( !$this->_db->update('cure_users','patient_id',$id,$items)){
            throw new Exception ("there was a problame while updating information"); 
        }
    }
    public function isManager(){
        // get user groups 
        $group = $this->_db->get('cure_users',array('patient_id','=',$this->data()->id));
        if($group->count()){
            $permissions = $group->first()->c_rule; 
            if($permissions == 1 ){
                return  true ;
            }
        }
        return false;
    }
    public function exists(){
        return (!empty($this->_data)) ? true: false; // becuase checking wiether we got user data or not 
    }
    public function logout(){
        $this->_db->delete('users_session',array('patient_id','=',$this->data()->id));
        session::delete($this->_sessionName);
        session::delete('orgnizationId');
        session::delete('workCategory');
        session::delete('permissions');
        session::delete('orgType');
        cookie::delete($this->_cookieName);
    }
    public function data(){
        return $this->_data;
    }
    public function isLogged(){
        return $this->_isLogged;
    }
}