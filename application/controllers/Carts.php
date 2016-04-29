<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carts extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('Cart');
    }
	
	public function index() {
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
		if(!$this->Cart->getUsersCart($userID)) {
			$this->Cart->createCart($userID);
		}
		$this->Cart->productAddToCart2($productID, $userID);
		redirect('/Carts/index');
		// $this->load->view('cartView', $data);
	}

	public function removeItem($productID) {
		$userID = $this->session->userdata('currentUser')['id']; //needed?
		$this->Cart->productRemoveFromCart($productID, $userID);
		redirect('/Carts/index');
	}
}