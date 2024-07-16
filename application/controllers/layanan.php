<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {

    public function __construct() {
        parent::__construct();
		if (!$this->session->userdata('data_user')) {
			redirect('auth');
		};
        $this->load->model('Layanan_model'); 
    }

    public function index() {
        $data = [
            'layanan' => $this->Layanan_model->get_layanan()
        ];
		$data['data_user'] = $this->db->get_where('users', ['username' => $this->session->userdata('data_user')])->row_array();

        $this->load->view('components/header');
        $this->load->view('components/sidebar', $data);
        $this->load->view('layanan/layanan', $data);
        $this->load->view('components/footer');
    }

    public function tambah() {
       
        $this->form_validation->set_rules('nama_layanan', 'Nama Layanan', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');

        
        if ($this->form_validation->run() == false) {

			$data['data_user'] = $this->db->get_where('users', ['username' => $this->session->userdata('data_user')])->row_array();
            
            $this->load->view('components/header');
            $this->load->view('components/sidebar', $data);
            $this->load->view('layanan/tambah_layanan');  
            $this->load->view('components/footer');
        } else {
            // Jika validasi berhasil, simpan data
            $slug = url_title($this->input->post('nama_layanan', true), 'dash', true); 
            $data = [
                'nama_layanan' => $this->input->post('nama_layanan', true),
                'deskripsi' => $this->input->post('deskripsi', true),
                'slug' => $slug
            ];
            $this->db->insert('layanan_pengiriman', $data);
            
            redirect('layanan');
        }
    }

    public function hapus($slug){
       
        $layanan = $this->Layanan_model->get_layanan_by_slug($slug);
        $this->Layanan_model->hapuslayanan($layanan,'id_layanan'); 
        $this->session->set_flashdata('flash','hapus');
        redirect('layanan');
    }

    public function ubah($slug) {
        
        $layanan = $this->Layanan_model->get_layanan_by_slug($slug);

        

        $this->form_validation->set_rules('nama_layanan', 'Nama layanan', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data = [
                'layanan' => $layanan, 
            ];
			$data['data_user'] = $this->db->get_where('users', ['username' => $this->session->userdata('data_user')])->row_array();

            $this->load->view('components/header');
            $this->load->view('components/sidebar', $data);
            $this->load->view('layanan/ubah', $data);  
            $this->load->view('components/footer');
        } else {
            $this->Layanan_model->ubahlayanan($layanan['id_layanan']); 
            redirect('layanan');
        }
    }
}
