<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
    {
    
    public function index()
    {
        $data['dash'] = $this->model_dash->tampil_data()->result();
        $this->load->view('templates/header'); 
        $this->load->view('templates/topbar'); 
        $this->load->view('v_dashboard',$data);
        $this->load->view('templates/footer'); 
    }  
}