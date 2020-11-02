<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Bangkok");

class users_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('user');
        if ($id != NULL) {
            $this->db->where('user_id', $id);
        }
        $this->db->join('wilayah_provinsi', 'wilayah_provinsi.id_provinsi = user.id_provinsi');
        $query = $this->db->get();
        return $query;
    }

    public function get_header($id = null)
    {
        $this->db->select('*');
        $this->db->from('user');
        if ($id != NULL) {
            $this->db->where('date_user =', $id);
            $this->db->where('is_active =', 0);
        }
        $query = $this->db->get();
        return $query;
    }

    public function edit($post)
    {
        $params['nama_lengkap']         = $post['nama_lengkap'];
        $params['no_tlp']               = $post['no_tlp'];
        $params['alamat']               = $post['alamat'];
        $params['approve_by']           = $this->fungsi->user_login()->nama_lengkap;
        $params['updated']              = date('Y-m-d H:i:s');

        if ($post['password'] != NULL) {
            $params['password']     = password_hash($post['password'], PASSWORD_DEFAULT);
        }

        if ($post['is_active'] != NULL) {
            $params['is_active']    = $post['is_active'];
        }

        if ($post['level'] != NULL) {
            $params['level']        = $post['level'];
        }



        $this->db->where('user_id', $post['user_id']);
        $this->db->update('user', $params);
    }

    public function delet($post)
    {
        $this->db->where('user_id', $post);
        $this->db->delete('user');
    }
}
