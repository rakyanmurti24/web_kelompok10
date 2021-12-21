<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_admin Extends CI_Controller{ 
    public function index()
    {
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/topbar');
        $this->load->view('Admin/Data_alam');
        $this->load->view('template_admin/footer');
    }
}   