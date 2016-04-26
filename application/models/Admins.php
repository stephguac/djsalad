<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admins extends CI_Model {
	public function index() {
		$this->load->view('adminLoginView');
	}
	public function adminLogin($userInput) {
		$sql = "SELECT * FROM users WHERE email = ? AND password = ? AND admin = 1";
		$params = [
			$userInput['email'],
			$userInput['password']
		];
		return $currentUser = $this->db->query($sql, $params)->row_array();
	} 
}