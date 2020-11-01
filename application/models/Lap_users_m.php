<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Bangkok");

class Lap_users_m extends CI_Model
{

    public function get_user_data()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('wilayah_provinsi', 'wilayah_provinsi.id_provinsi = user.id_provinsi ');
        $query = $this->db->get();
        return $query;
    }


    public function get_provinsi($id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('wilayah_provinsi', 'wilayah_provinsi.id_provinsi = user.id_provinsi ');
        $this->db->where('user.id_provinsi', $id);
        $query = $this->db->get();
        return $query;
    }

    public function get_provinsi_and_date($post)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('wilayah_provinsi', 'wilayah_provinsi.id_provinsi = user.id_provinsi ');
        $this->db->where('user.date_user >=', $post['start_date']);
        $this->db->where('user.date_user <=', $post['end_date']);
        $this->db->where('user.id_provinsi', $post['id_provinsi']);
        $query = $this->db->get();
        return $query;
    }

    public function get_all_data($post)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('wilayah_provinsi', 'wilayah_provinsi.id_provinsi = user.id_provinsi ');
        $this->db->where('user.date_user >=', $post['start_date']);
        $this->db->where('user.date_user <=', $post['end_date']);
        $query = $this->db->get();
        return $query;
    }
}
