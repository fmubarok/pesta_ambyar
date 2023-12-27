<?php 

class Model_kategori extends CI_Model{
    public function data_elektronik(){
        return $this->db->get_where("tb_barang",array('kategori' => 'elektronik'));
    }

    public function data_day_1(){
        return $this->db->get_where("tb_barang",array('kategori' => 'day 1'));
    }

    public function data_day_2(){
        return $this->db->get_where("tb_barang",array('kategori' => 'day 2'));
    }

    public function data_day_3(){
        return $this->db->get_where("tb_barang",array('kategori' => 'day 3'));
    }

    public function data_bundling_3(){
        return $this->db->get_where("tb_barang",array('kategori' => 'bundling 3'));
    }
}