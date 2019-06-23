<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rgi_model extends CI_Model
{
    public function getAllRgi()
    {
        return $this->db->get('rgi')->result_array();
    }
}