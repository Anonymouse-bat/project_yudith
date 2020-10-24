<?php
defined('BASEPATH') or exit('No direct script access allowed');

class users_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('user');
        if ($id != NULL) {
            $this->db->where('user_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function edit($post)
    {
        $params['name']         = $post['name'];
        $params['email']        = $post['email'];
        $params['alamat']       = $post['alamat'];

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
