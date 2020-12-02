<?php

class visi extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Halaman Visi dan Misi';  //judul
        $this->load->view('templates/header_admin', $data);
        $this->load->view('visi/index');
        $this->load->view('templates/footer_admin');
    }
}
