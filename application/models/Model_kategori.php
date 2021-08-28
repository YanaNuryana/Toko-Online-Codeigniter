<?php

class Model_kategori extends CI_Model{
    public function data_elektronik(){
        return $this->db->get_where("tbl_barang",array('
        kategori' => 'elektronik'));
        
    }

    public function pakaian_pria(){
        return $this->db->get_where("tbl_barang",array('
        kategori' => 'pakaian pria'));
        
    }

    public function pakaian_wanita(){
        return $this->db->get_where("tbl_barang",array('
        kategori' => 'pakaian wanita'));
        
    }

    public function pakaian_anak_anak(){
        return $this->db->get_where("tbl_barang",array('
        kategori' => 'pakaian anak-anak'));
        
    }

    public function peralatan_olahraga(){
        return $this->db->get_where("tbl_barang",array('
        kategori' => 'peralatan olahraga'));
        
    }
}

?>