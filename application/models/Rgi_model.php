<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rgi_model extends CI_Model
{
    public function getAllRgi()
    {
        return $this->db->get('rgi')->result_array();
    }

    public function tambahDataRgi()
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
        $this->db->insert('rgi', $data);
    }
}