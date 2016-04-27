<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventories extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
        $this->load->model('MODELNAME');
    }

	public function index() {
		$this->load->view('');
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
	}

	public function addInventory() {
		$product = $this->session->post()
		// add a new product to inventory. bring up modal.
	}

	public function editInventory() {
		// edit inventory/product details for individual product.
	}

}
