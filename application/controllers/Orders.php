<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {
	
	public function index() {
		$this->load->view('orderDashboardView');
	}
	
	public function displayOrders() {
		$this->load->model('Order');
		$result = $this->Order->getOrders();
		$data['orderArray'] = $result;
		$this->load->view('orderDetailsView', $data);
		// populate everyones orders table from db
	}

	public function searchOrders() {
		$this->load->model('order');
		$search = $this->input->post('search');
		$orders = $this->order->searchOrders($search);
		
		$orderSearchData = array('');
		$orderSearchData['orders'] = $orders;
		
		$this->load->view('orderDetailsView', $orderSearchData);
		// search through orders
	}

	public function filterOrders() {
		$this->load->model('order');
		$filterData['filterArray'] = $this->orders->filterOrders();

		$this->load->view('orderDetailsView', $filterData);
		// filter orders - order in, shipped, cancelled. process from form data dropdown menu
	}

	public function changeOrderStatus() {
		//process dropdown form data to change order status in db
		$this->load->model('order');
		$this->order->changeOrderStatus($this->input->post());
	}

	public function displayOrderDetails() {
		$this->load->view('orderDetailsView');
		//get details of specified order from db. this might need to be two functions - one for the table? idk whatevers easier for you.
	}
}