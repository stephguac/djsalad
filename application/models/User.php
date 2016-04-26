<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	public function register($stuff) {
			$sql = "INSERT INTO users (first_name, last_name, email, password, created_at, updated_at) VALUES (?, ?, ?, ?, now(), now())";
					$params = [
						$stuff['firstName'],
						$stuff['lastName'],
						$stuff['email'],
						$stuff['password'],
					];
			$this->db->query($sql, $params);
			$this->session->set_flashdata('vals','Successfully Registered!');	
	}

	public function login($stuff) {
		$sql = "SELECT * FROM users WHERE email = ? AND password = ?";
		$params = [
			$stuff['email'],
			$stuff['password']
		];
		return $this->db->query($sql, $params)->row_array();
	}
}