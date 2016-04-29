<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model {
	public function adminLogin($userInput) {
		$sql = "SELECT * FROM users WHERE email = ? AND password = ?";
		$params = [
			$userInput['email'],
			$userInput['password']
		];
		return $this->db->query($sql, $params)->row_array();
	} 
}



// regular log in template:

// public function login($inputz) {
// 		$sql = "SELECT * FROM users WHERE email = ? AND password = ?";
// 		$params = [
// 			$inputz['email'],
// 			$inputz['password']
// 		];
// 		return $this->db->query($sql, $params)->row_array();
// 	}