<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peoples_model extends CI_Model
{
    public function getAllPeoples()
    {
        return $this->db->get('peoples')->result_array();
    }

    public function getPeoples($limit, $start)
    {
        return $this->db->get('peoples', $limit, $start)->result_array();
    }

    public function countAllPeoples()
    {
        return $this->db->get('peoples')->num_rows();
    }

    // public function tambahDataPetik()
    // {
    //     $data = [
    //         "nama" => $this->input->post('nama', true),
    //         "ttl" => $this->input->post('ttl', true),
    //         "alamat" => $this->input->post('alamat', true),
    //         "perusahaan" => $this->input->post('perusahaan', true),
    //         "jabatan" => $this->input->post('jabatan', true),
    //         "mulai" => $this->input->post('mulai', true),
    //         "selesai" => $this->input->post('selesai', true),
    //     ];
    //     $this->db->insert('petik', $data);
    // }
}