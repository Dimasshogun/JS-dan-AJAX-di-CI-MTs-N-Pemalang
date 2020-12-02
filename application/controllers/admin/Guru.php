<?php

class Guru extends CI_Controller
{
    //satu kontrole mau pake sebaiknya simpan di konstrakted 
    public function __construct()
    {
        parent::__construct(); //untuk menjalankan fungsi kontrak yang ada di kelas ci kontroleer
        $this->load->model('Guru_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        // $this->load->model('Guru_model'); //kalau mau nglod model cuma bisa di method index saja
        $data['judul'] = 'Daftar Guru';    //judul
        $data['Guru'] = $this->Guru_model->getAllGuru();
        $this->load->view('templates/header_admin', $data); //memanggil judul $data
        $this->load->view('guru/index_admin');
        $this->load->view('templates/footer_admin');
    }

    // from tambah data
    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Guru';  //judul
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nip', 'Nip', 'required|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('guru/tambah');
            $this->load->view('templates/footer_admin');
        } else {
            $this->Guru_model->tambahDataGuru();
            redirect('admin/guru');
        }
    }
}
