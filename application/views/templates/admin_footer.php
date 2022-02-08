<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Keluar Dari Aplikasi??</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Silahkan Tekan Tombol Logout Untuk keluar Dari Aplikasi</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('siswa/logout') ?>">Logout</a>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="logoutAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Keluar Dari Aplikasi??</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Silahkan Tekan Tombol Logout Untuk keluar Dari Aplikasi</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('admin/logout') ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url() ?>assets/dist/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/dist/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url() ?>assets/dist/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url() ?>assets/dist/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url() ?>assets/dist/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/dist/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url() ?>assets/dist/js/demo/datatables-demo.js"></script>
</body>

</html>
<script>
    $(document).ready(function() {

        //request data kabupaten
        $('#propinsi').change(function() {
            var provinsi_id = $('#propinsi').val(); //ambil value id dari provinsi

            if (provinsi_id != '') {
                $.ajax({
                    url: '<?= base_url(); ?>siswa/get_kabupaten',
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
                    url: '<?= base_url(); ?>/siswa/get_kecamatan',
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