<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('data_user')) {
			redirect('auth');
		};
	}

	public function index()
	{
		$data = [
			'tittle' => 'Home',
			'data_user' => $this->db->get_where('users', ['username' => $this->session->userdata('data_user')])->row_array()
		];
		$this->load->view('home/home', $data);
	}
}
