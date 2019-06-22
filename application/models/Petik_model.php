<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petik_model extends CI_Model
{
    public function getAllPetik()
    {
        return $this->db->get('petik')->result_array();
    }
}