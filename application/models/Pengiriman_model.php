<?php

class Pengiriman_model extends CI_Model
{
	public function autoInvoice()
	{
		$this->db->select_max('kode_pengiriman', 'max_kode');
		$query = $this->db->get('pengelolaan_pengiriman');
		$row = $query->row();
		$kode = $row->max_kode;

		$number = (int) substr($kode, 3);
		$number++;

		$kode_baru = 'BDP' . sprintf("%03s", $number);
		return $kode_baru;
	}

	public function readData()
	{
		$this->db->select('pengelolaan_pengiriman.*, kategori_barang.nama_kategori, layanan_pengiriman.nama_layanan, lokasi_pengiriman.kota');
		$this->db->from('pengelolaan_pengiriman');
		$this->db->join('kategori_barang', 'pengelolaan_pengiriman.id_kategori = kategori_barang.id_kategori');
		$this->db->join('layanan_pengiriman', 'pengelolaan_pengiriman.id_layanan = layanan_pengiriman.id_layanan');
		$this->db->join('lokasi_pengiriman', 'pengelolaan_pengiriman.id_lokasi = lokasi_pengiriman.id_lokasi');
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
			'id_layanan' => $this->input->post('layanan', true),
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
			'id_layanan' => $this->input->post('layanan', true),
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
