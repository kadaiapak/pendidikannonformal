<?= $this->extend('layout_front_end/template'); ?>
<?= $this->section('content'); ?>
<!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(<?= base_url('template_front_end/assets/img/foto_rektorat.jpg')?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Detail Dosen</h1>
                    <ul class="breadcrumb">
                        <li><a href="/"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="<?= base_url('/halaman/sdm'); ?>">SDM</a></li>
                        <li class="active">Detail</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Advisor Details 
    ============================================= -->
    <div class="adviros-details-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5 thumb">
                    <img src="<?= $detailDosen['foto'] == null ? base_url('/no-photo.jpg')  : base_url('/upload/foto_dosen/').$detailDosen['foto']; ?>" alt="Thumb">
                    <div class="desc">
                        <h4><?= $detailDosen['peg_gel_dep']; ?> <?= $detailDosen['peg_nama']; ?>, <?= $detailDosen['peg_gel_bel']; ?></h4>
                        <span></span>
                        <ul>
                            <li>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-skype"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7 info main-content">
                    <!-- Star Tab Info -->
                    <div class="tab-info">
                        <!-- Tab Nav -->
                        <ul class="nav nav-pills">
                            <li class="active">
                                <a data-toggle="tab" href="#tab1" aria-expanded="true">
                                    Biografi
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab2" aria-expanded="true">
                                    Peta Jalan
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab3" aria-expanded="true">
                                    KONTAK
                                </a>
                            </li>
                        </ul>
                        <!-- End Tab Nav -->
                        <!-- Start Tab Content -->
                        <div class="tab-content tab-content-info">
                            <!-- Single Tab -->
                            <div id="tab1" class="tab-pane fade active in">
                                <div class="info title">
                                    <?= $detailDosen['bio']; ?>
                                    <ul>
                                        <li>
                                            Jabatan Fungsional <span><?= $detailDosen['peg_jabatan']; ?></span>
                                        </li>
                                        <li>
                                            Pendidikan Terakhir <span><?= $detailDosen['peg_pendidikan']; ?></span>
                                        </li>
                                        <li>
                                            Homebase <span><?= $detailDosen['home_base']; ?></span>
                                        </li>
                                        <li>
                                            Tempat Lahir <span><?= $detailDosen['peg_tmp_lahir']; ?></span>
                                        </li>
                                        <li>
                                            Tanggal Lahir <span><?= tanggal_indo($detailDosen['peg_tgl_lahir']); ?></span>
                                        </li>
                                        <li>
                                            Jenis Kelamin <span><?= $detailDosen['peg_sex'] == 'L' ? 'Laki - laki' : ($detailDosen['peg_sex'] == 'P' ? 'Perempuan' : null); ?></span>
                                        </li>
                                        <li>
                                            Agama <span><?= $detailDosen['peg_agama']; ?></span>
                                        </li>
                                        <li>
                                            Scopus ID <a href="<?= $detailDosen['scopus_id']; ?>" target="_blank" rel="noopener noreferrer"><span><?= $detailDosen['scopus_id']; ?></span></a>
                                        </li>
                                        <li>
                                            Google Schoolar <a href="<?= $detailDosen['google_schoolar']; ?>" target="_blank" rel="noopener noreferrer"><span><?= $detailDosen['google_schoolar']; ?></span></a>
                                        </li>
                                        <li>
                                            Hand Book <a href="<?= $detailDosen['hand_book']; ?>" target="_blank" rel="noopener noreferrer"><span><?= $detailDosen['hand_book']; ?></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Tab -->
                            <div id="tab2" class="row tab-pane fade magnific-mix-gallery masonary">
                                <a href="<?= base_url('/upload/foto_dosen/'.$detailDosen['gambar_roadmap']); ?>" class="item popup-link"><img src="<?= base_url('/upload/foto_dosen/'.$detailDosen['gambar_roadmap']); ?>" alt="thumb" /></a>
                                <p>
                                    <?= $detailDosen['deskripsi_roadmap']; ?>
                                </p>
                            </div>
                            <!-- End Single Tab -->

                            <!-- Single Tab -->
                            <div id="tab3" class="tab-pane">
                                <div class="info title">
                                    <ul>
                                        <li>
                                            Phone <span>-</span>
                                        </li>
                                        <li>
                                            Email <span><?= $detailDosen['peg_email']; ?></span>
                                        </li>
                                        <li>
                                            Alamat <span><?= $detailDosen['peg_alamat']; ?> </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Tab -->
                        </div>
                        <!-- End Tab Content -->
                    </div>
                    <!-- End Tab Info -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Advisor Details -->
<?= $this->endSection(); ?>
