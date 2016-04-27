<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends CI_Model 
{
	public function index(){
		$this->load->view('productDetailsView.php');
	}
}