<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Bangkok");

class Keluhan_m extends CI_Model
{
    public function get($id = NULL)
    {
        $this->db->select('*, keluhan.created as created_news, keluhan.updated as updated_news, keluhan.is_deleted as is_deleted_keluhan');
        $this->db->from('keluhan');
        if ($id != NULL) {
            $this->db->where('keluhan_id', $id);
        }
        $this->db->join('user', 'user.user_id = keluhan.user_id');
        $this->db->where('keluhan.user_id =', $this->session->userdata('user_id'));
        $this->db->order_by('created_news', 'DESC');
        $query = $this->db->get();

        return $query;
    }


    public function add($post)
    {
        $uniqid = uniqid();

        $params['keluhan_id']           = date('YmdHis') . '' . $uniqid . '-' . $this->session->userdata('user_id');
        $params['news_head']            = $post['news_head'];
        $params['news_image']           = $post['news_image'];
        $params['messsage_content']     = $post['messsage_content'];
        $params['user_id']              = $this->session->userdata('user_id');
        $params['status']               = 0;
        $params['date_news']            = date('Y-m-d');

        $this->db->insert('keluhan', $params);
    }

    public function add_admin($post)
    {
        $uniqid = uniqid();

        $params['keluhan_id']           = date('YmdHis') . '' . $uniqid . '-' . $this->session->userdata('user_id');
        $params['news_head']            = $post['news_head'];
        $params['news_image']           = $post['news_image'];
        $params['messsage_content']     = $post['messsage_content'];
        $params['user_id']              = $this->session->userdata('user_id');
        $params['status']               = 1;
        $params['approve_by']           = $this->session->userdata('user_id');
        $params['date_news']            = date('Y-m-d');

        $this->db->insert('keluhan', $params);
    }

    public function edit($post)
    {
        $params['news_head']            = $post['news_head'];
        $params['messsage_content']     = $post['messsage_content'];
        $params['updated']              = date('Y-m-d H:i:s');

        if ($post['news_image'] != NULL) {
            $params['news_image']           = $post['news_image'];
        }

        $this->db->where('keluhan_id', $post['keluhan_id']);
        $this->db->update('keluhan', $params);
    }

    public function edit_revisi($post)
    {
        $params['news_head']            = $post['news_head'];
        $params['messsage_content']     = $post['messsage_content'];
        $params['updated']              = date('Y-m-d H:i:s');

        if ($post['news_image'] != NULL) {
            $params['news_image']           = $post['news_image'];
        }
        $params['status']                = 3;

        $this->db->where('keluhan_id', $post['keluhan_id']);
        $this->db->update('keluhan', $params);
    }


    public function del($id)
    {
        $this->db->where('keluhan_id', $id);
        $this->db->delete('keluhan');
    }
}
