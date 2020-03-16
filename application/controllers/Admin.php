<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function role()
    {
        $data['title'] = 'Role';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/footer');
    }
    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }


    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Akses berubah </div>');
    }

    public function tabel()
    {
        $data['title'] = 'Tabel Salery';


        $data['menu'] = $this->db->get('data',)->result_array();

        // $data['menu'] = $this->db->get_where('data', ['nama' => $this->session->userdata('nama')])->row_array();



        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('posisi', 'Posisi', 'required');
        $this->form_validation->set_rules('kantor', 'Kantor', 'required');
        $this->form_validation->set_rules('usia', 'Usia', 'required');
        $this->form_validation->set_rules('mulai_tanggal', 'Mulai Tanggal', 'required');
        $this->form_validation->set_rules('gaji', 'Gaji', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/tabel', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'posisi' => $this->input->post('posisi'),
                'kantor' => $this->input->post('kantor'),
                'usia' => $this->input->post('usia'),
                'mulai_tanggal' => $this->input->post('mulai_tanggal'),
                'gaji' => $this->input->post('gaji')
            ];

            $this->db->insert('data', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data baru berhasil ditambah</div>');
            redirect('admin/tabel');
        }
    }

    public function delet($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('data');


        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data berhasil dihapus</div>');
        redirect('admin/tabel');
    }

    public function detail()
    {

        $nama = $this->input->post('nama');


        $data['menu'] = $this->db->get_where('data', ['name' => $nama])->row_array();


        // $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        // $this->load->view('templates/topbar', $data);
        // $this->load->view('admin/detail', $data);
        // $this->load->view('templates/footer');
    }
}