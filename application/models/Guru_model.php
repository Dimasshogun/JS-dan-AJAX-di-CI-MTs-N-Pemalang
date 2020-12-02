<?php
//database  
class Guru_model extends CI_model {
    public function getAllGuru(){
        $query = $this->db->get('tguru');
        return $query->result_array(); //buat nampilin objek array
    }

    public function tambahDataGuru(){
        $data = [
            "nama" => $this->input->post('nama', true),     //mau securiti dia dari sql injeksen or xxxx atau supaya tidk bisa di hack kalau di ci tambahin parameter kedua true saja
            "nip" => $this->input->post('nip', true),
            "jeniskelamin" => $this->input->post('jeniskelamin', true),
            "alamat" => $this->input->post('alamat', true)
        ];
        $this->db->insert('tguru', $data);
    }
    public function cariDataGuru(){
        $keyword = $this->input->post('keyword', true);
    }
}