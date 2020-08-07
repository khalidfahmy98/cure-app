<?php

class orders{

    private $_db,$_data,$_sessionName,$_isLogged,$_cookieName;
    public function __construct($user = null){
        $this->_db = database::getInstance();
    }
    public function getOrders($id){
        $data  = $this->_db->aggergateJoin('market_orders','warehousing','cure_users','item_id','patient_id','item_id','patient_id', array('market_orders.org_id','=',$id));
        if ( $data->count() > 0 ){
            return $data->results();
        }
        return false;
    }
    public function create( $fields = array() ){
        if( !$this->_db->insert('market_orders',$fields) ){
            throw new Exception ('there was a problam ');
        }
    }
    public function getCount(){
        $data = $this->_db->get('market_orders',array('order_id','>=',1));
        return $data->count();
    }
    public function delete($id){
        return $this->_db->delete('market_orders',array('order_id','=',$id));
    }
    public function update($items = array() , $id = null ){
        if( !$id  && $this->isLogged()){
            $id = $this->data()->id;
        }
        if( !$this->_db->update('market_orders','order_id',$id,$items)){
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