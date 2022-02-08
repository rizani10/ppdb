<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/material-icon/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- CDN Jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <script src="https://use.fontawesome.com/07323268fb.js"></script>

    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/daftar.css">

    <style>
        body {
            font-size: 14px;
            line-height: 1.8;
            color: #222;
            font-weight: 400;
            font-family: 'Montserrat';
            /* background-image: url("<?= base_url('assets/img/bg.jpg') ?>"); */
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

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <!-- <form id="signup-form" class="signup-form"> -->
                    <?= form_open('daftar/tambah'); ?>
                    <h2 class="form-title">Formulir Pendaftaran Peserta Didik Baru</h2>
                    <span> <strong>Data Diri</strong> </span>
                    <form>

                        <div class="form-group">
                            <label for="no_daftar">Nomor Pendaftaran</label>
                            <input type="text" class="form-control" name="no_daftar" id="no_daftar" value="<?= $kode; ?>" readonly />
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" required />
                        </div>


                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis kelamin</label>
                            <select class="form-control" name="jenis_kelamin">
                                <option selected>Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="nisn">NISN</label>
                            <input type="number" class="form-control" name="nisn" id="nisn" placeholder="NISN " required />
                        </div>

                        <div class="form-group">
                            <label for="sekolah_asal">Sekolah Asal</label>
                            <input type="text" class="form-control" name="sekolah_asal" id="sekolah_asal" placeholder="Sekolah Asal" required />
                        </div>

                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" required />
                        </div>

                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" required />
                        </div>

                        <div class="form-group">
                            <label for="agama">Agama</label>
                            <select class="form-control" name="agama">
                                <option selected>Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Khonghucu">Konghucu</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control" placeholder="Alamat" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Propinsi</label>
                            <select name="propinsi_name" id="propinsi" class="form-control">
                                <option value="">Pilih Provinsi</option>
                                <?php
                                foreach ($propinsi as $row) {
                                    echo '<option value="' . $row->id . '">' . $row->name . '</option>';
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="kebupaten">Kabupaten</label>
                            <select name="regencies_name" id="kabupaten" class="form-control">
                                <option value="">Pilih Kabupaten</option>
                                <?php

                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="kecamatan">Kecamatan</label>
                            <select name="villages_name" id="kecamatan" class="form-control">
                                <option value="">Pilih Kecamatan</option>
                                <?php

                                ?>
                            </select>
                        </div>




                        <div class="form-group">
                            <label for="no_hp_siswa">Nomor Hp Siswa atau Orang Tua</label>
                            <input type="number" class="form-control" name="no_hp_siswa" id="no_hp" placeholder="No HP Siswa atau Orang Tua" required />
                        </div>

                        <span> <strong>Data Orang Tua</strong> </span>
                        <div class="form-group">
                            <label for="nama_ayah">Nama Ayah</label>
                            <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" placeholder="Nama Ayah" required />
                        </div>

                        <div class="form-group">
                            <label for="nama_ibu">Nama Ibu</label>
                            <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" placeholder="Nama Ibu" required />
                        </div>

                        <div class="form-group">
                            <label for="pendidikan_ayah">Pendidikan Terkahir Ayah</label>
                            <select class="form-control" name="pendidikan_ayah">
                                <option selected>Pendidikan Terkahir Ayah</option>
                                <option value="SD Sederajat">SD Sederajat</option>
                                <option value="SMP Sederajat">SMP Sederajat</option>
                                <option value="SMA Sederajat">SMA Sederajat</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="pendidikan_ibu">Pendidikan Terkahir Ibu</label>
                            <select class="form-control" name="pendidikan_ibu">
                                <option value="">Pendidikan Terkahir Ibu</option>
                                <option value="SD Sederajat">SD Sederajat</option>
                                <option value="SMP Sederajat">SMP Sederajat</option>
                                <option value="SMA Sederajat">SMA Sederajat</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                            <input type="text" class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah" placeholder="Pekerjaan Ayah" />
                        </div>

                        <div class="form-group">
                            <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                            <input type="text" class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu" placeholder="Pekerjaan Ibu" required />
                        </div>

                        <div class="form-group">
                            <label for="no_hp_orangtua">Nomor Hp Orang Tua atau Wali</label>
                            <input type="number" class="form-control" name="no_hp_orangtua" id="no_hp_orangtua" placeholder="Nomor Hp Orang Tua" required />
                        </div>

                        <div class="form-group">
                            <button type="submit" class="form-submit">Daftar Sekarang</button>
                        </div>
                        <?= form_close() ?>
                    </form>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
    <script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/maiin.js"></script>


    <!-- <script src="<?= base_url() ?>assets/js/my.js"></script> -->
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

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
    });
</script>