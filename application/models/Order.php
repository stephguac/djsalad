<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Model 
{
	public function addOrder($orderData) {
		$sql = "INSERT INTO orders (user_id, created_at, updated_at, billing_address_id, total, status) VALUES (?, NOW(), NOW(), ?, ?, 1)";
		$params = [
			$orderData['user_id'],  // to referencing the users name
			$orderData['created_at'],
			$orderData['updated_at'],
			$orderData['billing_address_id'],
			$orderData['total'],  // this might need to be added to the DataBase
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
	}

	public function filterOrders(){

		return $this->db->query("SELECT * FROM orders")->result_array();
		// this allows the user to filter orders by thier status 
	}

	public function orderDetails(){
		$orderDetailsArray = $this->db->query("SELECT * FROM orders")->result_array();
		foreach ($orderDetailsArray as $order) {

		}
	}
	public function changeOrderStatus($orderID, $newStatus) {
		$sql = "UPDATE orders SET orders.status = $newStatus WHERE orders.id = $orderID";
		$params = [
			$orderID
		];
		return $this->db->query($sql, $params);
	}
}