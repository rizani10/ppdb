<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-md-5">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <!-- Nested Row within Card Body -->
                <!-- <div class="col-lg-6"> -->
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Silahkan Login</h1>
                    </div>

                    <?=
                    $this->session->flashdata('pesan');

                    ?>

                    <?= form_open('auth') ?>
                    <div class="form-group">
                        <label for="nisn">NISN</label>
                        <input type="text" class="form-control" id="nisn" name="nisn" aria-describedby="nisn" placeholder="Silahkan Masukkan NISN " required>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Password" required>
                    </div>

                    
                    <button type="submit" class="btn btn-primary">Login</button>
                    <a href="<?= base_url('home') ?>" class="btn btn-success">Kembali</a>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>