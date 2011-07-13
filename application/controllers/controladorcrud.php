<?php

class Controladorcrud extends CI_Controller {
    
    function index() {
            $this->load->model('site_model');
            $data['records'] = $this->site_model->getAll();
            $this->load->view('crud', $data);
            
    }
    
    function create(){
        
        $autor = $_POST['autor'];
        $texto = $_POST['texto'];
        
        $data['Autor'] = $autor;
        $data['Texto'] = $texto;
        
        $this->load->model('site_model');
        $this->site_model->insert($data);
        
        
        
        $this->index();
        
    }
    
    function delete(){
        
        $this->load->model('site_model');
        
        $data['id'] = $this->uri->segment(3);
        
        $this->site_model->delete($data);
        
        $this->index();
        
    }
    
}
