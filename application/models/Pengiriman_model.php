<?php

class Pengiriman_model extends CI_Model
{
	// public function readData()
	// {
	// 	return $this->db->get('pengelolaan_pengiriman')->result_array();
	// }

	public function readData()
	{
		$this->db->select('pengelolaan_pengiriman.*, kategori_barang.nama_kategori');
		$this->db->from('pengelolaan_pengiriman');
		$this->db->join('kategori_barang', 'pengelolaan_pengiriman.id_kategori = kategori_barang.id_kategori');
		$query = $this->db->get();
		return $query->result();	
	}

	public function createData()
	{
		$kode_pengirim = strtoupper($this->input->post('kode_pengiriman', true));
		$slug = createSlug($kode_pengirim);
		$pengiriman_data = [
			'kode_pengiriman' => $kode_pengirim,
			'domisili_asal' => $this->input->post('lokasi_awal', true),
			'id_lokasi' => $this->input->post('lokasi_finish', true) ?: null,
			'id_layanan' => $this->input->post('layanan', true) ?: null,
			'id_kategori' => $this->input->post('kategori', true),
			'slug' => $slug
		];
		$this->db->insert('pengelolaan_pengiriman', $pengiriman_data);
	}

	public function editData($slug)
	{
		$kode_pengirim = $this->input->post('kode_pengiriman', true);
		$slug = createSlug($kode_pengirim);
		$pengiriman_data = [
			'kode_pengiriman' => $kode_pengirim,
			'domisili_asal' => $this->input->post('lokasi_awal', true),
			'id_lokasi' => $this->input->post('lokasi_finish', true) ?: null,
			'id_layanan' => $this->input->post('layanan', true) ?: null,
			'id_kategori' => $this->input->post('kategori', true),
			'slug' => $slug
		];
		$this->db->where('slug', $slug);
		$this->db->update('pengelolaan_pengiriman', $pengiriman_data);
	}

	public function deleteData($slug)
	{
		$this->db->where('kode_pengiriman', $slug);
		$this->db->delete('pengelolaan_pengiriman');
	}

	public function getBySlug($slug)
	{
		return $this->db->get_where('pengelolaan_pengiriman', ['slug' => $slug])->row_array();
	}
}
