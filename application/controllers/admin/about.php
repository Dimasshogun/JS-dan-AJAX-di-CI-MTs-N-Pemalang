<?php

class about extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Halaman About';
        $this->load->view('templates/header_admin', $data);
        $this->load->view('about/index');
        $this->load->view('templates/footer_admin');
    }
}
