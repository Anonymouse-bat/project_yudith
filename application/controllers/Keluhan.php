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
        logout_paksa();
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

            $config['upload_path']          = './uploads/news_image/';
            $config['allowed_types']        = 'jpg|jpeg|png';
            $config['max_size']             = 5120;
            $config['file_name']            = 'News-' . indo_date(date('Y-m-d')) . '-' . substr(md5(rand()), 0, 10);

            $this->load->library('upload', $config);

            if (@$_FILES['news_image']['name'] != NULL) {
                if ($this->upload->do_upload('news_image')) {

                    $post['news_image']             = $this->upload->data('file_name');

                    if ($this->fungsi->user_login()->level == 1) {
                        $this->Keluhan_m->add_admin($post);
                    } else {
                        $this->Keluhan_m->add($post);
                    }

                    if ($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Success!</strong> Data berhasil disimpan</div>');
                        redirect('Keluhan');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger"><strong>Error!</strong> Data gagal disimpan, Harap cek type file image dan size</div>');
                    $this->template->load('v_template', 'master/keluhan/v_keluhan_add');
                }
            } else {
                $post['news_image']             = null;

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

            // Image
            $config['upload_path']          = './uploads/news_image/';
            $config['allowed_types']        = 'jpg|jpeg|png';
            $config['max_size']             = 5120;
            $config['file_name']            = 'News-' . indo_date(date('Y-m-d')) . '-' . substr(md5(rand()), 0, 10);

            $this->load->library('upload', $config);

            if (@$_FILES['news_image']['name'] != NULL) {
                if ($this->upload->do_upload('news_image')) {

                    $keluhan = $this->Keluhan_m->get($post['keluhan_id'])->row();

                    if ($keluhan->news_image != NULL) {
                        $target_file = './uploads/news_image/' . $keluhan->news_image;
                        unlink($target_file);
                    }


                    $post['news_image'] = $this->upload->data('file_name');

                    $this->Keluhan_m->edit($post);

                    if ($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Success!</strong> Data berhasil disimpan</div>');
                        redirect('Keluhan');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger"><strong>Error!</strong> Data gagal disimpan, Harap cek type file image dan size</div>');
                    $this->template->load('v_template', 'master/keluhan/v_keluhan_add');
                }
            } else {
                $post['news_image'] = null;

                $this->Keluhan_m->edit($post);

                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Success!</strong> Data berhasil disimpan</div>');
                    redirect('Keluhan');
                }
            }
            // End Image
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
        $row = $this->Keluhan_m->get($id)->row();

        if ($get == 1) {
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger"><strong>Error!</strong> Data gagal dihapus, Harap hubungi admin untuk menghapus data ini </div>');
                redirect('Keluhan');
            }
        } else {

            if ($row->news_image != NULL) {
                $target_file = './uploads/news_image/' . $row->news_image;
                unlink($target_file);
            }

            $this->Keluhan_m->del($id);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger"><strong>Success!</strong> Data berhasil dihapus </div>');
                redirect('Keluhan');
            }
        }
    }
}
