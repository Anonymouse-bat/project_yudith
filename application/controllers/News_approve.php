<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News_approve extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('News_approve_m');
    }

    public function index()
    {
        $header = $this->uri->segment(3);
        $data['row'] = $this->News_approve_m->get_news($header)->result();
        $this->template->load('v_template', 'master/news_approve/v_news_approve', $data);
    }

    public function preview($id)
    {
        $data['row'] = $this->News_approve_m->get($id)->row();
        $this->template->load('v_template', 'master/news_approve/v_news_approve_preview', $data);
    }
}
