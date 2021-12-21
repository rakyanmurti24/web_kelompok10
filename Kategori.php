<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_controller{ 
    public function wisata_alam()
    {
        $data['wisata'] = $this->model_kategori->data_wisata()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/topbar');
        $this->load->view('alam', $data);
        $this->load->view('templates/footer');
    }

    public function wisata_kuliner()
    {
        $data['kuliner'] = $this->model_kategori->data_kuliner()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/topbar');
        $this->load->view('kuliner', $data);
        $this->load->view('templates/footer'); 
    }
}
