<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_layanan() {
        return $this->db->get('layanan_pengiriman')->result_array();
    }

    
    public function deleteData($slug)
	{
		$this->db->where('slug', $slug);
		$this->db->delete('layanan_pengiriman');
	}

    public function ubahlayanan($slug) {
        $data = [
            'nama_layanan' => $this->input->post('nama_layanan', true),
            'deskripsi' => $this->input->post('deskripsi', true)
        ];

        $this->db->where('slug', $slug);
        $this->db->update('layanan_pengiriman', $data);
    }

    public function get_layanan_by_slug($slug) {
        return $this->db->get_where('layanan_pengiriman', ['slug' => $slug])->row_array();
    }

}
