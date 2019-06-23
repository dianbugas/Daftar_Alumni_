<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Programmer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Programmer_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Daftar Alumni Sekolah Programmer';
        $data['programmer'] = $this->Programmer_model->getAllProgrammer();
        // if ($this->input->post('keyword')) {
        //     $data['petik'] = $this->Petik_model->cariDataPetik();
        // }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('programmer/index', $data);
        $this->load->view('templates/footer');
    }
}
