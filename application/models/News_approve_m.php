<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Bangkok");

class News_approve_m extends CI_Model
{
    public function get($id = NULL)
    {
        $this->db->select('*, keluhan.created as created_news, keluhan.updated as updated_news');
        $this->db->from('keluhan');
        if ($id != NULL) {
            $this->db->where('keluhan_id', $id);
        }
        $this->db->join('user', 'user.user_id = keluhan.user_id');
        $this->db->where('keluhan.status =', 1);
        $this->db->order_by('keluhan.created', 'DESC');
        $query = $this->db->get();

        return $query;
    }

    public function get_news($id = NULL)
    {
        $this->db->select('*, keluhan.created as created_news, keluhan.updated as updated_news');
        $this->db->from('keluhan');
        if ($id != NULL) {
            $this->db->where('date_news =', $id);
            $this->db->where('status =', 1);
        }
        $this->db->join('user', 'user.user_id = keluhan.user_id');
        $this->db->where('keluhan.status =', 1);
        $this->db->order_by('keluhan.created', 'DESC');
        $query = $this->db->get();

        return $query;
    }

    public function del($id)
    {
        $params['rejected_by']           = $this->session->userdata('user_id');
        $params['is_deleted']            = 1;
        $params['status']                = 0;

        $this->db->where('keluhan_id', $id);
        $this->db->update('keluhan', $params);
    }
}
