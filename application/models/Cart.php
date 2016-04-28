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
		$cartID = $this->db->query($sql);

		$sql = "INSERT INTO cart_product (cart_id, product_id) VALUES (?, ?)";
		$params = [
			$cartID,
			$productID
		];
		$this->db->query($sql, $params);

	public function productAddToCart($prod_id, $userID) {
		$sql = "SELECT * FROM carts WHERE user_id = $userID";
		$test = $this->db->query($sql)->row_array();

		if ($test) {
			$cartID = $user['id'];
		} else {
			$sql0 = "INSERT INTO carts (user_id) VALUES $userID";
			$this->db->query($sql0);
		} 
	}

}