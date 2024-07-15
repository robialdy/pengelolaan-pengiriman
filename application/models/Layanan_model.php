<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_layanan() {
        return $this->db->get('layanan')->result_array();
    }

    public function get_layanan_by_slug($slug) {
        return $this->db->get_where('layanan', ['slug' => $slug])->row_array();
    }

    public function hapuslayanan($id_layanan) {
        $this->db->where( 'id_layanan' , $id_layanan);
        $this->db->delete('layanan');
    }

    public function ubahlayanan($id_layanan) {
        $data = [
            'nama_layanan' => $this->input->post('nama_layanan', true),
            'deskripsi' => $this->input->post('deskripsi', true)
        ];

        $this->db->where('id_layanan', $id_layanan);
        $this->db->update('layanan', $data);
    }
}
