<?php

class contact extends CI_Controller
{
    //satu kontrole mau pake sebaiknya simpan di konstrakted 
    public function __construct()
    {
        parent::__construct(); //untuk menjalankan fungsi kontrak yang ada di kelas ci kontroleer
        $this->load->model('Contact_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        // $this->load->model('Contact_model'); //kalau mau nglod model cuma bisa di method index saja
        $data['judul'] = 'Daftar Contact';    //judul
        $data['Contact'] = $this->Contact_model->getAllContact();
        $this->load->view('templates/header_admin', $data);
        $this->load->view('contact/index');
        $this->load->view('templates/footer_admin');
    }
    

    // from tambah data
    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Contact';  //judul
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('no_telp', 'no_telp', 'required|numeric');
        $this->form_validation->set_rules('pesan', 'Pesan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('contact/tambah');
            $this->load->view('templates/footer_admin');
        } else {
            $this->Contact_model->tambahDataContact();
            redirect('admin/contact');
        }
    }
}

