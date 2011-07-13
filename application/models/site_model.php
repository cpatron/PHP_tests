<?php

class Site_model extends CI_Model {
    
    function getall(){
        
            $q = $this->db->get('data');
            return $q->result();
        
    }
    
    function insert($data) {
        
        $this->db->insert('data', $data);
    }
    
    function delete($data) {
        
        $this->db->where('id', $data['id']);
        $this->db->delete('data');
    }
    
    function valid_user_pass($data){
        
        $this->db->where('Username', $data['username']);
        $this->db->where('Password', md5($data['password']));
        $q = $this->db->get('logincredentials');
        
        if($q->num_rows() > 0)
            return TRUE;
        else
            return FALSE;
        
        
    }
    
    function insert_member($data) {
        
        $this->db->insert('logincredentials', $data);
    }
    
}
