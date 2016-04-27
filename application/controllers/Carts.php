<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carts extends CI_Controller {
	
	public function index() {
		$this->load->view('cartView');
	}

	public function displayCartTable() {
		//populates cart table
	}

	public function addAddresses() {
		//add both shipping and billing addresses into db from form data
	}
}