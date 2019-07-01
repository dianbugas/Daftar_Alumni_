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
        //config
        $config['base_url'] = 'http://localhost/CI/ybmplnkalbar/peoples/index';
        $config['total_rows'] = $this->Peoples_model->countAllPeoples();
        $config['per_page'] = 7;
        $config['num_links'] = 3;
        //styling
        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-end">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');
        //inisialisasi pagination nya bardasarkan configurasinya 
        //iniziatilaze
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['peoples'] = $this->Peoples_model->getPeoples($config['per_page'], $data['start']);

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
