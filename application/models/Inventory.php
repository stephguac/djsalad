<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends CI_Model {

	// INVENTORIES A.K.A. PRODUCTS

	public function addInventory($formData) {
		$sql = "INSERT INTO products (title, artist, description, genre, price, image_1, image_2, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, NOW(), NOW())";
		$params = [
			$formData['title'],
			$formData['artist'],
			$formData['description'],
			$formData['genre'],
			$formData['price'],
			$formData['image1'],
			$formData['image2']
		];
		$this->db->query($sql, $params);
	}

	public function displayInventory() {
		$sql = "SELECT * FROM products";
		
		return $this->db->query($sql)->result_array();
	}

	public function createMainTables() {
		$sql = "SELECT * FROM products ORDER BY quantity_sold DESC LIMIT 24";
		return $this->db->query($sql)->result_array();
	}

	public function showProduct($id) {
		$this->load->view('productDetailsView');
	} 
}