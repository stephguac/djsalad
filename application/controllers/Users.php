<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('User');
    }

	// public function index() {
	// 	$this->load->view('mainView'); 
	// }
	
	public function register() {
		$this->load->library("form_validation");
		$this->form_validation->set_rules('firstName', 'First Name', 'trim|required');
		$this->form_validation->set_rules('lastName', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_emails|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'min_length[3]'); // change to 8 later.
		$this->form_validation->set_rules('cPassword', 'Confirm Password', 'matches[password]');
		if($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('vals', validation_errors());
			redirect('/Main/registerView');
		}
		else {
			$this->User->register($this->input->post());
			
			$currentUser = $this->User->login($this->input->post());
			$this->session->set_userdata('currentUser', $currentUser);

		}
		$this->load->model('Cart');
		$this->Cart->createCart($currentUser['id']);
		$this->load->view('mainView');
		}	
		redirect('/');
	}

	public function login() {
		$user = $this->User->login($this->input->post());
        if ($user) {
        	$this->session->set_userdata('currentUser', $user);
        } else {
        	$this->session->set_flashdata('error', 'Invalid username or password.');
        }
        // $this->load->view('mainView');
        redirect('/');
	}

	public function logout() {
		$this->session->unset_userdata('currentUser');
		redirect('/');
	}

	public function displayProfile($uID) {
		$this->User->displayProfile($uID);
		$this->load->view('userProfileView', $userInfo);
	}
}