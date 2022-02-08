<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!-- CDN Jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/07323268fb.js"></script>

    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/daftar.css">

    <title>Form Pendaftaran Mahasiswa Baru</title>
    <style>
        body {
            font-size: 14px;
            line-height: 1.8;
            color: #222;
            font-weight: 400;
            font-family: 'Montserrat';
            background-image: url("<?= base_url('assets/img/bg.jpg') ?>");
            background-repeat: no-repeat;
            background-size: cover;
            -moz-background-size: cover;
            -webkit-background-size: cover;
            -o-background-size: cover;
            -ms-background-size: cover;
            background-position: center center;
            padding: 115px 0;
        }
    </style>
</head>

<body>
    <!-- <div class="main"> -->

    <!-- <section class="signup"> -->
    <!-- <img src="images/signup-bg.jpg" alt=""> -->
    <div class="container">
        <div class="signup-content">

            <table width="800" align="center">
                <font face="Times New Roman" size=4>
                    <div>
                        <tbody>
                            <tr>
                                <td style="width: 77px;" rowspan="4"><img src="" alt="" height="86" /></td>
                                <td style="font-family: 'Times New Roman'; text-align: center;font-size:20px; text-transform: uppercase;"><b>Pemerintah Kabupaten Hulu Sungai Selatan</b></td>
                                <td style="width: 77px;" rowspan="4">&nbsp;</td>
                            <tr>
                                <td style="text-align: center;font-size:20px; font-family: 'Times New Roman'; text-transform: uppercase;"><b>Dinas Pendidikan dan Kebudayaan</b></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;font-size:20px; font-family: 'Times New Roman'; text-transform: uppercase;"><b>SMP Negeri 2 Padang Batung</b></td>
                            </tr>
                            <tr>
                                <td style="text-align: center; font-family: 'Times New Roman';">Jalan Telaga Raya Kecamatan Padang Batung</td>
                            </tr>
                    </div>
                </font>
                </tbody>
            </table>
            <!-- <hr width="800" style="height:2px;border-width:2;color:gray;background-color:gray"> -->

            <table border='0' width='60%' cellpadding='2' cellspacing='2' align='center' bgcolor=white>
                <?= form_open('daftar/cetak') ?>

                <tr></tr>
                <tr>
                    <td colspan="2" bgcolor=Gainsboro>
                        <center><b>INFORMASI PRIBADI</b></center>
                    </td>
                </tr>
                <tr>
                    <td><b>No. Pendaftaran</b></td>
                    <td><input class="form-control" type="text" name="no.daftar" size="40" maxlength="50" value="<?= $kode; ?>" /></td>
                </tr>
                <tr>
                    <td><b>Nama</b></td>
                    <td><input class="form-control" type="text" name="nama" size="40" maxlength="50" /></td>
                </tr>

                <tr>
                    <td>
                        <b>Jenis Kelamin</b>
                    </td>
                    <td>
                        <select class="form-control" name="jenis_kelamin">
                            <option selected>Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td><b>NISN</b></td>
                    <td><input class="form-control" type="text" name="nisn" size="40" maxlength="50" /></td>
                </tr>

                <tr>
                    <td><b>Sekolah Asal</b></td>
                    <td><input class="form-control" type="text" name="sekolah_asal" size="40" maxlength="50" /></td>
                </tr>

                <tr>
                    <td>
                        <b>Tempat Lahir</b>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="tempat_lahir" size="30" maxlength="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Tanggal Lahir</b>
                    </td>
                    <td>
                        <input type="date" class="form-control" name="tanggal_lahir" size="30" maxlength="50" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <b>Agama</b>
                    </td>
                    <td>
                        <select class="form-control" name="agama">
                            <option selected>Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Khonghucu">Konghucu</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td><b>Alamat</b></td>
                    <td><textarea class="form-control" name="alamat" cols="30" rows="3"></textarea></td>
                </tr>

                <tr>
                    <td><b>Propinsi</b></td>
                    <td>
                        <select name="province_id" id="propinsi" class="form-control">
                            <option value="">Pilih Provinsi</option>
                            <?php
                            foreach ($propinsi as $row) {
                                echo '<option value="' . $row->id . '">' . $row->name . '</option>';
                            }
                            ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td><b>Kabupaten</b></td>
                    <td>
                        <select name="regencies_id" id="kabupaten" class="form-control">
                            <option value="">Pilih Kabupaten</option>
                            <?php

                            ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td><b>Kecamatan</b></td>
                    <td>
                        <select name="villages_id" id="kecamatan" class="form-control">
                            <option value="">Pilih Kecamatan</option>
                            <?php

                            ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td><b>No HP Siswa</b></td>
                    <td>
                        <input type="number" name="no_hp_siswa" class="form-control" placeholder="No HP Siswa Atau Orang Tua">
                    </td>
                </tr>

                <tr>
                    <td colspan="2" bgcolor=Gainsboro>
                        <center><b>INFORMASI ORANG TUA</b></center>
                    </td>
                </tr>

                <tr>
                    <td><b>Nama Ayah</b></td>
                    <td>
                        <input type="text" name="nama_ayah" class="form-control" placeholder="Nama Ayah">
                    </td>
                </tr>

                <tr>
                    <td><b>Nama Ibu</b></td>
                    <td>
                        <input type="text" name="nama_ibu" class="form-control" placeholder="Nama Ibu">
                    </td>
                </tr>

                <tr>
                    <td><b>Pendidikan Ayah</b></td>
                    <td>
                        <select class="form-control" name="pendidikan_ayah">
                            <option selected>Pendidikan Terkahir Ayah</option>
                            <option value="SD Sederajat">SD Sederajat</option>
                            <option value="SMP Sederajat">SMP Sederajat</option>
                            <option value="SMA Sederajat">SMA Sederajat</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td><b>Pendidikan Ibu</b></td>
                    <td>
                        <select class="form-control" name="pendidikan_ibu">
                            <option selected>Pendidikan Terkahir ibu</option>
                            <option value="SD Sederajat">SD Sederajat</option>
                            <option value="SMP Sederajat">SMP Sederajat</option>
                            <option value="SMA Sederajat">SMA Sederajat</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td><b>Pekerjaan Ayah</b></td>
                    <td>
                        <input type="text" name="pekerjaan_ayah" class="form-control" placeholder="Pekerjaan Ayah">
                    </td>
                </tr>

                <tr>
                    <td><b>Pekerjaan Ibu</b></td>
                    <td>
                        <input type="text" name="pekerjaan_ibu" class="form-control" placeholder="Pekerjaan Ibu">
                    </td>
                </tr>

                <tr>
                    <td><b>No HP Orang Tua</b></td>
                    <td>
                        <input type="number" name="no_hp_orangtua" class="form-control" placeholder="No HP Siswa Atau Orang Tua">
                    </td>
                </tr>

                <tr>
                    <td colspan="2" align="center">

                        <button type="submit" class="btn btn-primary">simpan</button>
                    </td>
                </tr>
                <?= form_close() ?>
            </table>
        </div>
    </div>
    </section>
    </div>

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
</body>

</html>
<script>
    $(document).ready(function() {

        //request data kabupaten
        $('#propinsi').change(function() {
            var provinsi_id = $('#propinsi').val(); //ambil value id dari provinsi

            if (provinsi_id != '') {
                $.ajax({
                    url: '<?= base_url(); ?>daftar/get_kabupaten',
                    method: 'POST',
                    data: {
                        provinsi_id: provinsi_id
                    },
                    success: function(data) {
                        $('#kabupaten').html(data)
                    }
                });
            }
        });

        //request data kecamatan
        $('#kabupaten').change(function() {
            var kabupaten_id = $('#kabupaten').val(); // ambil value id dari kabupaten
            if (kabupaten_id != '') {
                $.ajax({
                    url: '<?= base_url(); ?>/daftar/get_kecamatan',
                    method: 'POST',
                    data: {
                        kabupaten_id: kabupaten_id
                    },
                    success: function(data) {
                        $('#kecamatan').html(data)
                    }
                });
            }
        });

        //request data desa
        $('#kecamatan').change(function() {
            var kecamatan_id = $('#kecamatan').val(); // ambil value id dari kecamatan
            if (kecamatan_id != '') {
                $.ajax({
                    url: '<?= base_url(); ?>dynamic_dependent/get_desa',
                    method: 'POST',
                    data: {
                        kecamatan_id: kecamatan_id
                    },
                    success: function(data) {
                        $('#desa').html(data)
                    }
                });
            }
        });
    });
</script>