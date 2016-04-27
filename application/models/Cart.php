<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Model {

	public function productAddToCart($productID) {
		$sql = "INSERT INTO cart_product (cart_id, product_id) VALUES (?, ?)";
		$params = [
			
		];	
	}

}