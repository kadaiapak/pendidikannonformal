<?= $this->extend('layout_front_end/template'); ?>
<?= $this->section('content'); ?>
    <!-- Start Banner ============================================= -->
    <div class="banner-area content-top-heading less-paragraph text-normal">
        <div id="bootcarousel" class="carousel slide animate_text carousel-fade" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner text-light carousel-zoom">
                <div class="item active">
                    <div class="slider-thumb bg-fixed" style="background-image: url(assets/img/2440x1578.png);"></div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h1 data-animation="animated slideInLeft">SELAMAT DATANG</h1>
                                            <h3 data-animation="animated slideInUp">Di Laman Resmi Program Studi
                                                Pendidikan Non Formal FIP UNP</h3>
                                            <a data-animation="animated slideInUp" class="btn btn-light border btn-md"
                                                href="profile.html">Profil</a>
                                            <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md"
                                                href="#subscribe">Subscribe</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slider-thumb bg-fixed" style="background-image: url(assets/img/2440x1578.png);"></div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h3 data-animation="animated slideInLeft">We're glade to see you</h3>
                                            <h1 data-animation="animated slideInUp">explore our brilliant graduates</h1>
                                            <a data-animation="animated slideInUp" class="btn btn-light border btn-md"
                                                href="#">Learn more</a>
                                            <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md"
                                                href="#">View Courses</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slider-thumb bg-fixed" style="background-image: url(assets/img/2440x1578.png);"></div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h3 data-animation="animated slideInLeft">The goal of education</h3>
                                            <h1 data-animation="animated slideInUp">Join the bigest comunity of eduka
                                            </h1>
                                            <a data-animation="animated slideInUp" class="btn btn-light border btn-md"
                                                href="#">Learn more</a>
                                            <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md"
                                                href="#">View Courses</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Our Features Latest Post
        ============================================= -->
    <div id="about" class="our-featues-area inc-trending-courses about-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 our-feature-items">
                    <div class="row">
                        <div class="col-md-12 info less-bar">
                        <?php foreach ($visi_misi as $vs) { ?>
                                <?php if($vs['pengaturan_nama'] == 'Title') { ?>
                                <h1><?= $vs['pengaturan_isi']; ?> </h1>
                                <?php }elseif ($vs['pengaturan_nama'] == 'Ucapan Selamat Datang') { ?>
                                    <p>
                                        <?= $vs['pengaturan_isi']; ?>
                                    </p>
                                <?php } else { ?>
                                    <h1><?= $vs['pengaturan_nama']; ?></h1>
                                    <p>
                                        <?= $vs['pengaturan_isi']; ?>
                                    </p>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <!-- End Our Features -->
                <div class="col-md-4 home-sidebar">
                    <div class="sidebar-item latest-posts trending-courses-box">
                        <img src="https://pnf.fip.unp.ac.id/upload/foto_dosen/mhd_natsir_1719809349_8238b1c59e7a794be717.jpeg"
                            alt="Thumb" style="filter: invert(0);">
                        <h4> Mhd. Natsir, S. Sos,I, S.Pd., M.Pd. <br>
                            <p>Ketua Program Studi</p>
                        </h4>
                    </div>
                </div>

                <!-- End Home Sidebar -->
                <div class="col-md-4 home-sidebar">
                    <!-- Start Latest Post -->
                    <div class="sidebar-item latest-posts trending-courses-box">
                        <div class="trending-courses-items">
                        <?php foreach ($pengumuman_berita as $pb) { ?>
                                <div class="item">
                                    <h4>
                                        <a href="<?= base_url('/pengumuman/'.$pb['berita_slug']); ?>"><?= $pb['berita_judul']; ?></a>
                                    </h4>
                                    <div class="meta">
                                        <i class="fas fa-user"></i>
                                        By
                                        <a><?= $pb['nama_user']; ?></a>
                                        <span>
                                            <i class="fas fa-clock"></i>
                                            <?php $tanggal = tanggal_indo($pb['created_at']);
                                                $array_tanggal = explode(" ", $tanggal);
                                            ?>
                                            <?= $array_tanggal[0]; ?> <?= $array_tanggal[1]; ?>, <?= $array_tanggal[2]; ?></span>
                                    </div>
                                </div>
                            <?php } ?>
                            <a href="<?= base_url('/semua-pengumuman'); ?>" class="more">Pengumuman lainnya,..
                                <i class="fas fa-angle-double-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- End Latest Posts -->
                </div>
                <!-- End Home Sidebar -->
            </div>
        </div>
    </div>
    <!-- End Our Features & Latest Post -->

    <!-- Berita Terkini -->
    <div class="about-area">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Berita Terkini</h2>
                        <p>
                            Berita Program Studi Magister Pendidikan Non Formal Fakultas Ilmu Pendidikan
                            Universitas Negeri Padang
                        </p>
                    </div>
                </div>
                <div id="blog" class="blog-area bottom-less">
                    <div class="container">
                        <div class="row">
                            <div class="blog-items">
                            <?php foreach ($umum_berita as $ub) { ?>
                                <!-- Single Item -->
                                <div class="col-md-3 single-item">
                                    <div class="item">
                                        <div class="thumb">
                                            <a href="<?= base_url('/berita/'.$ub['berita_slug']); ?>"><img src="<?= base_url()?>upload/berita_sampul/<?= $ub['berita_sampul']; ?>" alt="Thumb"></a>
                                            <div class="date">
                                                <?php $tanggal = tanggal_indo($ub['created_at']);
                                                $array_tanggal_beasiswa = explode(" ", $tanggal);
                                                ?>
                                                <h4><span><?= $array_tanggal_beasiswa[0]; ?></span> <?= $array_tanggal_beasiswa[1]; ?>, <?= $array_tanggal_beasiswa[2]; ?></h4>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <h4>
                                                <a href="<?= base_url('/berita/'.$ub['berita_slug']); ?>"><?= $ub['berita_judul']; ?></a>
                                            </h4>
                                            <i class="fas fa-user"></i>
                                            By
                                            <a><?= $ub['nama_user']; ?></a>&emsp;
                                            <span>
                                            <i class="fas fa-eye"></i> <?= $ub['berita_tayang']; ?></span>
                                            <div class="meta">
                                                <a href="<?= base_url('/berita/'.$ub['berita_slug']); ?>">Baca Lebih Lanjut
                                                    <i class="fas fa-angle-double-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Item -->
                                <?php }; ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End news -->

    <!-- Start Video profil ============================================= -->
    <div class="video-area padding-xl text-center bg-fixed text-light shadow dark-hard"
        style="background-image: url(assets/img/2440x1578.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="video-heading">
                        <h2><?= $video_profil['vp_judul']; ?></h2>
                        <?= $video_profil['vp_deskripsi']; ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="video-info">
                    <div class="overlay-video">
                        <iframe width="760" height="415"
                            src="<?= $video_profil['vp_youtube_link']; ?>"
                            title="<?= $video_profil['vp_youtube_title']; ?>" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Video profil -->

    <!-- Penerimaan Mahasiswa Baru ============================================= -->
    <section id="event" class="event-area circle bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Penerimaan Mahasiswa Baru</h2>
                        <p>
                            Saat ini Magister Pendidikan Non Formal FIP UNP menjadi satu-satunya lembaga pendidikan
                            Strata 2 PNF di Sumatera. Program Magister Pendidikan Non Formal FIP UNP dirancang untuk
                            menghasilkan lulusan yang memiliki kompetensi dalam merancang, mengelola, dan mengevaluasi
                            program-program pendidikan di luar sistem pendidikan formal. Di era globalisasi dan
                            perkembangan teknologi yang pesat, kebutuhan akan pendidikan non formal semakin mendesak.
                            Oleh karena itu, kami berkomitmen untuk menyediakan pendidikan berkualitas yang relevan
                            dengan dinamika sosial dan kebutuhan masyarakat.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="event-items">
                    <!-- Single Item -->
                    <div class="item horizontal col-md-12">
                        <div class="col-md-6 thumb bg-cover"
                            style="background-image: url(assets/img/Flayer-S2-PNF.jpg);"> <!-- size 1500 x 700 -->
                            <div class="date">
                                <h4><span>12</span> Dec, 2018</h4>
                            </div>
                        </div>
                        <div class="col-md-6 info">
                            <h4>
                                <a href="https://spmb.unp.ac.id/">Jadwal Penerimaan Mahasiswa Baru 2024</a>
                            </h4>
                            <div class="meta">
                                <ul>
                                    <li><i class="fas fa-calendar-alt"></i> 15 Juni, 2024</li>s/d &nbsp;
                                    <li><i class="fas fa-calendar-alt"></i> 16 Agustus, 2025</li>
                                    <li><i class="fas fa-clock"></i> 16:00 AM</li>
                                </ul>
                            </div>
                            <p>
                                Klik Tombol Daftar sekarang untuk dan mengisi biodata (nama, No.Hp dan Tanggal Lahir),
                                untuk mendapatkan nomor rekening dan besaran uang pendaftaran, UserId dan PIN;
                            </p>
                            <a href="https://spmb.unp.ac.id/" class="btn btn-dark effect btn-sm">
                                <i class="fas fa-chart-bar"></i> Detail
                            </a>
                            <a href="https://spmb.unp.ac.id/pps/" class="btn btn-gray btn-sm" target="_blank">
                                <i class="fas fa-ticket-alt"></i> Daftar Sekarang
                            </a>
                        </div>
                    </div>
                    <!-- Single Item -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Penerimaan Mahasiswa Baru -->

    <!-- Program Studi Magister Pendidikan Nonformal ============================================= -->
    <div id="top-categories" class="top-cat-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Program Studi Magister Pendidikan Nonformal <br> Fakultas Ilmu Pendidikan <br> Universitas
                            Negeri
                            Padang</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="top-cat-items">
                    <div class="col-md-3 col-sm-6 equal-height">
                        <div class="item" style="background-image: url(assets/img/800x600.png);">
                            <a href="https://pnf.fip.unp.ac.id/halaman/sertifikat-akreditasi-s2">
                                <i class="flaticon-contract"></i>
                                <div class="info">
                                    <h4>Sertifikat Akreditasi</h4>
                                    <span>Terakreditasi BAIK</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 equal-height">
                        <div class="item" style="background-image: url(assets/img/800x600.png);">
                            <a href="https://pnf.fip.unp.ac.id/halaman/kurikulum-kurikulum-program-studi-magister-s2">
                                <i class="flaticon-interaction"></i>
                                <div class="info">
                                    <h4>Kurikulum S2 PNF</h4>
                                    <span>Tahun 2023</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 equal-height">
                        <div class="item" style="background-image: url(assets/img/800x600.png);">
                            <a href="https://pnf.fip.unp.ac.id/halaman/sdm">
                                <i class="flaticon-professor"></i>
                                <div class="info">
                                    <h4>Daftar Dosen PNF</h4>
                                    <span>18 Orang</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 equal-height">
                        <div class="item" style="background-image: url(assets/img/800x600.png);">
                            <a href="http://alumni.unp.ac.id/alumni/daftar">
                                <i class="flaticon-education"></i>
                                <div class="info">
                                    <h4>Daftar Alumni PNF</h4>
                                    <span>S1 dan S2 PNF</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 equal-height">
                        <div class="item" style="background-image: url(assets/img/800x600.png);">
                            <a href="#">
                                <i class="flaticon-artificial-intelligence"></i>
                                <div class="info">
                                    <h4>Penelitian Dosen PNF</h4>
                                    <span>Update</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 equal-height">
                        <div class="item" style="background-image: url(assets/img/800x600.png);">
                            <a href="#">
                                <i class="flaticon-university-campus"></i>
                                <div class="info">
                                    <h4>Pengabdian Kepada Masyarakat</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 equal-height">
                        <div class="item" style="background-image: url(assets/img/800x600.png);">
                            <a href="#">
                                <i class="flaticon-translate"></i>
                                <div class="info">
                                    <h4>Machine Learning</h4>
                                    <span>(7,800) Topics</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 equal-height">
                        <div class="item" style="background-image: url(assets/img/800x600.png);">
                            <a href="#">
                                <i class="flaticon-firewall"></i>
                                <div class="info">
                                    <h4>Maintaining a Mindful</h4>
                                    <span>(24,80) Topics</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Program Studi Magister Pendidikan Nonformal  -->


    <!-- Start Testimonials ============================================= -->
    <div class="testimonials-area carousel-shadow default-padding bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Alumni S2 PNF FIP UNP</h2>
                        <p>
                            Able an hope of body. Any nay shyness article matters own removal nothing his
                            forming. Gay own additions education satisfied the perpetual. If he cause manor
                            happy. Without farther she exposed saw man led. Along on happy could cease green
                            oh.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="clients-review-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="col-md-5 thumb">
                                <img src="assets/img/800x800.png" alt="Thumb">
                            </div>
                            <div class="col-md-7 info">
                                <p>
                                    Procuring continued suspicion its ten. Pursuit brother are had fifteen distant
                                    has. Early had add equal china quiet visit. Appear an manner as no limits either
                                    praise..
                                </p>
                                <h4>Druna Patia</h4>
                                <span>Biology Student</span>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="col-md-5 thumb">
                                <img src="assets/img/800x800.png" alt="Thumb">
                            </div>
                            <div class="col-md-7 info">
                                <p>
                                    Procuring continued suspicion its ten. Pursuit brother are had fifteen distant
                                    has. Early had add equal china quiet visit. Appear an manner as no limits either
                                    praise..
                                </p>
                                <h4>Astron Brun</h4>
                                <span>Science Student</span>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="col-md-5 thumb">
                                <img src="assets/img/800x800.png" alt="Thumb">
                            </div>
                            <div class="col-md-7 info">
                                <p>
                                    Procuring continued suspicion its ten. Pursuit brother are had fifteen distant
                                    has. Early had add equal china quiet visit. Appear an manner as no limits either
                                    praise..
                                </p>
                                <h4>Paol Druva</h4>
                                <span>Development Student</span>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="col-md-5 thumb">
                                <img src="assets/img/800x800.png" alt="Thumb">
                            </div>
                            <div class="col-md-7 info">
                                <p>
                                    Procuring continued suspicion its ten. Pursuit brother are had fifteen distant
                                    has. Early had add equal china quiet visit. Appear an manner as no limits either
                                    praise..
                                </p>
                                <h4>Druna Patia</h4>
                                <span>Biology Student</span>
                            </div>
                        </div>
                        <!-- Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials -->
<?= $this->endSection(); ?>
