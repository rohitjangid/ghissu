<?php

class About extends CI_Controller {
	
	public function index()
	{
		$this->load->view('about/header');
		$this->load->view('about/about');
		$this->load->view('about/footer');
	}
	

}