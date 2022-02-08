<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('nisn')) {

            redirect('auth', 'refresh');
        }

        $this->load->model('M_siswa');
        $this->load->model('M_daftar');
    }


    public function index()
    {
        $data = [
            'title' => 'Dashboard Siswa',
            'jumlah' => $this->M_siswa->jumlah_total(),
            'laki' => $this->M_siswa->jumlah_laki(),
            'pr' => $this->M_siswa->jumlah_pr(),
            'user'   => $this->db->get_where(
                'daftar',
                [
                    'nisn' => $this->session->userdata('nisn')
                ]
            )->row_array()  //session
        ];

        $this->load->view('templates/admin_header', $data, FALSE);
        $this->load->view('templates/sidebar_siswa', $data, FALSE);
        $this->load->view('templates/navbar', $data, FALSE);
        $this->load->view('siswa/index', $data, FALSE);
        $this->load->view('templates/admin_footer', FALSE);
    }

    public function data()
    {
        $data = [
            'title' => 'Data Siswa',
            'user'   => $this->db->get_where(
                'daftar',
                [
                    'nisn' => $this->session->userdata('nisn')
                ]
            )->row_array()  //session
        ];

        $this->load->view('templates/admin_header', $data, FALSE);
        $this->load->view('templates/sidebar_siswa', $data, FALSE);
        $this->load->view('templates/navbar', FALSE);
        $this->load->view('siswa/data', $data, FALSE);
        $this->load->view('templates/admin_footer', FALSE);
    }

    public function detail($id_daftar)
    {
        $data = [
            'title' => 'Data Siswa',
            'user'   => $this->db->get_where(
                'daftar',
                [
                    'nisn' => $this->session->userdata('nisn')
                ]
            )->row_array(),  //session
            'user' => $this->M_siswa->detail($id_daftar),
            'propinsi' => $this->M_siswa->getPropinsi($id_daftar),
            'kab' => $this->M_siswa->getKabupaten($id_daftar),
            'kec' => $this->M_siswa->getKecamatan($id_daftar)
        ];

        $this->load->view('templates/admin_header', $data, FALSE);
        $this->load->view('templates/sidebar_siswa', $data, FALSE);
        $this->load->view('templates/navbar', FALSE);
        $this->load->view('siswa/detail', $data, FALSE);
        $this->load->view('templates/admin_footer', FALSE);
    }

    public function edit($id_daftar)
    {
        $data = [
            'title' => 'Data Siswa',
            'user'   => $this->db->get_where(
                'daftar',
                [
                    'nisn' => $this->session->userdata('nisn')
                ]
            )->row_array(),  //session
            'prop' => $this->M_daftar->get_provinsi(),
            'user' => $this->M_siswa->detail($id_daftar),
            'propinsi' => $this->M_siswa->getPropinsi($id_daftar),
            'kab' => $this->M_siswa->getKabupaten($id_daftar),
            'kec' => $this->M_siswa->getKecamatan($id_daftar)
        ];

        $this->form_validation->set_rules('nisn', 'NISN', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/admin_header', $data, FALSE);
            $this->load->view('templates/sidebar_siswa', $data, FALSE);
            $this->load->view('templates/navbar', FALSE);
            $this->load->view('siswa/edit', $data, FALSE);
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

            redirect('siswa/data', 'refresh');
        }
    }


    //request data kabupaten berdasarkan id provinsi yang dipilih
    function get_kabupaten()
    {
        if ($this->input->post('provinsi_id')) {
            echo $this->M_daftar->get_kabupaten($this->input->post('provinsi_id'));
        }
    }


    //request data kecamatan berdasarkan id kabupaten yang dipilih
    function get_kecamatan()
    {
        if ($this->input->post('kabupaten_id')) {
            echo $this->M_daftar->get_kecamatan($this->input->post('kabupaten_id'));
        }
    }




    public function logout()
    {

        $this->session->unset_userdata('nisn');

        redirect('auth', 'refresh');
    }
}

/* End of file Siswa.php */
