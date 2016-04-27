<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventories extends CI_Controller {
	
	public function index() {
		$this->load->view('CHANGE');
	}

	public function searchInventory() {
		// search inventory for products
	}

	public function displayInventory() {
		// populate inventory table from db (products table)
	}

	public function addInventory() {
		// add a new product to inventory. bring up modal.
	}

	public function editInventory() {
		// edit inventory/product details for individual product.
	}

}
