<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventories extends CI_Controller {

	// INVENTORIES A.K.A. PRODUCTS
	
	public function __construct() {
        parent::__construct();
        $this->load->model('Inventory');
    }

	public function index() {
		$this->load->view('inventoryDashboardView');
	}
	
	public function searchInventory() {
		$product = $this->products->find($product_name);
		$description = $this->products-find($product_description);
		$viewData = array(
			'Product' => $product,
			'Description' => $description
			);
		$this->load->view('productDetailView', $viewData);
		// search inventory for products
	}

	public function displayInventory() {
		// populate inventory table from db (products table)
	}

	public function addInventory() {
		// add a new product to inventory from modal.

		$this->Inventory->addInventory($this->input->post());
		$this->load->view('inventoryDashboardView');
	}

	public function editInventory() {
		// edit inventory/product details for individual product.
	}

}
