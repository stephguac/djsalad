<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carts extends CI_Controller {
	
	public function index() {
		$this->load->model('Cart');
		$result = $this->Cart->getUsersCart($this->session->userdata('currentUser')['id']);
		$data['cartData'] = $result;
		$this->load->view('cartView', $data);
	}

	public function displayCartTable() {
		//populates cart table
	}

	public function addAddresses() {
		//add both shipping and billing addresses into db from form data
	}
	public function productAddToCart($productID) {
		// form process, show "added to cart"
		$userID = $this->session->userdata('currentUser')['id'];
		$this->load->model('Cart');
		$this->Cart->productAddToCart2($productID, $userID);
		redirect('/Carts/index');
		// $this->load->view('cartView', $data);
	}
}