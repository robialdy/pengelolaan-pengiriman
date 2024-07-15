<?php

class Kategori_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->Helper('slug');
	}

	public function readData()
	{
		return $this->db->get('kategori_barang')->result_array();
	}

	public function createData()
	{
		$nama_kategori = $this->input->post('nama_kategori', true);
		$slug = createSlug($nama_kategori);
		$kategori_data = [
			'nama_kategori' => $nama_kategori,
			'deskripsi' => $this->input->post('deskripsi', true),
			'slug' => $slug
		];
		$this->db->insert('kategori_barang', $kategori_data);
	}

	public function deleteData($slug)
	{
		$this->db->where('slug', $slug);
		$this->db->delete('kategori_barang');
	}

	public function editData($slug)
	{
		$nama_slug = $this->input->post('nama_kategori');
		$new_slug = createSlug($nama_slug);

		$kategori_data = [
			'nama_kategori' => $this->input->post('nama_kategori', true),
			'deskripsi' => $this->input->post('deskripsi', true),
			'slug' => $new_slug
		];
		$this->db->where('slug', $slug);
		$this->db->update('kategori_barang', $kategori_data);
	}

	public function getBySlug($slug)
	{
		return $this->db->get_where('kategori_barang', ['slug' => $slug])->row_array();
	}
}
