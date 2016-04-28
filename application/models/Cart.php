<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Model {

	public function createCart($userID) {
		$sql = "INSERT INTO carts (user_id) VALUES (?)";
		$params = [
			$userID
		];
		$this->db->query($sql, $params);
	}
	public function productAddToCart($productID) {
		$sql = "SELECT id FROM carts WHERE user_id = ?";
		$params = [
			$this->session->userdata('currentUser')['id']
		];
		$cartID = $this->db->query($sql, $params);

		$sql2 = "INSERT INTO cart_product (cart_id, product_id) VALUES (?, ?)";
		$params = [
			$cartID,
			$productID
		];
		// return $this->db->query($sql2, $params)->result_array();
	}
	// public function productAddToCart($prod_id, $userID) {
	// 	$sql = "SELECT * FROM carts WHERE user_id = $userID";
	// 	$test = $this->db->query($sql)->row_array();

	// 	if ($test) {
	// 		$cartID = $user['id'];
	// 	} else {
	// 		$sql0 = "INSERT INTO carts (user_id) VALUES $userID";
	// 		return $this->db->query($sql0);
	// 	} 
	// }

	public function getUsersCart($userID) {
		$sql = "SELECT products.title, products.artist, products.genre, products.price, products.image_1
			FROM cart_product 
			LEFT JOIN carts ON cart_product.cart_id = carts.id 
			LEFT JOIN products ON cart_product.product_id = products.id
			WHERE carts.user_id = ?";
		$params = [
			$userID
		];
		return $this->db->query($sql, $params)->result_array();
	}
}