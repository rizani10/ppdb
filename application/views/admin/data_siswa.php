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
                                        <a href="" class="badge badge-danger" data-toggle="modal" data-target="#hapus<?= $s['id_daftar'] ?>">Hapus</a>
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


<!-- modal Hapus -->
<?php foreach ($siswa as $s) : ?>
    <div class="modal fade" id="hapus<?= $s['id_daftar'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    Yakin Ingin Menghapus Menu Data
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <a href="<?= base_url('admin/hapus/' . $s['id_daftar']) ?>" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- modal Hapus -->