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
                            <tr style="text-align: center;">
                                <th>#</th>
                                <th style="width: 10%;">No Pendaftaran</th>
                                <th style="width: 20%;">Nama</th>
                                <th>NISN</th>
                                <th>Sekolah Asal</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th style="width: 13%;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($siswa as $s) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $s['no_daftar']; ?></td>
                                    <td><?= $s['nama']; ?></td>
                                    <td><?= $s['nisn']; ?></td>
                                    <td><?= $s['sekolah_asal']; ?></td>
                                    <td><?= $s['tempat_lahir']; ?></td>
                                    <td><?= $s['tanggal_lahir']; ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/detail/') . $s['id_daftar'];; ?>" class="badge badge-primary">Detail</a>
                                        <a href="<?= base_url('admin/edit/') . $s['id_daftar']; ?>" class="badge badge-warning">Edit</a>
                                        <a href="<?= base_url('admin/hapus/') . $s['id_daftar'] ?>" class="badge badge-danger">Hapus</a>
                                        <a href="" class="badge badge-secondary">Cetak</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>