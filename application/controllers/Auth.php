<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Home';
        $this->load->view('templates/header');
        $this->load->view('templates/footer');
    }
}
