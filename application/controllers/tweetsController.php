<?php

class TweetsController extends CI_Controller{
    
function index() {
            
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
    
}

