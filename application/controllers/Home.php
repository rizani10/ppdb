<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'PPDB-SMPN 2 Padang Batung'
        ];
        $this->load->view('templates/header', $data, FALSE);
        $this->load->view('home/index', FALSE);
        $this->load->view('templates/footer', FALSE);
        
    }

    public  function login()
    {
        $this->load->view('home/login_siswa', FALSE);
        
    }
}

/* End of file Home.php */
