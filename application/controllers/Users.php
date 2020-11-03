<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        logout_paksa();
        $this->load->library('form_validation');
        $this->load->model('Users_m');
    }

    public function index()
    {
        $this->template->load('v_template', 'users/v_users_data');
    }

    public function v_users_data_member()
    {
        $this->template->load('v_template', 'users/v_users_data_member');
    }

    public function v_users_admin()
    {
        check_admin();

        $header = $this->uri->segment(3);

        $data['row']    = $this->Users_m->get_header($header)->result();
        $this->template->load('v_template', 'users/v_users_admin', $data);
    }

    public function edit()
    {
        $post = $this->input->post(NULL, TRUE);
        // Image
        $config['upload_path']          = './uploads/ktp_user/';
        $config['allowed_types']        = 'jpg|jpeg|png';
        $config['max_size']             = 2048;
        $config['file_name']            = 'KTP-' . indo_date(date('Y-m-d')) . '-' . substr(md5(rand()), 0, 10);

        $this->load->library('upload', $config);

        if (@$_FILES['foto_ktp']['name'] != NULL) {

            if ($this->upload->do_upload('foto_ktp')) {

                $keluhan = $this->Users_m->get($post['user_id'])->row();

                if ($keluhan->foto_ktp != NULL) {
                    $target_file = './uploads/foto_ktp/' . $keluhan->foto_ktp;
                    unlink($target_file);
                }

                $post['foto_ktp'] = $this->upload->data('file_name');

                $this->Users_m->edit($post);

                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Success!</strong> Data berhasil disimpan</div>');
                    redirect('Users/v_users_data_member');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger"><strong>Error!</strong> Data gagal disimpan, Harap cek type file image dan size</div>');
                $this->template->load('v_template', 'users/v_users_admin');
            }
        } else {
            $post['foto_ktp'] = null;

            $this->Users_m->edit($post);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Success!</strong> Data berhasil disimpan</div>');
                redirect('Users/v_users_data_member');
            }
        }
    }

    public function edit_admin($id)
    {


        $this->form_validation->set_rules(
            'nama_lengkap',
            'Nama Lengkap',
            'required|trim',
            array(
                'required'      => '%s Wajib Diisi.',
            )
        );
        $this->form_validation->set_rules(
            'no_tlp',
            'No Telephone',
            'required|min_length[9]|max_length[13]|trim|is_unique[user.no_tlp]',
            array(
                'required'      => '%s Wajib Diisi.',
                'is_unique'     => '%s Sudah Terdaftar.',
                'max_length'     => '%s Maximal 13 Digit.',
                'min_length'     => '%s Minimal 9 Digit.'
            )
        );

        $this->form_validation->set_rules(
            'alamat',
            'Alamat Rumah Saat ini',
            'required|trim',
            array(
                'required'      => '%s Wajib Diisi.',
            )
        );

        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|matches[password]|min_length[4]',
            array(
                'required'      => '%s Wajib Diisi.',
                'min_length'     => '%s Minimal 4 Digit.'
            )
        );

        $this->form_validation->set_rules(
            'retype_password',
            'Password Confirmation',
            'required|matches[password]',
            array(
                'required'      => '%s Wajib Diisi.',
                'min_length'     => '%s Minimal 4 Digit.'
            )
        );

        $this->form_validation->set_rules(
            'is_active',
            'Is Active',
            'trim|required',
            array(
                'required'      => '%s Wajib Diisi.',
            )
        );
        $this->form_validation->set_rules(
            'level',
            'Level',
            'trim|required',
            array(
                'required'      => '%s Wajib Diisi.',
            )
        );

        if ($this->form_validation->run() == FALSE) {

            $data  = $this->Users_m->get($id)->row();
            $array = [
                'row'   => $data
            ];

            $this->template->load('v_template', 'users/v_users_edit', $array);
        } else {

            $post = $this->input->post(NULL, TRUE);
            // Image
            $config['upload_path']          = './uploads/ktp_user/';
            $config['allowed_types']        = 'jpg|jpeg|png';
            $config['max_size']             = 2048;
            $config['file_name']            = 'KTP-' . indo_date(date('Y-m-d')) . '-' . substr(md5(rand()), 0, 10);

            $this->load->library('upload', $config);

            if (@$_FILES['foto_ktp']['name'] != NULL) {

                if ($this->upload->do_upload('foto_ktp')) {

                    $keluhan = $this->Users_m->get($post['user_id'])->row();

                    if ($keluhan->foto_ktp != NULL) {
                        $target_file = './uploads/foto_ktp/' . $keluhan->foto_ktp;
                        unlink($target_file);
                    }

                    $post['foto_ktp'] = $this->upload->data('file_name');

                    $this->Users_m->edit($post);

                    if ($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Success!</strong> Data berhasil disimpan</div>');
                        redirect('Users');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger"><strong>Error!</strong> Data gagal disimpan, Harap cek type file image dan size</div>');
                    $this->template->load('v_template', 'users/v_users_admin');
                }
            } else {
                $post['foto_ktp'] = null;

                $this->Users_m->edit($post);

                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Success!</strong> Data berhasil disimpan</div>');
                    redirect('Users');
                }
            }

            // End Image
        }
    }

    public function del()
    {
        $post = $this->uri->segment(3);

        $this->Users_m->delet($post);

        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger"><strong>Error!</strong> Data tidak dapat dihapus, karena data ini suda berelasi dengan table lain</div>');
            redirect('Customers');
        }

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger"><strong>Success!</strong> Data berhasil dihapus </div>');
            redirect('Users');
        }
    }
}
