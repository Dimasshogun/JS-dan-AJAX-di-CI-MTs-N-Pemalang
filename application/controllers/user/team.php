<?php

class team extends CI_Controller {
public function index(){
        $data['judul'] = 'Halaman Profile';  //judul
        $this->load->view('templates/header', $data);
            $this->load->view('team/index');
            $this->load->view('templates/footer');
    }
}