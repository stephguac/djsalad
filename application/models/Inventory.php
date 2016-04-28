<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends CI_Model {

	// INVENTORIES A.K.A. PRODUCTS

	public function addInventory($formData) {
		$sql = "INSERT INTO products (title, artist, description, genre, price, quantity_remaining, quantity_sold, image_1, image_2, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())";
		$params = [
			$formData['title'],
			$formData['artist'],
			$formData['description'],
			$formData['genre'],
			$formData['remaining'],
			$formData['sold'],
			$formData['price'],
			$formData['image1'],
			$formData['image2']
		];
		$this->db->query($sql, $params);
	}

	public function displayProducts() {
		$sql = "SELECT * FROM products";
		return $this->db->query($sql)->result_array();
	}

	// retrives for the mainView the most popular products
	public function createMainTables() {
		$sql = "SELECT * FROM products ORDER BY quantity_sold DESC LIMIT 24";
		return $this->db->query($sql)->result_array();
	}

	// retrieves individual product row
	public function getProduct($id) {
		$sql = "SELECT * FROM products WHERE products.id = $id";
		return $this->db->query($sql)->row_array();
	}

	// ** why is the model loading views here?
	public function showProduct($id) {
		// $this->load->view('productDetailsView');
	}

	public function deleteProduct($id) {
		$this->db->where('id', $id);
		$this->db->delete('products');
	}
}