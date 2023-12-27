<?php

class Kategori extends CI_Controller{
    public function elektronik()
    {
        $data['elektronik'] = $this->model_kategori->data_elektronik()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('elektronik',$data);
        $this->load->view('templates/footer');
    }

    public function day_1()
    {
        $data['day_1'] = $this->model_kategori->data_day_1()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('day_1',$data);
        $this->load->view('templates/footer');
    }

    public function day_2()
    {
        $data['day_2'] = $this->model_kategori->data_day_2()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('day_2',$data);
        $this->load->view('templates/footer');
    }

    public function day_3()
    {
        $data['day_3'] = $this->model_kategori->data_day_3()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('day_3',$data);
        $this->load->view('templates/footer');
    }
}