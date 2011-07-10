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
            
            $this->load->view('emailview');
        }
}