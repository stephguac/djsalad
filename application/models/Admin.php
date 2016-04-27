<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model {
	public function adminLogin($userInput) {
		$sql = "SELECT * FROM users WHERE email = ? AND password = ? AND admin = 1";
		$params = [
			$userInput['email'],
			$userInput['password']
		];
		return $this->db->query($sql, $params)->row_array();
	} 
}