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

    public function edit($post)
    {
        $params['news_head']            = $post['news_head'];
        $params['news_image']           = 123;
        $params['messsage_content']     = $post['messsage_content'];
        $params['date_approve']              = date('Y-m-d H:i:s');
        $params['approve_by']           = $this->session->userdata('user_id');
        $params['status']               = 1;


        $this->db->where('keluhan_id', $post['keluhan_id']);
        $this->db->update('keluhan', $params);
    }

    public function del($id)
    {
        $params['rejected_by']           = $this->session->userdata('user_id');
        $params['is_deleted']            = 1;
        // $params['keluhan_id']            = $id;

        $this->db->where('keluhan_id', $id);
        $this->db->update('keluhan', $params);
    }
}
