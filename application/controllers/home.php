<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

	
	public function index()
	{
		//$this->load->view('template/frontheader');
		$this->load->view('home/index');
		//$this->load->view('template/frontfooter');
	}

}
