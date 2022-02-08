<div id="content">

    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
        <div class="card mb-4 py-3 border-left-warning">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-warning">Edit Data Siswa Nama : <?= $user['nama']; ?></h6>
            </div>
            <div class="card-body">
                <?= form_open() ?>
                <input type="hidden" name="id_daftar" value="<?= $user['id_daftar']; ?>">
                <form>
                    <div class="row">
                        <div class="col">
                            <label for="">Nomor Pendaftaran</label>
                            <input type="text" name="no_daftar" class="form-control" value="<?= $user['no_daftar'] ?>" readonly>
                        </div>
                        <div class="col">
                            <label for="">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" value="<?= $user['nama'] ?>" required>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <label for="">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control" required>
                                <option value="<?= $user['jenis_kelamin'] ?>" selected><?= $user['jenis_kelamin'] ?></option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="">NISN</label>
                            <input type="text" name="nisn" class="form-control" value="<?= $user['nisn'] ?>" required>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <label for="">Sekolah Asal</label>
                            <input type="text" name="sekolah_asal" class="form-control" value="<?= $user['sekolah_asal'] ?>" required>
                        </div>
                        <div class="col">
                            <label for="">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control" value="<?= $user['tempat_lahir'] ?>" required>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control" value="<?= $user['tanggal_lahir'] ?>" required>
                        </div>
                        <div class="col">
                            <label for="">Agama</label>
                            <select class="form-control" name="agama">
                                <option value="<?= $user['agama'] ?>" selected><?= $user['agama'] ?></option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Khonghucu">Konghucu</option>
                            </select>
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col">
                            <label for="">Alamat</label>
                            <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control" placeholder="Alamat" required><?= $user['alamat'] ?></textarea>
                        </div>
                        <div class="col">
                            <label for="">Propinsi</label>
                            <select name="propinsi_name" id="propinsi" class="form-control">
                                <option value="<?= $user['propinsi_name'] ?>"><?= $propinsi['name'] ?></option>
                                <?php
                                foreach ($prop as $row) {
                                    echo '<option value="' . $row->id . '">' . $row->name . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col">
                            <label for="">Kabupaten</label>
                            <select name="regencies_name" id="kabupaten" class="form-control">
                                <option value="<?= $user['regencies_name'] ?>"><?= $kab['name'] ?></option>
                                <?php

                                ?>
                            </select>
                        </div>
                        <div class="col">
                            <label for="">Kecamatan</label>
                            <select name="villages_name" id="kecamatan" class="form-control">
                                <option value="<?= $user['villages_name'] ?>"><?= $kec['name'] ?></option>
                                <?php

                                ?>
                            </select>
                        </div>
                    </div><br>


                    <div class="row">
                        <div class="col">
                            <label for="">No HP Siswa</label>
                            <input type="text" name="no_hp_siswa" class="form-control" value="<?= $user['no_hp_siswa'] ?>" required>
                        </div>
                        <div class="col">
                            <label for="">Nama Ayah</label>
                            <input type="text" name="nama_ayah" class="form-control" value="<?= $user['nama_ayah'] ?>" required>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <label for="">Nama Ibu</label>
                            <input type="text" name="nama_ibu" class="form-control" value="<?= $user['nama_ibu'] ?>" required>
                        </div>
                        <div class="col">
                            <label for="">Pendidikan Ayah</label>
                            <select class="form-control" name="pendidikan_ayah">
                                <option value="<?= $user['pendidikan_ayah'] ?>" selected><?= $user['pendidikan_ayah'] ?></option>
                                <option value="SD Sederajat">SD Sederajat</option>
                                <option value="SMP Sederajat">SMP Sederajat</option>
                                <option value="SMA Sederajat">SMA Sederajat</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <label for="">Pendidikan Ibu</label>
                            <select class="form-control" name="pendidikan_ibu">
                                <option value="<?= $user['pendidikan_ibu'] ?>" selected><?= $user['pendidikan_ibu'] ?></option>
                                <option value="SD Sederajat">SD Sederajat</option>
                                <option value="SMP Sederajat">SMP Sederajat</option>
                                <option value="SMA Sederajat">SMA Sederajat</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="">Pekerjaan Ayah</label>
                            <input type="text" name="pekerjaan_ayah" class="form-control" value="<?= $user['pekerjaan_ayah'] ?>" required>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <label for="">Pekerjaan Ibu</label>
                            <input type="text" name="pekerjaan_ibu" class="form-control" value="<?= $user['pekerjaan_ibu'] ?>" required>
                        </div>
                        <div class="col">
                            <label for="">No HP Orang Tua</label>
                            <input type="text" name="no_hp_orangtua" class="form-control" value="<?= $user['no_hp_orangtua'] ?>" required>
                        </div>
                    </div><br>
                    <a href="<?= base_url('siswa/data') ?>" class="btn btn-info">Kembali</a>
                    <button type="submit" class="btn btn-warning">Edit</button>
                </form>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>