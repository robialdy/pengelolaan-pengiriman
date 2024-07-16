<?php

class Auth_model extends CI_Model
{
	public function insertData()
	{
		$data = [
			'username' => $this->input->post('username', true),
			'password' => password_hash($this->input->post('password1', true), PASSWORD_DEFAULT),
		];
		$this->db->insert('users', $data);
	}
}
