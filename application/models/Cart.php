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
	public function productAddToCart2($productID, $userID) {
		$sql = "SELECT carts.id FROM carts WHERE user_id = ? LIMIT 1"; //?
		$params = [
			$userID
		];
		$cartID = $this->db->query($sql, $params)->row_array(); //this isnt working

		$sql2 = "INSERT INTO cart_product (cart_id, product_id) VALUES (?, ?)";
		$params2 = [
			$cartID['id'],
			$productID
		];
		$this->db->query($sql2, $params2);
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

	public function productRemoveFromCart($productID, $userID) {
		$sql0 = "SELECT carts.id FROM carts
				LEFT JOIN users ON carts.user_id = users.id
				WHERE users.id = ?";
		$params0 = [
			$userID
		];
		$cartID = $this->db->query($sql0, $params0)->row_array();

		$sql = "DELETE FROM cart_product
				WHERE cart_id = {$cartID['id']} AND product_id = $productID";
		$this->db->query($sql);

	}

	public function getUsersCart($userID) {
		$sql = "SELECT cart_product.product_id, products.title, products.artist, products.genre, products.price, products.image_1
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