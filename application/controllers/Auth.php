<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_auth');
    }


    public function index()
    {
        $data = [
            'title' => 'PPDB-Login Siswa'
        ];

        $this->form_validation->set_rules('nisn', 'NISN', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/login_header', $data, FALSE);
            $this->load->view('auth/login_siswa', FALSE);
            $this->load->view('templates/login_footer', FALSE);
        } else {
            $this->M_auth->login_siswa();
        }
    }

    function admin()
    {
        $data = [
            'title' => 'PPDB-Login Admin'
        ];

        $this->form_validation->set_rules('email', 'Email', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/login_header', $data, FALSE);
            $this->load->view('auth/login_admin', FALSE);
            $this->load->view('templates/login_footer', FALSE);
        } else {
            $this->M_auth->login_admin();
        }
    }
}

/* End of file Auth.php */
