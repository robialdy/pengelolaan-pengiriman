<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Kategori_model');
	}

	public function index()
	{
		$data['read_data_kategori'] = $this->Kategori_model->readData();
		$data['tittle'] = 'Home';
		$this->load->view('kategori/kategori', $data);
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required|trim');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
		if ($this->form_validation->run() == FALSE) {
			$data['tittle'] = 'Home';
			$this->load->view('kategori/tambah', $data);
		} else {
			$this->Kategori_model->createData();
			$this->session->set_flashdata('success', 'menambahkan kategori');
			redirect('kategori/');
		}
	}

	public function edit($slug)
	{
		$this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required|trim');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
		if ($this->form_validation->run() == FALSE) {
			$data ['data_perbaris'] = $this->Kategori_model->getBySlug($slug);
			$data['tittle'] = 'Home';
			$this->load->view('kategori/edit', $data);
		} else {
			$this->Kategori_model->editData($slug);
			$this->session->set_flashdata('success', 'mengedit kategori');
			redirect('kategori/');
		}
	}

	public function delete($slug)
	{
		$this->Kategori_model->deleteData($slug);
		$this->session->set_flashdata('success', 'menghapus kategori');
		redirect('kategori/');
	}


}
