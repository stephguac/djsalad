<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index() {
		$this->load->view('loginRegView');
	}
	
	public function register() {
		$this->load->library("form_validation");
		$this->form_validation->set_rules('firstName', 'First Name', 'trim|required');
		$this->form_validation->set_rules('lastName', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_emails|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'min_length[8]');
		$this->form_validation->set_rules('cPassword', 'Confirm Password', 'matches[password]');
		if($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('vals', validation_errors());
			redirect('/Main/registerView');
		}
		else {
			$this->load->model('User');
			$this->User->register($this->input->post());
		}	
		$this->load->view('/');
	}

	public function login() {
		$this->load->model('User');
		$currentUser = $this->User->login($this->input->post());
		$this->session->set_userdata('currentUser', $currentUser);
		$this->load->view('mainView.php');
	}

	public function logout() {
		$this->session->unset_userdata('currentUser');
		redirect('/');
	}

	public function displayProfile($uID) {
		$this->load->model('User');
		$this->User->displayProfile($uID);
		$this->load->view('userProfileView', $userInfo);
	}
}