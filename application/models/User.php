<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	public function register($stuff) {
			$sql = "INSERT INTO users (first_name, last_name, email, password, created_at, updated_at, admin) VALUES (?, ?, ?, ?, now(), now(), 0)";
					$params = [
						$stuff['firstName'],
						$stuff['lastName'],
						$stuff['email'],
						$stuff['password'],
					];
			$this->db->query($sql, $params);

			$this->session->set_flashdata('vals','Successfully Registered!');

			// Immediately og in user for him after successful registration.
			return $this->db->query("SELECT * FROM users WHERE email = ?", $stuff['email'])->row_array();
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