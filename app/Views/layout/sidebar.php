<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <?php if(session()->get('level') == '1') { ?>
            <!-- menu yang bisa di akses oleh super-admin -->
        <ul class="nav side-menu">
            <h3>General</h3>
            <br />
            <li><a href="<?= base_url('/dashboard'); ?>"><i class="fa fa-home"></i> Dashboard</a></li>
            <br />
            <h3>Halaman</h3>
            <br />
            <li><a href="<?= base_url('/admin/menu'); ?>"><i class="fa fa-university"></i> Kategori Halaman</a></li>
            <li><a href="<?= base_url('/admin/halaman'); ?>"><i class="fa fa-university"></i> Halaman</a></li>
            <br />
            <h3>Pengaturan</h3>
            <br />
            <li><a><i class="fa fa-gear"></i> User <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="<?= base_url('/user_level'); ?>">User Level</a></li>
                    <li><a href="<?= base_url('/user'); ?>">User</a></li>
                </ul>
            </li>
            <br />
                <h3>Post</h3>
                <br />
                <li><a><i class="fa fa-book"></i>  Berita <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="<?= base_url('/admin/berita'); ?>"> Berita</a></li>
                        <li><a href="<?= base_url('/admin/berita/tambah'); ?>">Buat Berita</a></li>
                    </ul>
                </li>
                <li><a href="<?= base_url('/admin/pengumuman'); ?>"><i class="fa fa-bullhorn"></i> Pengumuman</a></li> 
        </ul>
        <!-- akhir dari super admin -->
        <?php } ?>

        <?php if(session()->get('level') == '2') { ?>
            <!-- menu untuk admin -->
            <ul class="nav side-menu">
                <h3>General</h3>
                <br />
                <li><a href="<?= base_url('/dashboard'); ?>"><i class="fa fa-home"></i> Dashboard</a></li>
                <br />
                <h3>Halaman</h3>
                <li><a href="<?= base_url('/admin/menu'); ?>"><i class="fa fa-university"></i> Kategori Halaman</a></li> 
                <li><a href="<?= base_url('/admin/halaman'); ?>"><i class="fa fa-university"></i> Halaman</a></li>
                <br />
                <h3>Pengaturan</h3>
                <br />
                <li><a href="<?= base_url('/admin/visi-misi'); ?>"><i class="fa fa-university"></i> Visi Misi</a></li> 
                <li><a href="<?= base_url('/admin/grafik-mahasiswa'); ?>"><i class="fa fa-bar-chart"></i> Grafik Mahasiswa</a></li> 
                <br />
                <h3>Post</h3>
                <br />
                <li><a href="<?= base_url('/penyimpanan-gambar'); ?>"><i class="fa fa-photo"></i> Penyimpanan Gambar</a></li>
                <li><a><i class="fa fa-book"></i>  Berita <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="<?= base_url('/admin/berita'); ?>"> Berita</a></li>
                        <li><a href="<?= base_url('/admin/berita/tambah'); ?>">Buat Berita</a></li>
                        <li><a href="<?= base_url('/admin/kategori'); ?>">Kategori</a></li>
                    </ul>
                </li>
                <li><a href="<?= base_url('/admin/pengumuman'); ?>"><i class="fa fa-bullhorn"></i> Pengumuman</a></li> 
                <li><a href="<?= base_url('/admin/video-profil'); ?>"><i class="fa fa-youtube-play"></i> Video Profil</a></li> 
                <li><a href="<?= base_url('/admin/prestasi'); ?>"><i class="fa fa-graduation-cap"></i> Prestasi</a></li> 
                <li><a href="<?= base_url('/admin/agenda'); ?>"><i class="fa fa-calendar"></i> Agenda</a></li> 
                <li><a href="<?= base_url('/admin/download'); ?>"><i class="fa fa-file-pdf-o"></i> Download</a></li>
                <li><a href="<?= base_url('/admin/ukormawa'); ?>"><i class="fa fa-group"></i> Unit Kegiatan / Ormawa</a></li>
            </ul>
            <!-- akhir dari admin -->
        <?php } ?>
    </div>
<!-- <div class="menu_section">
    <h3>Live On</h3>
    <ul class="nav side-menu">
    <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
        <li><a href="e_commerce.html">E-commerce</a></li>
        <li><a href="projects.html">Projects</a></li>
        <li><a href="project_detail.html">Project Detail</a></li>
        <li><a href="contacts.html">Contacts</a></li>
        <li><a href="profile.html">Profile</a></li>
        </ul>
    </li>
    <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
        <li><a href="page_403.html">403 Error</a></li>
        <li><a href="page_404.html">404 Error</a></li>
        <li><a href="page_500.html">500 Error</a></li>
        <li><a href="plain_page.html">Plain Page</a></li>
        <li><a href="login.html">Login Page</a></li>
        <li><a href="pricing_tables.html">Pricing Tables</a></li>
        </ul>
    </li>
    <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            <li><a href="#level1_1">Level One</a>
            <li><a>Level One<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li class="sub_menu"><a href="level2.html">Level Two</a>
                </li>
                <li><a href="#level2_1">Level Two</a>
                </li>
                <li><a href="#level2_2">Level Two</a>
                </li>
            </ul>
            </li>
            <li><a href="#level1_2">Level One</a>
            </li>
        </ul>
    </li>                  
    <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
    </ul>
</div> -->

</div>
<!-- /sidebar menu -->