<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventories extends CI_Controller {

	// INVENTORIES A.K.A. PRODUCTS
	
	public function __construct() {
        parent::__construct();
        $this->load->model('Inventory');
    }

	public function index() {
		$this->displayInventory();
	}
			// need to add a view page for the index function 


	public function searchInventory() {
		$artistName = $this->inventory->find($artistName);
		$ablumName = $this->inventory->find($albumName);
		$viewData = array(
			'artistName' => $artistName,
			'albumName' => $albumName,
			);
		$this->load->view('mainView', $viewData);
		// search inventory for products
	}

	public function displayInventory() {
		// populate inventory table from db (products table)
		$results = $this->Inventory->displayProducts();
		$data['results'] = $results;
		$this->load->view('inventoryDashboardView', $data);
	}

	public function editInventory() {
		// edit inventory/product details for individual product.
	}

	public function deleteProducts($id) {
		// delete inventory/product details for individual product.
		$this->Inventory->deleteProduct($id);
		$this->displayInventory();
	}

}
