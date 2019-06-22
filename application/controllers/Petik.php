<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petik extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model('Petik_model');
    //     $this->load->library('form_validation');
    // }

    public function index()
    {
        $data['title'] = 'Daftar Alumni Petik';
        //$data['petik'] = $this->Petik_model->getAllPetik();
        // if ($this->input->post('keyword')) {
        //     $data['petik'] = $this->Petik_model->cariDataPetik();
        // }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('petik/index', $data);
        $this->load->view('templates/footer');
    }
}
