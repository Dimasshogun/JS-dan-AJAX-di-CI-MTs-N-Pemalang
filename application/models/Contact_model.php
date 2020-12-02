<?php
//database  
class Contact_model extends CI_model
{
    public function getAllContact()
    {
        $query = $this->db->get('tcontact');
        return $query->result_array(); //buat nampilin objek array
    }

    public function tambahDataContact()
    {
        $data = [
            "nama" => $this->input->post('nama', true),     //mau securiti dia dari sql injeksen or xxxx atau supaya tidk bisa di hack kalau di ci tambahin parameter kedua true saja
            "email" => $this->input->post('email', true),
            "no_telp" => $this->input->post('no_telp', true),
            "pesan" => $this->input->post('pesan', true)
        ];
        $this->db->insert('tcontact', $data);
    }
}
