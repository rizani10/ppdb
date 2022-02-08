<div id="content">

    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800"><?= $title2; ?></h1>

        <div class="card shadow mb-4">
            <div class="card-body">
                <?= form_open_multipart('admin/upload_aksi') ?>
                <div class="form-group">
                    <label for="judul">Judul Foto</label>
                    <input type="text" class="form-control" name="judul" id="judul" ]placeholder="Judul Foto" required>
                </div>

                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" class="form-control-file" name="foto" id="foto" required>
                    <small class="text-danger">Makssimal Ukuran Foto 1 Mb</small>
                </div>
            </from>
            <button type="submit">Simpan</button>
            </div>
        </div>
    </div>
</div>