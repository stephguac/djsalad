<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {
	
	public function index() {
		$this->load->view('orderDetailsView');
	}
	
	public function placeOrder() {
		//add both shipping and billing addresses into db from form data
		$this->load->model('Order');
		$SA = $this->Order->addShippingAddress($this->input->post());
		if(isset($this->input->post('sameAsShipping'))) {
			$BA = $this->Order->shippingIsBilling($this->input->post());
		}
		else {
			$BA = $this->Order->addBillingAddress($this->input->post());
		}
		$this->Order->addOrder($SA, $BA);
		// add stripe functionality here!
	}

	public function displayOrders() {
		$this->load->model('Order');
		$result = $this->Order->getOrders();
		$data['orderArray'] = $result;
		$this->load->view('orderDashboardView', $data);
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

	public function changeOrderStatus($oID) {
		//process dropdown form data to change order status in db
		$this->load->model('Order');
		$status = $this->input->post()['status'];
		$this->Order->changeOrderStatus($oID , $status);
		redirect('/');
	}

	public function displayOrderDetails() {
		$this->load->view('orderDetailsView');
		//get details of specified order from db. this might need to be two functions - one for the table? idk whatevers easier for you.
	}
}