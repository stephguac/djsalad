<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Model 
{
	public function addOrder($SA, $BA, $total) {
		$sql = "INSERT INTO orders (user_id, created_at, updated_at, shipping_address_id, billing_address_id, status, total) VALUES (?, NOW(), NOW(), ?, ?, 1, ?)";
		$params = [
			$this->session->userdata('currentUser')['id'],
			$SA['id'],
			$BA['id'],
			$total
		];
		$this->db->query($sql, $params);
	}

	public function getOrders(){
		$sql = "SELECT * FROM orders";
		return $this->db->query($sql)->result_array();
		//this gets a list of all the orders from the database 
	}

	public function searchOrders($search) {
		$sql = "SELECT orders";
		$params = [
			$searchOrders['']
		];

		$this->db->query($sql, $params);
		// this is going to search the table with orders
		// not complete
	}

	public function filterOrders(){

		return $this->db->query("SELECT * FROM orders")->result_array();
		// this allows the user to filter orders by thier status 
		// not complete
	}

	public function orderDetails(){
		$orderDetailsArray = $this->db->query("SELECT * FROM orders")->result_array();
		foreach ($orderDetailsArray as $order) {

		}
	}

	public function addShippingAddress($input) {
		$sql = "INSERT INTO addresses (user_id, type, address, city, state, zipcode) VALUES (?, 'shipping', ?, ?, ?, ?)";

		$params = [
			$this->session->userdata('currentUser')['id'],
			$input['addressS'],
			$input['cityS'],
			$input['stateS'],
			$input['zipcodeS'],
		];
		$this->db->query($sql, $params);
		$insertedID = $this->db->insert_id();
		$sql2 = "SELECT * FROM addresses WHERE id = $insertedID";
		return $this->db->query($sql2)->row_array();
	}

	public function shippingIsBilling($input) {
		$sql = "INSERT INTO addresses (user_id, type, address, city, state, zipcode) VALUES (?, 'billing', ?, ?, ?, ?)";
		$params = [
			$this->session->userdata('currentUser')['id'],
			$input['addressS'],
			$input['cityS'],
			$input['stateS'],
			$input['zipcodeS'],
		];
		return $this->db->query($sql, $params);
		$insertedID = $this->db->insert_id();
		$sql2 = "SELECT * FROM addresses WHERE id = $insertedID";
		return $this->db->query($sql2)->row_array();		
	}

	public function addBillingAddress($input) {
		$sql = "INSERT INTO addresses (user_id, type, address, city, state, zipcode) VALUES (?, 'billing', ?, ?, ?, ?)";
		$params = [
			$this->session->userdata('currentUser')['id'],
			$input['addressB'],
			$input['cityB'],
			$input['stateB'],
			$input['zipcodeB'],
		];
		return $this->db->query($sql, $params);
		$insertedID = $this->db->insert_id();
		$sql2 = "SELECT * FROM addresses WHERE id = $insertedID";
		return $this->db->query($sql2)->row_array();			
	}

	public function changeOrderStatus($orderID, $newStatus) {

		$sql = "UPDATE orders SET orders.status = $newStatus WHERE orders.id = $orderID";
		$params = [
			$orderID
		];
		return $this->db->query($sql, $params);
	}
}