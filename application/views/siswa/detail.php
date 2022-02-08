<div id="content">

    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
        <div class="card mb-4 py-3 border-left-primary">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Detail Data Siswa Nama : <?= $user['nama']; ?></h6>
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col">
                            <label for="">Nomor Pendaftaran</label>
                            <input type="text" class="form-control" value="<?= $user['no_daftar'] ?>" readonly>
                        </div>
                        <div class="col">
                            <label for="">Nama Lengkap</label>
                            <input type="text" class="form-control" value="<?= $user['nama'] ?>" readonly>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <label for="">Jenis Kelamin</label>
                            <input type="text" class="form-control" value="<?= $user['jenis_kelamin'] ?>" readonly>
                        </div>
                        <div class="col">
                            <label for="">NISN</label>
                            <input type="text" class="form-control" value="<?= $user['nisn'] ?>" readonly>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <label for="">Sekolah Asal</label>
                            <input type="text" class="form-control" value="<?= $user['sekolah_asal'] ?>" readonly>
                        </div>
                        <div class="col">
                            <label for="">Tempat Lahir</label>
                            <input type="text" class="form-control" value="<?= $user['tempat_lahir'] ?>" readonly>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <label for="">Tanggal Lahir</label>
                            <input type="text" class="form-control" value="<?= $user['tanggal_lahir'] ?>" readonly>
                        </div>
                        <div class="col">
                            <label for="">Agama</label>
                            <input type="text" class="form-control" value="<?= $user['agama'] ?>" readonly>
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col">
                            <label for="">Alamat</label>
                            <input type="text" class="form-control" value="<?= $user['alamat'] ?>" readonly>
                        </div>
                        <div class="col">
                            <label for="">Propinsi</label>
                            <input type="text" class="form-control" value="<?= $propinsi['name'] ?>" readonly>
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col">
                            <label for="">Kabupaten</label>
                            <input type="text" class="form-control" value="<?= $kab['name'] ?>" readonly>
                        </div>
                        <div class="col">
                            <label for="">Kecamatan</label>
                            <input type="text" class="form-control" value="<?= $kec['name'] ?>" readonly>
                        </div>
                    </div><br>


                    <div class="row">
                        <div class="col">
                            <label for="">No HP Siswa</label>
                            <input type="text" class="form-control" value="<?= $user['no_hp_siswa'] ?>" readonly>
                        </div>
                        <div class="col">
                            <label for="">Nama Ayah</label>
                            <input type="text" class="form-control" value="<?= $user['nama_ayah'] ?>" readonly>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <label for="">Nama Ibu</label>
                            <input type="text" class="form-control" value="<?= $user['nama_ibu'] ?>" readonly>
                        </div>
                        <div class="col">
                            <label for="">Pendidikan Ayah</label>
                            <input type="text" class="form-control" value="<?= $user['pendidikan_ayah'] ?>" readonly>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <label for="">Pendidikan Ibu</label>
                            <input type="text" class="form-control" value="<?= $user['pendidikan_ibu'] ?>" readonly>
                        </div>
                        <div class="col">
                            <label for="">Pekerjaan Ayah</label>
                            <input type="text" class="form-control" value="<?= $user['pekerjaan_ayah'] ?>" readonly>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <label for="">Pekerjaan Ibu</label>
                            <input type="text" class="form-control" value="<?= $user['pekerjaan_ibu'] ?>" readonly>
                        </div>
                        <div class="col">
                            <label for="">No HP Orang Tua</label>
                            <input type="text" class="form-control" value="<?= $user['no_hp_orangtua'] ?>" readonly>
                        </div>
                    </div><br>
                    <a href="<?= base_url('siswa/data') ?>" class="btn btn-info">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>