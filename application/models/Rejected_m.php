<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Bangkok");

class Rejected_m extends CI_Model
{
    public function get($id = NULL)
    {
        $this->db->select('*, keluhan.created as created_news, keluhan.updated as updated_news');
        $this->db->from('keluhan');
        if ($id != NULL) {
            $this->db->where('keluhan_id', $id);
        }
        $this->db->join('user', 'user.user_id = keluhan.user_id');
        $this->db->where('keluhan.is_deleted =', 1);
        $this->db->order_by('keluhan.date_rejected', 'DESC');
        $query = $this->db->get();

        return $query;
    }

    public function edit($post)
    {
        $params['news_head']            = $post['news_head'];
        $params['messsage_content']     = $post['messsage_content'];
        $params['date_time_approve']    = date('Y-m-d H:i:s');
        $params['date_approve']         = date('Y-m-d');
        $params['approve_by']           = $this->session->userdata('user_id');
        $params['status']               = 1;
        $params['is_deleted']           = NULL;
        $params['date_rejected']        = NULL;
        $params['rejected_by']          = NULL;


        if ($post['news_image'] != NULL) {
            $params['news_image']           = $post['news_image'];
        }


        $this->db->where('keluhan_id', $post['keluhan_id']);
        $this->db->update('keluhan', $params);
    }
}
