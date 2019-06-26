<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petik extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Petik_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Daftar Alumni Petik';
        $data['petik'] = $this->Petik_model->getAllPetik();
        // if ($this->input->post('keyword')) {
        //     $data['petik'] = $this->Petik_model->cariDataPetik();
        // }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('petik/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Data Alumni Petik';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('ttl', 'Tempat dan Tanggal Lahir', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('perusahaan', 'Perusahaan', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
        $this->form_validation->set_rules('mulai', 'Mulai', 'required');
        $this->form_validation->set_rules('selesai', 'Selesai', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('petik/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Petik_model->tambahDataPetik();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('petik');
        }
    }

}
