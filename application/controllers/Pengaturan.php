<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaturan extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Android';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $data['pengaturan'] = $this->db->get('user_menu')->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pengaturan/index', $data);
        $this->load->view('templates/footer');
    }
}