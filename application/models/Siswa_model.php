<?php
//database  
class Siswa_model extends CI_model
{
    public function getAllSiswa()
    {
        $query = $this->db->get('tsiswa');
        return $query->result_array(); //buat nampilin objek array
    }

    public function tambahDataSiswa()
    {
        $data = [
            "nama" => $this->input->post('nama', true),     //mau securiti dia dari sql injeksen or xxxx atau supaya tidk bisa di hack kalau di ci tambahin parameter kedua true saja
            "nis" => $this->input->post('nis', true),
            "jeniskelamin" => $this->input->post('jeniskelamin', true),
            "alamat" => $this->input->post('alamat', true)
        ];
        $this->db->insert('tsiswa', $data);
    }
}
