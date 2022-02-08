<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {

            redirect('auth/admin', 'refresh');
        }
        $this->load->model('M_siswa');
        $this->load->model('M_daftar');
        $this->load->model('M_admin');
        
    }


    public function index()
    {
        $data = [
            'title' => 'Dashboard Admin',
            'jumlah' => $this->M_siswa->jumlah_total(),
            'laki' => $this->M_siswa->jumlah_laki(),
            'pr' => $this->M_siswa->jumlah_pr(),
            'user' => $this->db->get_where(
                'user',
                ['email' => $this->session->userdata('email')]
            )->row_array(), //session
        ];

        $this->load->view('templates/admin_header', $data, FALSE);
        $this->load->view('templates/sidebar_admin', $data, FALSE);
        $this->load->view('templates/navbar', FALSE);
        $this->load->view('admin/index', $data, FALSE);
        $this->load->view('templates/admin_footer', FALSE);
    }

    function datasiswa()
    {
        $data = [
            'title' => 'Daftar Siswa',
            'user' => $this->db->get_where(
                'user',
                ['email' => $this->session->userdata('email')]
            )->row_array(), //session
            'siswa' => $this->M_siswa->getAll()
        ];

        $this->load->view('templates/admin_header', $data, FALSE);
        $this->load->view('templates/sidebar_admin', $data, FALSE);
        $this->load->view('templates/navbar', FALSE);
        $this->load->view('admin/data_siswa', $data, FALSE);
        $this->load->view('templates/admin_footer', FALSE);
    }

    function edit($id_daftar)
    {
        $data = [
            'title' => 'Edit Data Siswa',
            'user' => $this->db->get_where(
                'user',
                ['email' => $this->session->userdata('email')]
            )->row_array(), //session
            'prop' => $this->M_daftar->get_provinsi(),
            'siswa' => $this->M_siswa->detail($id_daftar),
            'propinsi' => $this->M_siswa->getPropinsi($id_daftar),
            'kab' => $this->M_siswa->getKabupaten($id_daftar),
            'kec' => $this->M_siswa->getKecamatan($id_daftar)
        ];

        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/admin_header', $data, FALSE);
            $this->load->view('templates/sidebar_admin', $data, FALSE);
            $this->load->view('templates/navbar', FALSE);
            $this->load->view('admin/edit_siswa', $data, FALSE);
            $this->load->view('templates/admin_footer', FALSE);
        } else {
            $this->M_siswa->aksi_edit();
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Data Berhasil Diedit</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>'
            );

            redirect('admin/datasiswa', 'refresh');
        }
    }


    // create function delete
    function hapus($id_daftar)
    {
        $this->db->delete('daftar', ['id_daftar' => $id_daftar]);
        echo"berhasil";
        redirect('admin/datasiswa', 'refresh');
        
    }


    // create function detail
    function detail($id_daftar)
    {
        $data = [
            'title' => 'Detail Data Siswa',
            'user' => $this->db->get_where(
                'user',
                ['email' => $this->session->userdata('email')]
            )->row_array(), //session
            'siswa' => $this->M_siswa->detail($id_daftar),
            'propinsi' => $this->M_siswa->getPropinsi($id_daftar),
            'kab' => $this->M_siswa->getKabupaten($id_daftar),
            'kec' => $this->M_siswa->getKecamatan($id_daftar)
        ];

        $this->load->view('templates/admin_header', $data, FALSE);
        $this->load->view('templates/sidebar_admin', $data, FALSE);
        $this->load->view('templates/navbar', FALSE);
        $this->load->view('admin/detail_siswa', $data, FALSE);
        $this->load->view('templates/admin_footer', FALSE);
    }

    // create function gallery
    public function gallery()
    {
        $data = [
            'title' => 'Data Gallery',
            'user' => $this->db->get_where(
                'user',
                ['email' => $this->session->userdata('email')]
            )->row_array(), //session
        ];

        $this->load->view('templates/admin_header', $data, FALSE);
        $this->load->view('templates/sidebar_admin', $data, FALSE);
        $this->load->view('templates/navbar', FALSE);
        $this->load->view('admin/gallery', $data, FALSE);
        $this->load->view('templates/admin_footer', FALSE);
    }

    // create function add gallery
    public function add()
    {
        $data = [
            'title' => 'Data Gallery',
            'title2'   => 'Tambah Data Gallery',
            'user' => $this->db->get_where(
                'user',
                ['email' => $this->session->userdata('email')]
            )->row_array(), //session
        ];



        
            $this->load->view('templates/admin_header', $data, FALSE);
            $this->load->view('templates/sidebar_admin', $data, FALSE);
            $this->load->view('templates/navbar', FALSE);
            $this->load->view('admin/add_gallery', $data, FALSE);
            $this->load->view('templates/admin_footer', FALSE);
        
    }


    function logout()
    {

        $this->session->unset_userdata('email');

        redirect('auth/admin', 'refresh');
    }
}

/* End of file Admin.php */
