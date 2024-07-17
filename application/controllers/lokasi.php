<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasi extends CI_Controller {

    public function __construct() {
        parent::__construct();
		if (!$this->session->userdata('data_user')) {
			redirect('auth');
		};
        $this->load->model('Lokasi_model'); 
    }

    public function index() {
        $data = [
            'lokasi' => $this->Lokasi_model->get_lokasi()
        ];
        $data['data_user'] = $this->db->get_where('users', ['username' => $this->session->userdata('data_user')])->row_array();
    
        $this->load->view('components/header');
        $this->load->view('components/sidebar', $data);
        $this->load->view('lokasi/lokasi', $data);
        $this->load->view('components/footer');
    }
    

    public function tambah() {
       
        $this->form_validation->set_rules('kota', ' Kota', 'required|trim');
        $this->form_validation->set_rules('nama_cabang', 'Nama Cabang', 'required|trim');
        $this->form_validation->set_rules('kontak', 'Kontak', 'required|trim');

        
        if ($this->form_validation->run() == false) {

			$data['data_user'] = $this->db->get_where('users', ['username' => $this->session->userdata('data_user')])->row_array();
            
            $this->load->view('components/header');
            $this->load->view('components/sidebar', $data);
            $this->load->view('lokasi/tambah_lokasi');  
            $this->load->view('components/footer');
        } else {
            // Jika validasi berhasil, simpan data
            $slug = url_title($this->input->post('kota', true), 'dash', true); 
            $data = [
                'kota' => $this->input->post('kota', true),
                'nama_cabang' => $this->input->post('nama_cabang', true),
                'kontak' => $this->input->post('kontak', true),
                'slug' => $slug
            ];
            $this->db->insert('lokasi_pengiriman', $data);
            
            redirect('lokasi');
        }
    }

    public function delete($slug)
	{
		$this->Lokasi_model->deleteData($slug);
		$this->session->set_flashdata('success', 'menghapus lokasi');
		redirect('lokasi');
	}

    public function ubah($slug) {
        
        $lokasi = $this->Lokasi_model->getlokasibyslug($slug);


        $this->form_validation->set_rules('kota', ' Kota', 'required');
        $this->form_validation->set_rules('nama_cabang', 'Nama Cabang', 'required|trim');
        $this->form_validation->set_rules('kontak', 'Kontak', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data = [
                'lokasi' => $lokasi, 
            ];
			$data['data_user'] = $this->db->get_where('users', ['username' => $this->session->userdata('data_user')])->row_array();

            $this->load->view('components/header');
            $this->load->view('components/sidebar', $data);
            $this->load->view('lokasi/ubah', $data);  
            $this->load->view('components/footer');
        } else {
            $this->Lokasi_model->ubahlokasi($slug); 
            redirect('lokasi');
        }
    }
}
