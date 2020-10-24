<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rejected extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->library('form_validation');
        $this->load->model('Rejected_m');
    }

    public function index()
    {
        $data['row'] = $this->Rejected_m->get()->result();
        $this->template->load('v_template', 'master/rejected/v_rejected', $data);
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('news_head', 'Kepala Berita', 'trim|required');
        $this->form_validation->set_rules('messsage_content', 'Isi Berita', 'required|min_length[250]');

        if ($this->form_validation->run() == FALSE) {

            $data['row'] = $this->Waiting_approve_m->get($id)->row();
            $this->template->load('v_template', 'master/rejected/v_rejected_edit', $data);
        } else {
            $post = $this->input->post(NULL, TRUE);

            $this->Waiting_approve_m->edit($post);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Success!</strong> Data berhasil disimpan</div>');
                redirect('Waiting_approve');
            }
        }
    }
}
