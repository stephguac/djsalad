<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index() {
		$this->load->view('mainView');
	}

	public function showProduct()
	{
		$this->load->view('productDetailsView');
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
	}

	public function productAddToCart() {
		// form process, show "added to cart"
	}

	public function displaySimilarProducts() {
		//populates similar items at the bottom - same genre, artist, year?
	}
}
