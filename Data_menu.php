<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_menu extends CI_Controller{

    public function index()
    {
        $data['menu'] = $this->model_dash->tampil_data()->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/topbar');
        $this->load->view('admin/v_menu', $data);
        $this->load->view('template_admin/footer');
    }

    public function tambah_aksi()
    {
        $nama_dash      = $this->input->post('nama_dash');
        $keterangan     = $this->input->post('keterangan');
        $kategori       = $this->input->post('kategori');
        $gambar         = $_FILE['gambar']['name'];
        if ($gambar     =''){}else{
            $config ['upload_path'] = './uploads';
            $config ['allowed_types'] = 'jpg|jpeg|png';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambar')){
                echo "Gambar Gagal Diupload";
            }else{
                $gambar=$this->upload->data('file_name');
            }
        }
        $data = array (
            'nama_dash'     => $nama_dash,
            'keterangan'    => $keterangan,
            'kategori'      => $kategori,
            'gambar'        => $gambar
        );

        $this->model_dash->tambah_info($data, 'tb_dash');
        redirect('admin/data_menu/index');
    }
    public function edit($id)
    {
        $where = array('id_dash' =>$id);
        $data['menu'] = $this->model_dash->edit_menu($where, 'tb_dash')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/topbar');
        $this->load->view('admin/edit_menu', $data);
        $this->load->view('template_admin/footer');
    }

    public function update(){
        $id             = $this->input->post('id_dash');
        $nama_dash      = $this->input->post('nama_dash');
        $keterangan     = $this->input->post('keterangan');
        $kategori       = $this->input->post('kategori');

        $data = array(

            'nama_dash'      => $nama_dash,
            'keterangan'     => $keterangan,
            'kategori'       => $kategori,
        );

        $where = array( 

            'id_dash' => $id
        );

        $this->model_dash->update_data($where,$data,'tb_dash');
        redirect('admin/data_menu/index');
    }

    public function hapus ($id)
    {
        $where = array('id_dash' => $id);
        $this->model_dash->hapus_data($where, 'tb_dash');
        redirect('admin/data_menu/index');
    }
}