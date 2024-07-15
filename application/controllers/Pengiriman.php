<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengiriman extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pengiriman_model');
		$this->load->model('Kategori_model');
	}

	public function index()
	{
		$data['tittle'] = 'Pengiriman';
		$data['read_data_pengiriman'] = $this->Pengiriman_model->readData();
		$data['data_kategori'] = $this->Kategori_model->readData();
		$this->load->view('pengiriman/pengiriman', $data);
	}

	public function tambah()
	{
		$this->form_validation->set_rules('kode_pengiriman', 'Kode Pengiriman', 'required|trim');
		$this->form_validation->set_rules('lokasi_awal', 'Lokasi Awal', 'required|trim');
		$this->form_validation->set_rules('lokasi_finish', 'Lokasi Akhir', 'trim');
		$this->form_validation->set_rules('layanan', 'Layanan', 'trim');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
		if ($this->form_validation->run() == FALSE) {
			$data['tittle'] = 'Pengiriman';
			$data['read_data_kategori'] = $this->Kategori_model->readData();
			$this->load->view('pengiriman/tambah', $data);
		} else {
			$this->Pengiriman_model->createData();
			$this->session->set_flashdata('success', 'Menambahkan Pengiriman Baru');
			redirect('pengiriman/');
		}
	}

	public function edit($slug)
	{
		$this->form_validation->set_rules('kode_pengiriman', 'Kode Pengiriman', 'required|trim');
		$this->form_validation->set_rules('lokasi_awal', 'Lokasi Awal', 'required|trim');
		$this->form_validation->set_rules('lokasi_finish', 'Lokasi Akhir', 'trim');
		$this->form_validation->set_rules('layanan', 'Layanan', 'trim');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
		if ($this->form_validation->run() == FALSE) {
			$data['tittle'] = 'Edit';
			$data['data_perbaris'] = $this->Pengiriman_model->getBySlug($slug);
			$data['read_data_kategori'] = $this->Kategori_model->readData();
			$this->load->view('pengiriman/edit', $data);
		} else {
			$this->Pengiriman_model->editData($slug);
			$this->session->set_flashdata('success', 'mengedit pengiriman');
			redirect('pengiriman/');
		}
	}

	public function delete($slug)
	{
		$this->Pengiriman_model->deleteData($slug);
		$this->session->set_flashdata('success', ', Pengiriman selesai.');
		redirect('pengiriman/');
	}
}