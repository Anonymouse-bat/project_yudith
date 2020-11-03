<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Bangkok");

class Waiting_approve_m extends CI_Model
{
    public function get($id = NULL)
    {
        $this->db->select('*, keluhan.created as created_news, keluhan.updated as updated_news');
        $this->db->from('keluhan');
        if ($id != NULL) {
            $this->db->where('keluhan_id', $id);
        }
        $this->db->join('user', 'user.user_id = keluhan.user_id');
        $this->db->where('keluhan.status =', 0);
        $this->db->where('keluhan.is_deleted =', null);
        $query = $this->db->get();

        return $query;
    }

    public function get_news($id = NULL)
    {
        $this->db->select('*, keluhan.created as created_news, keluhan.updated as updated_news');
        $this->db->from('keluhan');
        if ($id != NULL) {
            $this->db->where('date_news =', $id);
            $this->db->where('status =', 0);
        }
        $this->db->join('user', 'user.user_id = keluhan.user_id');
        $this->db->where('keluhan.status =', 0);
        $this->db->order_by('created_news', 'DESC');
        $query = $this->db->get();

        return $query;
    }

    public function edit($post)
    {
        $params['news_head']            = $post['news_head'];
        $params['messsage_content']     = $post['messsage_content'];
        $params['date_approve']         = date('Y-m-d');
        $params['date_time_approve']    = date('Y-m-d H:i:s');
        $params['approve_by']           = $this->session->userdata('user_id');
        $params['status']               = 1;

        if ($post['news_image'] != NULL) {
            $params['news_image']           = $post['news_image'];
        }

        $this->db->where('keluhan_id', $post['keluhan_id']);
        $this->db->update('keluhan', $params);
    }

    public function del($post)
    {
        $params['rejected_by']           = $this->session->userdata('user_id');
        $params['noted']                 = $post['noted'];
        $params['is_deleted']            = 1;
        $params['status']                = 2;
        $params['date_rejected']         = date('Y-m-d H:i:s');

        $this->db->where('keluhan_id', $post['keluhan_id']);
        $this->db->update('keluhan', $params);
    }
}
