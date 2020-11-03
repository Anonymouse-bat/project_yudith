<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Waiting_approve extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->library('form_validation');
        $this->load->model('Waiting_approve_m');
        check_admin();
        logout_paksa();
    }

    public function index()
    {
        $header = $this->uri->segment(3);

        $data['row'] = $this->Waiting_approve_m->get_news($header)->result();
        $this->template->load('v_template', 'master/waiting_approve/v_waiting_approve', $data);
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('news_head', 'Kepala Berita', 'trim|required');
        $this->form_validation->set_rules('messsage_content', 'Isi Berita', 'required|min_length[250]');

        if ($this->form_validation->run() == FALSE) {

            $data['row'] = $this->Waiting_approve_m->get($id)->row();
            $this->template->load('v_template', 'master/waiting_approve/v_waiting_approve_edit', $data);
        } else {

            $post = $this->input->post(NULL, TRUE);

            // Image
            $config['upload_path']          = './uploads/news_image/';
            $config['allowed_types']        = 'jpg|jpeg|png';
            $config['max_size']             = 5120;
            $config['file_name']            = 'News-' . indo_date(date('Y-m-d')) . '-' . substr(md5(rand()), 0, 10);

            $this->load->library('upload', $config);

            if (@$_FILES['news_image']['name'] != NULL) {
                if ($this->upload->do_upload('news_image')) {

                    $keluhan = $this->Waiting_approve_m->get($post['keluhan_id'])->row();

                    if ($keluhan->news_image != NULL) {
                        $target_file = './uploads/news_image/' . $keluhan->news_image;
                        unlink($target_file);
                    }


                    $post['news_image'] = $this->upload->data('file_name');

                    $this->Waiting_approve_m->edit($post);

                    if ($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Success!</strong> Data berhasil disimpan</div>');
                        redirect('Waiting_approve');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger"><strong>Error!</strong> Data gagal disimpan, Harap cek type file image dan size</div>');
                    $this->template->load('v_template', 'master/waiting_approve/v_waiting_approve_edit');
                }
            } else {
                $post['news_image'] = null;

                $this->Waiting_approve_m->edit($post);

                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Success!</strong> Data berhasil disimpan</div>');
                    redirect('Waiting_approve');
                }
            }
            // End Image
        }
    }

    public function del()
    {
        $post = $this->input->post(NULL, TRUE);

        $this->Waiting_approve_m->del($post);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger"><strong>Success!</strong> Data berhasil dihapus </div>');
            redirect('Waiting_approve');
        }
    }

    public function preview($id)
    {
        $data['row'] = $this->Waiting_approve_m->get($id)->row();
        $this->template->load('v_template', 'master/waiting_approve/v_waiting_approve_preview', $data);
    }
}
