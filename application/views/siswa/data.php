<div id="content">

    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
        <?= $this->session->flashdata('pesan');
        ?>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?></h6>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>No Pendaftaran</th>
                                <th>Nama</th>
                                <th>NISN</th>
                                <th>Sekolah Asal</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1; ?>
                            <td><?= $i++; ?></td>
                            <td><?= $user['no_daftar']; ?></td>
                            <td><?= $user['nama']; ?></td>
                            <td><?= $user['nisn']; ?></td>
                            <td><?= $user['sekolah_asal']; ?></td>
                            <td><?= $user['tempat_lahir']; ?></td>
                            <td><?= $user['tanggal_lahir']; ?></td>
                            <td>
                                <a href="<?= base_url('siswa/detail/') . $user['id_daftar'];; ?>" class="badge badge-primary">Detail</a>
                                <a href="<?= base_url('siswa/edit/') . $user['id_daftar']; ?>" class="badge badge-warning">Edit</a>
                                <a href="" class="badge badge-secondary">Cetak Formulir</a>
                            </td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>