<?php

class maps extends CI_Controller {
public function index(){
        $data['judul'] = 'Halaman Maps';  //judul
        $this->load->view('templates/header', $data);
            $this->load->view('maps/index');
            $this->load->view('templates/footer');
    }
}