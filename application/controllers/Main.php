<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('mainView');
	}

	public function contactView() {
		$this->load->view('contactView');
	}

	public function aboutView() {
		$this->load->view('aboutView');
	}
}
