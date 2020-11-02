<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lap_users extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(['Auth_m', 'Lap_users_m']);
        check_not_login();
        check_admin_users();
    }

    public function index()
    {
        $provinsi       = $this->Auth_m->get_provinsi()->result();
        $get_user_data  = $this->Lap_users_m->get_user_data()->result();

        $data = [
            'provinsi' => $provinsi,
            'get_user_data' => $get_user_data
        ];

        $this->template->load('v_template', 'laporan/laporan_data_user/v_lap_users', $data);
    }

    public function get_data()
    {
        $post                    = $this->input->post(NULL, TRUE);

        $get_user_data           = $this->Lap_users_m->get_user_data()->result();
        $provinsi                = $this->Lap_users_m->get_provinsi($post['id_provinsi'])->result();
        $get_all_data            = $this->Lap_users_m->get_all_data($post)->result();
        $get_provinsi_and_date   = $this->Lap_users_m->get_provinsi_and_date($post)->result();


        $tgl        = date('Y-m-d');
        $show = [
            'get_all_data' => $get_all_data,
            'provinsi' => $provinsi,
            'get_provinsi_and_date' => $get_provinsi_and_date,
            'get_user_data' => $get_user_data
        ];
        if ($post['start_date'] == NULL and $post['id_provinsi'] == NULL) {

            $html = $this->load->view('laporan/laporan_data_user/v_result_get_user_data', $show, true);
            $this->fungsi->PdfGenerator($html, 'Lap_penjualan_' . $tgl, 'A4', 'landscape');
        } else {

            if ($post['start_date'] != NULL) {
                if ($post['id_provinsi'] != NULL) {

                    $html = $this->load->view('laporan/laporan_data_user/v_result_get_provinsi_and_date', $show, true);
                    $this->fungsi->PdfGenerator($html, 'Lap_penjualan_' . $tgl, 'A4', 'landscape');
                } else {

                    $html = $this->load->view('laporan/laporan_data_user/v_result_all_data_user', $show, true);
                    $this->fungsi->PdfGenerator($html, 'Lap_penjualan_' . $tgl, 'A4', 'landscape');
                }
            } else {

                $html = $this->load->view('laporan/laporan_data_user/v_result_data_user_provinsi', $show, true);
                $this->fungsi->PdfGenerator($html, 'Lap_penjualan_' . $tgl, 'A4', 'landscape');
            }
        }
    }
}
