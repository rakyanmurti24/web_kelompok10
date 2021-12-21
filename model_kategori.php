<?php 

class Model_kategori extends CI_Model{ 
    public function data_wisata(){ 
       return $this->db->get_where("tb_dash",array('kategori'=>'wisata alam'));
    }
    public function data_kuliner(){
        return $this->db->get_where("tb_dash",array('kategori'=>'wisata kuliner'));
     }
}
