<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_daftar extends CI_Model
{

    public function insert()
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

        // var_dump($object);
        // die;
        $this->db->insert('daftar', $object);
    }


    function createCode()
    {
        $this->db->select('RIGHT(daftar.no_daftar,5) as no_daftar', false);
        $this->db->order_by('no_daftar', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('daftar');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->no_daftar) + 1;
        } else {
            $kode = 1;
        }

        $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);
        $kodetampil = "SB" . $batas;
        return $kodetampil;
    }



    function get_provinsi()
    {
        $this->db->order_by('name', 'ASC');
        $query = $this->db->get('provinces');
        return $query->result();
    }

    function get_kabupaten($provinsi_id)
    {
        //ambil data kabupaten berdasarkan id provinsi yang dipilih
        $this->db->where('province_id', $provinsi_id);
        $this->db->order_by('name', 'ASC');
        $query = $this->db->get('regencies');

        $output = '<option value="">-- Pilih Kabupaten --</option>';

        //looping data
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->id . '">' . $row->name . '</option>';
        }
        //return data kabupaten
        return $output;
    }

    function get_kecamatan($kabupaten_id)
    {
        //ambil data kecamatan berdasarkan id kabupaten yang dipilih
        $this->db->where('regency_id', $kabupaten_id);
        $this->db->order_by('name', 'ASC');
        $query = $this->db->get('districts');

        $output = '<option value="">-- Pilih Kecamatan --</option>';

        //looping data
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->id . '">' . $row->name . '</option>';
        }
        //return data kecamatan
        return $output;
    }
}

/* End of file M_daftar.php */
