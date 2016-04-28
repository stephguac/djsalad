<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Model {

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