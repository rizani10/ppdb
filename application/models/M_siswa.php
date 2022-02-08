<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_siswa extends CI_Model
{

    public function jumlah_total()
    {
        $query = $this->db->get('daftar');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function jumlah_laki()
    {
        $query = $this->db->get_where('daftar', ['jenis_kelamin' => 'Laki-laki']);
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function jumlah_pr()
    {
        $query = $this->db->get_where('daftar', ['jenis_kelamin' => 'Perempuan']);
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function detail($id_daftar)
    {
        return $this->db->get_where('daftar', ['id_daftar' => $id_daftar])->row_array();
    }

    public function aksi_edit()
    {

        $object = [
            'no_daftar' => $this->input->post('no_daftar'),
            'nama' => htmlspecialchars($this->input->post('nama'), true),
            'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin'), true),
            'nisn' => htmlspecialchars($this->input->post('nisn'), true),
            'sekolah_asal' => htmlspecialchars($this->input->post('sekolah_asal'), true),
            'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir'), true),
            'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir'), true),
            'agama' => htmlspecialchars($this->input->post('agama'), true),
            'alamat' => htmlspecialchars($this->input->post('alamat'), true),
            'propinsi_name' => $this->input->post('propinsi_name'),
            'regencies_name' => $this->input->post('regencies_name'),
            'villages_name' => $this->input->post('villages_name'),
            'no_hp_siswa' => htmlspecialchars($this->input->post('no_hp_siswa'), true),
            'nama_ayah' => htmlspecialchars($this->input->post('nama_ayah'), true),
            'nama_ibu' => htmlspecialchars($this->input->post('nama_ibu'), true),
            'pendidikan_ayah' => htmlspecialchars($this->input->post('pendidikan_ayah'), true),
            'pendidikan_ibu' => htmlspecialchars($this->input->post('pendidikan_ibu'), true),
            'pekerjaan_ayah' => htmlspecialchars($this->input->post('pekerjaan_ayah'), true),
            'pekerjaan_ibu' => htmlspecialchars($this->input->post('pekerjaan_ibu'), true),
            'no_hp_orangtua' => htmlspecialchars($this->input->post('no_hp_orangtua'), true),

        ];

        $this->db->where('id_daftar', $this->input->post('id_daftar'));
        $this->db->update('daftar', $object);
    }

    function getPropinsi($id_daftar)
    {

        $query = "SELECT `daftar`.*, `provinces`.`name`
        FROM `daftar`
        JOIN `provinces`
        ON `daftar`.`propinsi_name` = `provinces`.`id`
        WHERE `id_daftar` = $id_daftar
        ";
        return $this->db->query($query)->row_array();
    }

    function getKabupaten($id_daftar)
    {
        $query = "SELECT `daftar`.*, `regencies`.`name`
        FROM `daftar`
        JOIN `regencies`
        ON `daftar`.`regencies_name` = `regencies`.`id`
        WHERE `id_daftar` = $id_daftar
        ";
        return $this->db->query($query)->row_array();
    }


    function getKecamatan($id_daftar)
    {
        $query = "SELECT `daftar`.*, `districts`.`name`
        FROM `daftar`
        JOIN `districts`
        ON `daftar`.`villages_name` = `districts`.`id`
        WHERE `id_daftar` = $id_daftar
        ";
        return $this->db->query($query)->row_array();
    }


    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('daftar');
        $this->db->order_by('id_daftar', 'desc');
        return $this->db->get()->result_array();
    }
}

/* End of file M_siswa.php */
