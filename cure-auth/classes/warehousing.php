<?php

class warehousing{

    private $_db,$_data,$_sessionName,$_isLogged,$_cookieName;
    public function __construct($user = null){
        $this->_db = database::getInstance();
    }
    public function getItems($id){
        $data  = $this->_db->innerJoinQuery('warehousing','authorized_products','treatment_id','product_id', array('org_id','=',$id));
        if ( $data->count() > 0 ){
            return $data->results();
        }
        return false;
    }
    public function create( $fields = array() ){
        if( !$this->_db->insert('warehousing',$fields) ){
            throw new Exception ('there was a problam ');
        }
    }
    public function getCount(){
        $data = $this->_db->get('warehousing',array('item_id','>=',1));
        return $data->count();
    }
    public function delete($id){
        return $this->_db->delete('warehousing',array('item_id','=',$id));
    }
    public function update($items = array() , $id = null ){
        if( !$id  && $this->isLogged()){
            $id = $this->data()->id;
        }
        if( !$this->_db->update('warehousing','item_id',$id,$items)){
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