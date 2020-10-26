<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        date_default_timezone_set("Asia/Bangkok");
        $this->load->model('Auth_m');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $no_tlp      = $this->input->post('no_tlp');
        $pswd        = $this->input->post('password');

        $this->form_validation->set_rules('no_tlp', 'No Telephone', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == FALSE) {

            check_already_login();
            $this->load->view('v_login');
        } else {
            $data = $this->db->get_where('user', array('no_tlp' => $no_tlp))->row_array();

            if ($data != NULL) {
                if ($data['is_active'] == 1) {
                    if ($data['is_active'] == 3) {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger"><strong>Error!</strong> Akun anda terblokir, harap konfirmasi ke admin</div>');
                        redirect('Auth');
                    } else {
                        if (password_verify($pswd, $data['password'])) {
                            $data = [
                                'user_id'     => $data['user_id'],
                                'level'       => $data['level']
                            ];

                            $this->session->set_userdata($data);
                            redirect('Dashboard');
                        } else {
                            $this->session->set_flashdata('message', '<div class="alert alert-danger"><strong>Error!</strong> Kata sandi anda salah</div>');
                            redirect('Auth');
                        }
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger"><strong>Error!</strong> Akun anda tidak aktif, harap konfirmasi ke Admin</div>');
                    redirect('Auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger"><strong>Error!</strong> Data tidak ditemukan</div>');
                redirect('Auth');
            }
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('no_tlp', 'No Telephone', 'required|trim|is_unique[user.no_tlp]');
        $this->form_validation->set_rules('jk', 'Gander', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('id_provinsi', 'Provinsi', 'required|trim');
        $this->form_validation->set_rules('foto_ktp', 'foto_ktp', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|matches[password]|min_length[4]');
        $this->form_validation->set_rules('retype_password', 'Password Confirmation', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $data['row'] = $this->Auth_m->get_provinsi()->result();

            $this->load->view('v_register', $data);
        } else {

            $post = $this->input->post(NULL, TRUE);

            $params['nama_lengkap']         = $post['nama_lengkap'];
            $params['no_tlp']               = $post['no_tlp'];
            $params['jk']                   = $post['jk'];
            $params['alamat']               = $post['alamat'];
            $params['id_provinsi']          = $post['id_provinsi'];
            $params['foto_ktp']             = 'user.png';
            $params['password']             = password_hash($post['password'], PASSWORD_DEFAULT);
            $params['is_active']            = 0;
            $params['level']                = 2;
            $params['date_user']            = date('Y-m-d');

            $this->db->insert('user', $params);
            $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Success!</strong> Data berhasil disimpan</div>');
            redirect('Auth');
        }
    }

    public function logout()
    {
        $data = array('user_id', 'level');

        $this->session->unset_userdata($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Success!</strong> Akun anda telah logout</div>');
        redirect('Auth');
    }
}
