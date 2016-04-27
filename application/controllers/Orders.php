<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {
	
	public function index() {
		$this->load->view('orderDashboardView');
	}

	public function searchOrders() {
		// search through orders
	}

	public function filterOrders() {
		// filter orders - order in, shipped, cancelled. process from form data dropdown menu
	}

	public function displayOrders() {
		// populate everyones orders table from db
	}

	public function changeOrders() {
		//process dropdown form data to change order status in db
	}

	public function displayOrderDetails() {
		//get details of specified order from db. this might need to be two functions - one for the table? idk whatevers easier for you.
	}
}