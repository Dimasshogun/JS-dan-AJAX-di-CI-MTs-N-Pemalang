<?php

class contact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); //untuk menjalankan fungsi kontrak yang ada di kelas ci kontroleer
        $this->load->model('Contact_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = 'Halaman Contact';
        $data['Contact'] = $this->Contact_model->getAllContact();
        $this->load->view('templates/header', $data);
        $this->load->view('contact/tambah');
        $this->load->view('templates/footer');
    }

}
