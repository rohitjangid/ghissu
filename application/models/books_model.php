<?php
class Books_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	public function get_book($isbn = FALSE)
	{
		if ($isbn === FALSE)
		{
			$query = $this->db->get('crossword_data');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('crossword_data', array('isbn' => $isbn));
		return $query->row_array();
	}
}