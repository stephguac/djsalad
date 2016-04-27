<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends CI_Model {

	// INVENTORIES A.K.A. PRODUCTS
	
	public function index(){
		$this->load->view('productDetailsView.php');
	}
}