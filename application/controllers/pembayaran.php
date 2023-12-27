<?php

class Pembayaran extends CI_Controller{

    public function index()
    {

        $this->form_validation->set_rules('nama','Nama Lengkap Anda','required');
        $this->form_validation->set_rules('alamat','Alamat Email Anda','required');
        $this->form_validation->set_rules('no_tlp','Nomor Telepon Anda','required');
        $this->form_validation->set_rules('email','Domisili Anda','required');
        if($this->form_validation->run() == FALSE)        {
            $this->load->view('templates/header');
            $this->load->view('dashboard/pembayaran');
            $this->load->view('templates/footer');
        }else{
            $pembayaran = $this->load->view('dashboard/proses_pesanan');

            if($pembayaran == FALSE)
            {
                $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Username atau Password Anda Salah!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
                    redirect('dashboard/pembayaran');
            }
        }
    }
}