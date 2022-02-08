<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
    // create function add gallery
    public function aksiAddGallery()
    {

        $config['upload_path'] = './assets/img/gallery/';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size'] = '1024';
        $config['file_name'] = 'foto' . time();

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            $data = [
                'judul' => $this->input->post('judul'),
                'foto' => $this->upload->data('file_name'),
            ];

            var_dump($data);
            die;
            
        }
    }
}

/* End of file M_admin.php */
