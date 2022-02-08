<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_daftar');
    }


    public function index()
    {
        $data = [
            'kode' => $this->M_daftar->createCode(),
            'propinsi' => $this->M_daftar->get_provinsi()
        ];

        $this->form_validation->set_rules(
            'nisn',
            'NISN',
            'trim|required|min_length[10]|is_unique[daftar.nisn]',
            [
                'required' => 'NISN Wajib Diisi',
                'min_length' => 'NISN Minimal 10 Karakter',
                'is_unique' => 'NISN Sudah Terdaftar, Silahkan Login!!'
            ]
        );



        if ($this->form_validation->run() == FALSE) {
            $this->load->view('home/daftar', $data,  FALSE);
        } else {
            $this->M_daftar->insert();
            $this->session->set_flashdata(
                'pesan',
                '<div class="jumbotron">
                            <h1 class="display-4">Selamat!!  </h1>
                                <p class="lead"><strong>Kamu Diterima Sebagai Siswa Baru di SMP, silahkan Login Untuk Mencek Data Yang di Input dan Mencetak Formulir Pendaftaran</p></strong>
                                <hr class="my-4">
                                <p><strong class="text-danger">Silahkan Lengkapi Berkas Yang Diminta dan Diserahkan Kepada Panitia PPDB SMP</p></strong>
                            </div>'
            );

            redirect(base_url('daftar/daftar_berhasil'), 'refresh');
        }
    }

    // public function tambah()
    // {
    //     $this->M_daftar->insert();
    //     $this->session->set_flashdata(
    //         'pesan',
    //         '<div class="jumbotron">
    //             <h1 class="display-4">Selamat!!  </h1>
    //                 <p class="lead"><strong>Kamu Diterima Sebagai Siswa Baru di SMP, silahkan Login Untuk Mencek Data Yang di Input dan Mencetak Formulir Pendaftaran</p></strong>
    //                 <hr class="my-4">
    //                 <p><strong class="text-danger">Silahkan Lengkapi Berkas Yang Diminta dan Diserahkan Kepada Panitia PPDB SMP</p></strong>
    //             </div>'
    //     );

    //     redirect(base_url('daftar/daftar_berhasil'), 'refresh');
    // }




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










    public function daftar_berhasil()
    {
        $this->load->view('home/daftar_berhasil', FALSE);
    }
}

/* End of file Daftar.php */
