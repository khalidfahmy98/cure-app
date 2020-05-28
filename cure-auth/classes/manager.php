<?php
class manager{
    private $_db,$_data,$_sessionName,$_isLogged,$_cookieName;
    public function __construct($manager = null){
        $this->_db = database::getInstance();
        $this->_sessionName = config::get('session/session_name');
        $this->_cookieName = config::get('remember/cookie_name');

        if(!$manager){
            if( session::exists($this->_sessionName)){
                $manager = session::get($this->_sessionName); // now the manager value will be the session of manager  value of ... the value of the session is id of manager 
                if($this->find($manager)){ // this line will check wither the manager id is registered or not .. if its exists by managername or id the function will grap all his data in _data prop
                    $this->_isLogged = true ;
                }else{
                    // process logout 
                }
            }
        }else{
            $this->find($manager); // to get another manager data if that manager what u want his data is not logged in  as like this $manager = new manager(5); ! got it !? 
        }   

    }
    public function create( $fields = array() ){
        if( !$this->_db->insert('cure_managers',$fields) ){
            throw new Exception ('there was a problam creating new account');
        }
    }
    public function getCount(){
        $data = $this->_db->get('cure_managers',array('manager_id','>=',1));
        return $data->count();
    }
    public function find($manager = null){
        if($manager){
            $field = (is_numeric($manager)) ? 'manager_id' :'manager_username';
            $data = $this->_db->get('cure_managers',array($field,'=',$manager));
            if($data->count()){
                $this->_data = $data->first();
                return true;
            }
        }
        return false;
    }
    public function login($managername = null  , $password = null , $remember = false  ){

        if ( !$managername && !$password && $this->exists() ) { // for automatic login or remember me cookies shitty things  
            session::put($this->_sessionName , $this->data()->manager_id);
        }else{
            $manager = $this->find($managername);
            if($manager){
                if($this->data()->password === hash::make($password,$this->data()->salt)){
                    session::put($this->_sessionName , $this->data()->manager_id);
                    if($remember){
                        $hash = hash::uniqueHash();
                        $hashCheck = $this->_db->get('cure_managers_session', array('session_value' , '=' , $this->data()->manager_id) );
                        if( !$hashCheck->count() ){
                            $this->_db->insert('cure_managers_session',array(
                                'manager_id' => $this->data()->manager_id,
                                'session_value'    => $hash
                            ));
                        }else{  // notice: we are making this if condition for  making sure that if the manager exists in table with old hash value then we will set a new hash value , if the hashcheck is false then we will set a new hash value for him
                            $hash = $hashCheck->first()->hash;
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
        return $this->_db->delete('cure_managers',array('manager_id','=',$id));
    }
    public function update($items = array() , $id = null ){
        if( !$id  && $this->isLogged()){
            $id = $this->data()->id;
        }
        if( !$this->_db->update('cure_managers','manager_id',$id,$items)){
            throw new Exception ("there was a problame while updating information"); 
        }
    }
    // public function isManager(){
    //     // get manager groups 
    //     $group = $this->_db->get('cure_managers',array('manager_id','=',$this->data()->manager_id));
    //     if($group->count()){
    //         $permissions = $group->first()->grouping; 
    //         if($permissions == 1 ){
    //             return  true ;
    //         }
    //     }
    //     return false;
    // }
    public function exists(){
        return (!empty($this->_data)) ? true: false; // becuase checking wiether we got manager data or not 
    }
    public function logout(){
        $this->_db->delete('cure_managers_session',array('manager_id','=',$this->data()->manager_id));
        session::delete($this->_sessionName);
        cookie::delete($this->_cookieName);
    }
    public function data(){
        return $this->_data;
    }
    public function isLogged(){
        return $this->_isLogged;
    }
}