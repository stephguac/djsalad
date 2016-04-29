<?php

class Uploads extends CI_Controller {

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
		$config['max_size']     = '2048';
		$config['max_width'] = '1024';
		$config['max_height'] = '1024';

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('file_upload'))
        {
        	var_dump($this->upload->display_errors());
        	die("came in the errors");
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_form', $error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $this->Inventory->addInventory($this->input->post(), $this->upload->data());
            //
            redirect('/');
        }
	}
}
?>