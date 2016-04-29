<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admins extends CI_Controller {

	public function index() {
		$this->load->view('adminLoginView');
	}
	
	public function adminLogin() {
		$this->load->model('Admin');
		$currentUser = $this->Admin->adminLogin($this->input->post());
		$this->session->set_userdata('currentUser', $currentUser);
		redirect('/inventories/displayInventory');
	}

}