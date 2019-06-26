<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petik_model extends CI_Model
{
    public function getAllPetik()
    {
        return $this->db->get('petik')->result_array();
    }

    public function tambahDataPetik()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "ttl" => $this->input->post('ttl', true),
            "alamat" => $this->input->post('alamat', true),
            "perusahaan" => $this->input->post('perusahaan', true),
            "jabatan" => $this->input->post('jabatan', true),
            "mulai" => $this->input->post('mulai', true),
            "selesai" => $this->input->post('selesai', true),
        ];
        $this->db->insert('petik', $data);
    }
}