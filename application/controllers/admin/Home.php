<?php

class Home extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Halaman Home';
        $this->load->view('templates/header_admin', $data);
        $this->load->view('home/home_admin');
        $this->load->view('templates/footer_admin');
    }
}
