<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="" class="logo d-flex align-items-center">
            <img src="<?= base_url(); ?>assets/img/Logo.png" alt="">
            <span class="text-small">SMPN 2 Padang Batung</span>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#fasilitas">Fasilitas</a></li>
                <li><a class="nav-link scrollto" href="#syarat">Syarat</a></li>
                <li><a class="nav-link scrollto" href="#services">Surprise</a></li>
                <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Selamat Datang </h1>
                <h2 data-aos="fade-up" data-aos-delay="400">Penerimaan Peserta Didik Baru SMPN 2 Padang Batung Tahun Ajaran 2022 - 2023</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <span>
                            <a href="<?= base_url('daftar') ?>" target="blank" class="btn btn-primary" style="margin: 5px; border-radius: 50px; color:white">
                                <i class="bi bi-list bi-pulse"></i> &nbsp;
                                <b>KLIK UNTUK DAFTAR</b>
                            </a>
                            <a href="<?= base_url('auth') ?>" class="btn btn-success" style="margin: 5px; border-radius: 50px;">
                                <i class="bi bi-door-open"></i> &nbsp;
                                <b>LOGIN SISWA</b>
                            </a>
                            <a href="<?= base_url('auth/admin') ?>" class="btn btn-warning" style="margin: 5px; border-radius: 50px;">
                                <i class="bi bi-door-open"></i> &nbsp;
                                <b>LOGIN ADMIN</b>
                            </a>
                            <br>
                        </span>

                    </div>

                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="<?= base_url('assets/img/hero-img.png') ?>" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

        <div class="container" data-aos="fade-up">
            <div class="row gx-0">

                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <h3>Kenapa Harus Kami</h3>
                        <h2>SMPN 2 Padang Batung</h2>
                        <p style="text-align: justify;">

                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eget tristique sapien. Morbi dapibus tincidunt leo, sit amet scelerisque quam condimentum et. Nulla ornare lectus in velit fringilla, vel pretium neque placerat. Pellentesque id justo turpis. Donec vel neque rutrum, consequat orci vel, pretium neque. Nam vel lacinia nibh, nec aliquam arcu. In porta massa nec diam aliquet, nec pretium arcu efficitur. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer ornare ipsum ipsum, eu sollicitudin elit sodales et. Aenean cursus ipsum vel magna accumsan, non hendrerit ex lobortis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum suscipit elementum rhoncus. Ut mattis nisl nibh, sed rutrum neque blandit et. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus ac elit finibus, vehicula nisi in, eleifend leo. Donec luctus molestie lorem, et placerat velit cursus in.
                        </p>
                        <div class="text-center text-lg-start">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="<?= base_url() ?>/assets/img/about.jpg" class="img-fluid animated" alt="">
                </div>

            </div>
        </div>

    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <!-- <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Projects</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-headset" style="color: #15be56;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Hours Of Support</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-people" style="color: #bb0852;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Hard Workers</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>End Counts Section -->

    <!-- ======= Features Section ======= -->
    <section id="fasilitas" class="features">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Fasilitas</h2>
                <p>Fasilitas SMPN 2 Padang Batung</p>
            </header>

            <div class="row">

                <div class="col-lg-6">
                    <img src="assets/img/features.png" class="img-fluid animated" alt="">
                </div>

                <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                    <div class="row align-self-center gy-4">

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Sekolah Bebas Biaya</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Kurikulum Terbaru Yaitu 2013</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Terakreditasi B</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Lokasi Sekolah Yang Sejuk</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Fasilitas Ibadah</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Gedung Sekolah</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Laboratorium IPA</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Laboratorium Komputer</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Perpustakaan Lengkap</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Lapangan Olahraga</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Kegiatan Ekstrakulikuler</h3>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Kegiatan Keagaamaan</h3>
                            </div>
                        </div>

                    </div>
                </div>

            </div> <!-- / row -->

            <div class="row feture-tabs" data-aos="fade-up">
                <div class="col-lg-6">
                    <h3>Alur Pendaftaran Peserta Didik Baru SMPN 2 Padang Batung</h3>
                    <div class="tab-content">
                        <div class="tab-pane fade show active">
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <p style="color:black">Calon peserta didik mendaftar pada aplikasi PPDB SMPN 2 Padang Batung, atau bisa langsung datang ke SMPN 2 Padang Batung</p>
                            </div>

                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <p style="color:black">Calon peserta didik mengisi formulir yang disediakan</p>
                            </div>

                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <p style="color:black">Calon peserta didik melengkapi berkas yang diminta</p>
                            </div>

                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <p style="color:black">Semua berkas calon peserta didik dikumpul ke panitia PPDB SMPN 2 Padang Batung</p>
                            </div>

                        </div><!-- End Tab 1 Content -->
                    </div>
                </div>

                <div class="col-lg-6">
                    <img src="<?= base_url() ?>/assets/img/features-2.png" class="img-fluid" alt="">
                </div>
            </div>

    </section><!-- End Features Section -->



    <section id="syarat" class="features">
        <div class="container" data-aos="fade-up">
            <!-- Feature Icons -->
            <div class="row feature-icons" data-aos="fade-up" id="syarat">
                <h3>Syarat Pendaftaran SMPN 2 Padang Batung</h3>

                <div class="row">

                    <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="<?= base_url() ?>/assets/img/features-3.png" class="img-fluid p-4" alt="">
                    </div>

                    <div class="col-xl-8 d-flex content">
                        <div class="row align-self-center gy-4">

                            <div class="col-md-6 icon-box" data-aos="fade-up">
                                <i class="fas fa bi-book"></i>
                                <div>
                                    <h4>Membawa Surat Keterangan Kelulusan</h4>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <i class="fas fa bi-card-checklist"></i>
                                <div>
                                    <h4>Fotocopy Akte Kelahiran</h4>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                <i class="fas fa bi-card-list"></i>
                                <div>
                                    <h4>Fotocopy Kartu Keluarga</h4>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                <i class="fas fa bi-card-text"></i>
                                <div>
                                    <h4>Fotocopy KTP Orang Tua/Wali</h4>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                <i class="fas fa bi-card-image"></i>
                                <div>
                                    <h4>Pas Photo Berwarna</h4>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                                <i class="fas fa bi-card-list"></i>
                                <div>
                                    <h4>Fotocopy Kartu KIP (Jika Ada)</h4>
                                </div>
                            </div>

                            <div class="col-md icon-box" data-aos="fade-up" data-aos-delay="500">
                                <i class="fas fa bi-journal-richtext"></i>
                                <div>
                                    <h4>Catatan</h4>
                                    <p style="color: red;"> Semua berkas dikumpulkan ke sekolah di serahkan kepada panitia PPDB SMPN 2 Padang Batung
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div><!-- End Feature Icons -->
        </div>
    </section>


    <!-- ======= Services Section ======= -->
    <section id="services" class="services">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Surprise</h2>
                <p>Informasi Menggembirakan</p>
            </header>

            <div class="row gy-4">

                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box blue">
                        <i class="fas fa ri-book-line icon"></i>
                        <h3>Gratis Alat-alat Tulis</h3>
                    </div>
                </div>

                <div class="col-lg-6 col-md-2" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-box orange">
                        <i class="fas fa ri-contacts-book-upload-line icon"></i>
                        <h3>Gratis Atribut Sekolah</h3>
                    </div>
                </div>

                <div class="col-lg-6 col-md-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-box green">
                        <i class="fas fa ri-emotion-happy-line icon"></i>
                        <h3>Gratis Baju Seragam Sekolah</h3>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-box red">
                        <i class="fas fa ri-emotion-happy-line icon"></i>
                        <h3>Gratis Baju Seragam Olahraga</h3>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="gallery" class="portfolio">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Gallery Foto</h2>
                <p>Gallery Foto Kegiatan SMPN 2 Padang Batung</p>
            </header>



            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="<?= base_url() ?>assets/img/gallery/foto1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pemberian Hadiah Kepada Siswa Berprestasi</h4>
                            <div class="portfolio-links">
                                <a href="<?= base_url() ?>assets/img/gallery/foto1.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Pemberian Hadiah Kepada Siswa Berprestasi"><i class="fas fa bi-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="<?= base_url() ?>assets/img/gallery/foto1_2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Kegiatan Senam Bersama</h4>
                            <div class="portfolio-links">
                                <a href="<?= base_url() ?>assets/img/gallery/foto1_2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Kegiatan Senam Bersama"><i class="fas fa bi-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="<?= base_url() ?>assets/img/gallery/foto3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Kegiatan Habsyi Putri</h4>
                            <div class="portfolio-links">
                                <a href="<?= base_url() ?>assets/img/gallery/foto3.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Kegiatan Habsyi Putri "><i class="bi bi-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Kontak</h2>
                <p>Kontak Kami</p>
            </header>

            <div class="row gy-4">

                <div class="col-lg-6">

                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Alamat</h3>
                                <p>Jl. H. Hasan Basri, <br>Padang Batung, Kabupaten Hulu Sungai Selatan, Kalimantan Selatan 71281</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-telephone"></i>
                                <h3>Telepon</h3>
                                <p>(0517) 23532</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-envelope"></i>
                                <h3>Email</h3>
                                <p>akunsmp2@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-clock"></i>
                                <h3>Jam Buka</h3>
                                <p>Senin - Sabtu<br>08.00 - 12.00</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" class="php-email-form">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>

                                <button type="submit">Send Message</button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="" class="logo d-flex align-items-center">
                        <img src="<?= base_url() ?>assets/img/logo.png" alt="">
                        <span>SMPN 2 Padang Batung</span>
                    </a>
                    <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bi bi-whatsapp"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#hero">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#about">About</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#fasilitas">Fasilitas</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#syarat">Syarat</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#services">Surprise</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#gallery">Gallery</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#contact">Contact</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">

                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Kontak Kami</h4>
                    <p>
                        Jl. H. Hasan Basri, <br>Padang Batung, Kabupaten Hulu Sungai Selatan, Kalimantan Selatan 71281
                        <strong>Telepon:</strong> (0517) 23532<br>
                        <strong>Email:</strong> akunsmp2@gmail.com<br>
                    </p>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>flexstart - Muhammad Faisal Rizani</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End Footer -->