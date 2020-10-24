<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_m extends CI_Model
{
    public function get_provinsi()
    {
        $this->db->select('*');
        $this->db->from('wilayah_provinsi');
        $query = $this->db->get();

        return $query;
    }
}
