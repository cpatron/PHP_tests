<?php

class Controladortweets extends Ci_Controller{
	function index(){
		
            $this->load->view('firstpage');

	}
        

       
        function loadtweets(){
            
            $this->load->view('formClass');
        }
        
        function displaytweets() {
            
            $username = $_POST["uname"];
            $number = $_POST["tweets"];
            $file = "http://twitter.com/status/user_timeline/".$username.".json?count=".$number."";
            $json = file_get_contents($file);
            $arr = json_decode($json);
            $data['records'] = $arr;
            $data['username'] = $username;
            $data['number'] = $number;
            $this->load->view('VistaTweets', $data);
        }
        
        function loademail() {
            
            $data['Entro']=0;
            $this->load->view('emailview', $data);
        }
        
        function sendemail() {
            
            $this->load->library('form_validation');
            $this->load->library('email');
            
            $this->form_validation->set_rules('destinatario', 'Correo Destinatario', 'trim|required|valid_email');
            $this->form_validation->set_rules('asunto', 'Asunto', 'trim|required');
            $this->form_validation->set_rules('mensaje', 'Mensaje', 'trim|required');
            
            if($this->form_validation->run() == FALSE)
            {
                $data['Entro']=1;
                $this->load->view('emailview', $data);
            }
            else
            {
                        $asunto = $_POST["asunto"];
			$email = $_POST["destinatario"];
                        $mensaje = $_POST["mensaje"];
			
			$this->email->set_newline("\r\n");

			$this->email->from('ntalk_pruebas@hotmail.com', 'Joe Pruebas');
			$this->email->to($email);		
			$this->email->subject($asunto);		
			$this->email->message($mensaje);


			if($this->email->send())
			{
                            $this->load->view('firstpage');
			}

			else
			{
				show_error($this->email->print_debugger());
			}
            }
        }
}