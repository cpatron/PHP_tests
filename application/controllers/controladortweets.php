<?php

class Controladortweets extends Ci_Controller{
	function index(){
		
		$file = "http://twitter.com/status/user_timeline/joepr25.json?count=11";
		 $json = file_get_contents($file);
		 $arr = json_decode($json);
		$data['records'] = $arr;
		$this->load->view('VistaTweets', $data);
	}
}