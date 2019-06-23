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
}