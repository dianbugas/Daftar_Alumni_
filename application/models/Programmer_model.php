<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Programmer_model extends CI_Model
{
    public function getAllProgrammer()
    {
        return $this->db->get('programmer')->result_array();
    }
}