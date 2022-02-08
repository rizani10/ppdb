<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_auth extends CI_Model
{

    public function login_siswa()
    {
        $nisn = $this->input->post('nisn');
        $tanggal_lahir = $this->input->post('tanggal_lahir');

        // ambil data user/siswa yang daftar
        $user = $this->db->get_where('daftar', ['nisn' => $nisn])->row_array();

        // cek usernya
        if ($user) {
            if ($tanggal_lahir === $user['tanggal_lahir']) {

                $data = [
                    'nisn' => $user['nisn']
                ];

                $this->session->set_userdata($data);

                redirect('siswa', 'refresh');
            } else {
                $this->session->set_flashdata(
                    'pesan',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Tanggal Lahir Salah</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
                redirect('auth');
            }
        } else {
            // user tidak ada
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>NISN Tidak Terdaftar</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('auth');
        }
    }

    public function login_admin()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $admin = $this->db->get_where('user', ['email'  => $email])->row_array();

        if ($admin) {
            if (password_verify($password, $admin['password'])) {
                // buat session
                $data = [
                    'email' => $admin['email']
                ];

                $this->session->set_userdata($data);
                
                redirect('admin','refresh');
                
            } else {
                $this->session->set_flashdata(
                    'pesan',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Password Salah Silahkan Cek Kembali</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
                );
                redirect('auth/admin', 'refresh');
            }
        } else {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Email Tidak Terdaftar</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );

            redirect('auth/admin', 'refresh');
        }
    }
}

/* End of file M_auth.php */
