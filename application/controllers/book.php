<?php

class Book extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Books_model');
	}
	
	public function index($isbn = FALSE)
	{
		$data['book'] = $this->Books_model->get_book($isbn);
		if (empty($data['book']))
		{
			show_404();
		}

		$data['title'] = $data['book']['title'];
		$data['author'] = $data['book']['author'];
		$data['publisher'] = $data['book']['publisher']; 
		$data['isbn'] = $data['book']['isbn'];
		$data['binding'] = $data['book']['binding'];
		$data['pages'] = $data['book']['numberofpages'];
		$data['language'] = $data['book']['language'];
		$data['description'] = $data['book']['description'];
		$data['category'] = $data['book']['category'];
		$data['image'] = $data['book']['image'];
		$this->load->view('books/header', $data);
		$this->load->view('books/view', $data);
		$this->load->view('books/footer');
	}	
}