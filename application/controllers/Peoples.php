<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peoples extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Peoples_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'List of Peoples';
        //PAGINATION
        $this->load->library('pagination');

        //ambil data keyword search
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        //config
        //akan mencari query terakhir
        $this->db->like('name', $data['keyword']);
        $this->db->or_like('email', $data['keyword']);
        $this->db->from('peoples');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 7;
        
        //inisialisasi pagination nya bardasarkan configurasinya 
        //iniziatilaze
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['peoples'] = $this->Peoples_model->getPeoples($config['per_page'], $data['start'], $data['keyword']);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('peoples/index', $data);
        $this->load->view('templates/footer');
    }

    // public function tambah()
    // {
    //     $data[' title '] = ' Tambah Data Alumni Petik ';

    //     $this->form_validation->set_rules(' nama ', ' Nama ', ' required ');
    //     $this->form_validation->set_rules(' ttl ', ' Tempat dan Tanggal Lahir ', ' required ');
    //     $this->form_validation->set_rules(' alamat ', ' Alamat ', ' required ');
    //     $this->form_validation->set_rules(' perusahaan ', ' Perusahaan ', ' required ');
    //     $this->form_validation->set_rules(' jabatan ', ' Jabatan ', ' required ');
    //     $this->form_validation->set_rules(' mulai ', ' Mulai ', ' required ');
    //     $this->form_validation->set_rules(' selesai ', ' Selesai ', ' required ');

    //     if ($this->form_validation->run() == false) {
    //         $this->load->view(' templates / header ', $data);
    //         $this->load->view(' templates / sidebar ');
    //         $this->load->view(' templates / topbar ');
    //         $this->load->view(' petik / tambah ', $data);
    //         $this->load->view(' templates / footer ');
    //     } else {
    //         $this->Petik_model->tambahDataPetik();
    //         $this->session->set_flashdata(' flash ', ' Ditambahkan ');
    //         redirect(' petik');
    //     }
    // }

}
