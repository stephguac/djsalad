<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admins extends CI_Controller {

	public function index() {
		$this->load->view('adminLoginView');
	}
	
	public function adminLogin() {
		$this->load->model('Admin');
		$user = $this->Admin->adminLogin($this->input->post());
		if ($user) {
        	$this->session->set_userdata('currentUser', $user);
        } else {
        	$this->session->set_flashdata('error', 'Invalid username or password.');
        }

		redirect('/inventories/displayInventory');
	}

}

	// regular log in template:

	// public function login() {
	// 	$user = $this->User->login($this->input->post());
 //        if ($user) {
 //        	$this->session->set_userdata('currentUser', $user);
 //        } else {
 //        	$this->session->set_flashdata('error', 'Invalid username or password.');
 //        }
 //        // $this->load->view('mainView');
 //        redirect('/');
	// }