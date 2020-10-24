<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keluhan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->library('form_validation');
        $this->load->model('Keluhan_m');
    }

    public function index()
    {
        $data['row'] = $this->Keluhan_m->get()->result();
        $this->template->load('v_template', 'master/keluhan/v_keluhan', $data);
    }

    public function add()
    {

        $this->form_validation->set_rules('news_head', 'Kepala Berita', 'trim|required');
        $this->form_validation->set_rules('messsage_content', 'Isi Berita', 'required|min_length[250]');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('v_template', 'master/keluhan/v_keluhan_add');
        } else {
            $post = $this->input->post(NULL, TRUE);

            if ($this->fungsi->user_login()->level == 1) {
                $this->Keluhan_m->add_admin($post);
            } else {
                $this->Keluhan_m->add($post);
            }


            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Success!</strong> Data berhasil disimpan</div>');
                redirect('Keluhan');
            }
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('news_head', 'Kepala Berita', 'trim|required');
        $this->form_validation->set_rules('messsage_content', 'Isi Berita', 'required|min_length[250]');

        if ($this->form_validation->run() == FALSE) {

            $data['row'] = $this->Keluhan_m->get($id)->row();
            $this->template->load('v_template', 'master/keluhan/v_keluhan_edit', $data);
        } else {
            $post = $this->input->post(NULL, TRUE);

            $this->Keluhan_m->edit($post);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Success!</strong> Data berhasil disimpan</div>');
                redirect('Keluhan');
            }
        }
    }

    public function preview($id)
    {
        $data['row'] = $this->Keluhan_m->get($id)->row();

        $this->template->load('v_template', 'master/keluhan/v_keluhan_preview', $data);
    }

    public function del($id)
    {
        $get = $this->Keluhan_m->get($id)->row()->status;

        if ($get == 1) {
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger"><strong>Error!</strong> Data gagal dihapus, Harap hubungi admin untuk menghapus data ini </div>');
                redirect('Keluhan');
            }
        } else {
            $this->Keluhan_m->del($id);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger"><strong>Success!</strong> Data berhasil dihapus </div>');
                redirect('Keluhan');
            }
        }
    }
}
