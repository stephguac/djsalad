<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index() {
		$this->load->view('mainView');
	}

	public function contactView() {
		$this->load->view('contactView');
	}

	public function aboutView() {
		$this->load->view('aboutView');
	}



	public function productSortBy() {
		// sorts tables by query
	}

	public function productCountPerGenre() {
		// sums number of albums in each genre
	}

	public function productSearchByName() {
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
