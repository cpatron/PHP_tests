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
    
}
