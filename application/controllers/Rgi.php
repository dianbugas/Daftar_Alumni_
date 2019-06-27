<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rgi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rgi_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Daftar Alumni RGI';
        $data['rgi'] = $this->Rgi_model->getAllRgi();
        // if ($this->input->post('keyword')) {
        //     $data['petik'] = $this->Petik_model->cariDataPetik();
        // }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('rgi/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Data Alumni RGI';

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
            $this->load->view('rgi/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Rgi_model->tambahDataRgi();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('rgi');
        }
    }
}