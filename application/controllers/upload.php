<?php

class Upload extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('Inventory');
	}

	function index() {
		$this->load->view('upload_form', array('error' => ' ' ));
	}

	function do_upload() {
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';

		$this->load->library('upload', $config);
		$data = array('upload_data' => $this->upload->data());
		$this->Inventory->addInventory($this->input->post());


	}
}
?>