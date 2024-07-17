<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasi_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_lokasi() {
        return $this->db->get('lokasi_pengiriman')->result_array();
    }

    
    public function deleteData($slug){
		$this->db->where('slug', $slug);
		$this->db->delete('lokasi_pengiriman');
	}

    public function ubahlokasi($slug) {
        $data = [
            'kota' => $this->input->post('kota', true),
            'nama_cabang' => $this->input->post('nama_cabang', true),
            'kontak' => $this->input->post('kontak', true),
        ];

        $this->db->where('slug', $slug);
        $this->db->update('lokasi_pengiriman', $data);
    }

    public function getlokasibyslug($slug) {
        return $this->db->get_where('lokasi_pengiriman', ['slug' => $slug])->row_array();
    }

}
