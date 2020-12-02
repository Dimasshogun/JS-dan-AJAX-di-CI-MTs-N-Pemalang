<?php
defined ('BASEPATH') OR exit();

class Page extends CI_Controller {
    function __construct(){
        parent ::__construct();

        $this->load->model('My_model', 'm');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['title'] = "CI AJAX";
        $this->load->view('templates/header_admin', $data);
        $this->load->view('home', $data);
        // $this->load->view('guru/index_admin');
        // $this->load->view('templates/footer_admin');
    }

    public function ambildata()
    {
        $dataBarang = $this->m->ambildata()->result();
        echo json_encode($dataBarang);
    }

    public function tambahdata()
    {
        $nama = $this->input->post('nama');
        $nip = $this->input->post('nip');
        $jeniskelamin = $this->input->post('jeniskelamin');
        $alamat = $this->input->post('alamat');

        if($nama==''){
            $result['pesan']="nama Harus Diisi";
        }else if($nip==''){
            $result['pesan']="Nip Harus Diisi";
        }else if($jeniskelamin==''){
            $result['pesan']="Jeniskelamin  Harus Diisi";
        }else if($alamat==''){
            $result['pesan']="Alamat  Harus Diisi";
        }else{
            $result['pesan']="";

            $data = array(
                'nama' => $nama,
                'nip' => $nip,
                'jeniskelamin' => $jeniskelamin,
                'alamat' => $alamat
            );
            $this->m->tambahdata($data, 'tguru');
        }
        echo json_encode($result);
    }
    
    public function ambilId()
    {
        $id = $this->input->post('id');
        $where = array('id'=>$id);
        $dataGuru = $this->m->ambilId('tguru', $where)->result();
        echo json_encode($dataGuru);
    }

    public function ubahdata()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $nip = $this->input->post('nip');
        $jeniskelamin = $this->input->post('jeniskelamin');
        $alamat = $this->input->post('alamat');

        if($nama==''){
            $result['pesan']="Nama Harus Diisi";
        }else if($nip==''){
            $result['pesan']="Nip Harus Diisi";
        }else if($jeniskelamin==''){
            $result['pesan']="jenis kelamin Harus Diisi";
        }else if($alamat==''){
            $result['pesan']="Alamat Harus Diisi";
        }else{
            $result['pesan']="";

            $where = array('id' => $id);

            $data = array(
                
                'nama' => $nama,
                'nip' => $nip,
                'jeniskelamin' => $jeniskelamin,
                'alamat' => $alamat
            );
            $this->m->updatedata($where, $data, 'tguru');
        }
        echo json_encode($result);
    }

    public function hapusdata()
    {
        $id = $this->input->post('id');
        $where = array('id'=>$id);
        $this->m->hapusdata($where, 'tguru');
    }

}

?>