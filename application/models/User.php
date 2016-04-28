<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	public function register($stuff) {

		// register user
		$sql = "INSERT INTO users (first_name, last_name, email, password, created_at, updated_at, admin) VALUES (?, ?, ?, ?, now(), now(), 0)";
				$params = [
					$stuff['firstName'],
					$stuff['lastName'],
					$stuff['email'],
					$stuff['password'] // random comma removed
				];
		$this->db->query($sql, $params);

		// message
		$this->session->set_flashdata('vals','Successfully Registered!');
	}

	public function login($inputz) {
		$sql = "SELECT * FROM users WHERE email = ? AND password = ?";
		$params = [
			$inputz['email'],
			$inputz['password']
		];
		return $this->db->query($sql, $params)->row_array();
	}
}