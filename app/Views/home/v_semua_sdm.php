<?= $this->extend('layout_front_end/template'); ?>
<?= $this->section('content'); ?>
<div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(<?= base_url('template_front_end/assets/img/foto_rektorat.jpg')?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?= $judul; ?></h1>
                    <ul class="breadcrumb">
                        <li><a href="/"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Semua SDM</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="wcs-area default-padding bg-light content-default">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Dosen Pendidikan Non Formal</h2>
                        <h4>
                            Dosen Program Studi Pendidikan Non Formal Fakultas Ilmu Pendidikan
                            Universitas Negeri Padang
                        </h4>
                    </div>
                </div>
                <div class="col-md-12 content">
                    <?php foreach ($semuaDosen as $sd) { ?>
                    <div class="panel-heading" style="display: flex; align-items: center;">
                        <img
                            src="<?= $sd['foto'] == null ?  base_url('/no-photo.jpg')  : base_url('/upload/foto_dosen/').$sd['foto']; ?>"
                            alt="Circular Image"
                            style="border-radius: 50%; width: 100px; height: 100px; object-fit: cover; margin-right: 20px;">
                        <div>
                            <h3>
                                <a href="<?= base_url('/sdm/detail/'.$sd['nidn']); ?>"><?= $sd['peg_gel_dep']; ?> <?= $sd['peg_nama']; ?>, <?= $sd['peg_gel_bel']; ?></a>
                            </h3>
                            <h5>NIP : <?= $sd['peg_nip']; ?></h5>
                            <p>
                                <?= $sd['bio']; ?>
                            </p>
                            <a href="<?= base_url('/sdm/detail/'.$sd['nidn']); ?>" class="button-sm button-theme">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="row">
                        <div class="col-md-12 pagi-area">
                        <?= $pager->links('default', 'pagination'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
<?= $this->endSection(); ?>
