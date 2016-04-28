<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index() {
		$this->load->model('Inventory');
		$results = $this->Inventory->createMainTables();
		$data['results'] = $results;
		$this->load->view('mainView', $data);
	}

	public function showProduct($prod_id) {
		$data['prod_id'] = $prod_id;
		$this->load->view('productDetailsView', $data);
	}

	public function contactView() {
		$this->load->view('contactView');
	}

	public function aboutView() {
		$this->load->view('aboutView');
	}

	public function registerView() {
		$this->load->view('registerView');
	}

	public function adminView() {
		$this->load->view('adminLoginView');
	}

	public function searchView() {
		$this->load->view('searchView');
	}


	public function productSortBy() {
		// sorts tables by query
	}

	public function productCountPerGenre() {
		// sums number of albums in each genre
	}

	public function productSearchByName() {
		$this->load->model('Inventory');
		$productName = $this->input->post('search');
		$this->inventory->searchInventory($this->input->post());
		
		$nameSearchData = array('');
		$nameSearchData['product'] = $productName;
		
		$this->load->view('mainView');
		// for search bar
	}

	public function productPage() {
		//individual page for each product
		$this->load->view('productDetailsView');
	}

	public function productAddToCart($productID) {
		// form process, show "added to cart"
		$userID = $this->session->userdata('currentUser')['id'];
		$this->load->model('Cart');
		$this->Cart->productAddToCart($productID, $userID);

	}

	public function displaySimilarProducts() {
		//populates similar items at the bottom - same genre, artist, year?
	}
}
