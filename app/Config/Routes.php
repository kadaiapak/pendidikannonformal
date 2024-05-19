<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//  route untuk home
$routes->get('/', 'Home::index');
$routes->get('/profil-ditmawa', 'Home::profilDitmawa');
$routes->get('/struktur-organisasi', 'Home::strukturOrganisasi');
$routes->get('/unit-kegiatan', 'Home::unitKegiatan');
$routes->get('/semua-prestasi', 'Home::semuaPrestasi');
$routes->get('/panduan-bebas-ukt', 'Home::panduanBebasUkt');
$routes->get('/panduan-sib', 'Home::panduanSib');

$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'adminDanSuperAdminFilter']);

// ROUTE BERITA
    // ROUTE UNTUK BERITA USER
    $routes->get('/semua-berita', 'UserBerita::semua_berita');
    $routes->get('/berita/(:any)', 'UserBerita::detail_berita/$1');
    // $routes->get('/berita-beasiswa', 'UserBerita::berita_beasiswa');
    // $routes->get('/berita-organisasi', 'UserBerita::berita_organisasi');
    // $routes->get('/berita-prestasi', 'UserBerita::berita_prestasi');
    // AKHIR ROUTE UNTUK BERITA USER

    // ROUTE UNTUK BERITA ADMIN
    $routes->get('admin/berita', 'Berita::index',['filter' => 'adminDanSuperAdminFilter']);
    $routes->get('admin/berita/detail/(:any)', 'Berita::detail');
    $routes->get('admin/berita/tambah', 'Berita::tambah',['filter' => 'adminFilter']);
    $routes->post('admin/berita/simpan', 'Berita::simpan',['filter' => 'adminFilter']);
    $routes->get('admin/berita/edit/(:any)', 'Berita::edit/$1' ,['filter' => 'adminDanSuperAdminFilter']);
    $routes->post('admin/berita/update/(:any)', 'Berita::update/$1' ,['filter' => 'adminDanSuperAdminFilter']);
    $routes->get('admin/berita/hapus/(:any)', 'Berita::hapus/$1');
    // AHKIR ROUTE BERITA ADMIN
// AKHIR ROUTE BERITA

// ROUTE PRESTASI
    // ROUTE UNTUK PRESTASI USER
    $routes->get('/semua-prestasi', 'UserPrestasi::semua_prestasi');
    $routes->get('/prestasi/(:any)', 'UserPrestasi::detail_prestasi/$1');
    // $routes->get('/berita-beasiswa', 'UserBerita::berita_beasiswa');
    // $routes->get('/berita-organisasi', 'UserBerita::berita_organisasi');
    // $routes->get('/berita-prestasi', 'UserBerita::berita_prestasi');
    // AKHIR ROUTE UNTUK BERITA USER

    // ROUTE UNTUK PRESTASI ADMIN
    $routes->get('admin/prestasi', 'Prestasi::index',['filter' => 'adminDanSuperAdminFilter']);
    $routes->get('admin/prestasi/tambah', 'Prestasi::tambah',['filter' => 'adminDanSuperAdminFilter']);
    $routes->post('admin/prestasi/simpan', 'Prestasi::simpan',['filter' => 'adminDanSuperAdminFilter']);
    $routes->get('admin/prestasi/edit/(:any)', 'Prestasi::edit/$1' ,['filter' => 'adminDanSuperAdminFilter']);
    $routes->post('admin/prestasi/update/(:any)', 'Prestasi::update/$1' ,['filter' => 'adminDanSuperAdminFilter']);
    $routes->get('admin/prestasi/edit-header', 'Prestasi::edit_header' ,['filter' => 'adminDanSuperAdminFilter']);
    $routes->post('admin/prestasi/update-header-prestasi', 'Prestasi::update_header_prestasi' ,['filter' => 'adminDanSuperAdminFilter']);
    // $routes->get('admin/berita/detail/(:any)', 'Berita::detail');
    // $routes->get('admin/berita/hapus/(:any)', 'Berita::hapus/$1');
    // AHKIR ROUTE PRESTASI ADMIN
// AKHIR ROUTE PRESTASI

// ROUTE UNTUK PENGUMUMAN
     // ROUTE UNTUK PENGUMUMAN USER
     $routes->get('/semua-pengumuman', 'UserBerita::semua_pengumuman');
     $routes->get('/pengumuman/(:any)', 'UserBerita::detail_pengumuman/$1');
    //  $routes->get('/berita-beasiswa', 'UserBerita::berita_beasiswa');
    //  $routes->get('/berita-organisasi', 'UserBerita::berita_organisasi');
    //  $routes->get('/berita-prestasi', 'UserBerita::berita_prestasi');
     // AKHIR ROUTE UNTUK PENGUMUMAN USER
// ROUTE UNTUK PENGUMUMAN
// AKHIR ROUTE UNTUK PENGUMUMAN

// ROUTE UNTUK KATEGORI
    $routes->get('admin/kategori', 'Kategori::index',['filter' => 'adminDanSuperAdminFilter']);
    $routes->get('admin/kategori/tambah', 'Kategori::tambah',['filter' => 'adminDanSuperAdminFilter']);
    $routes->post('admin/kategori/simpan', 'Kategori::simpan',['filter' => 'adminDanSuperAdminFilter']);
    $routes->get('admin/kategori/edit/(:any)', 'Kategori::edit/$1' ,['filter' => 'adminDanSuperAdminFilter']);
    $routes->post('admin/kategori/update/(:any)', 'Kategori::update/$1' ,['filter' => 'adminDanSuperAdminFilter']);
// AKHIR ROUTE UNTUK KATEGORI

// ROUTE UNTUK VIDEO PROFIL
$routes->get('admin/video-profil', 'VideoProfil::index',['filter' => 'adminDanSuperAdminFilter']);
$routes->get('admin/video-profil/tambah', 'VideoProfil::tambah',['filter' => 'adminDanSuperAdminFilter']);
$routes->post('admin/video-profil/simpan', 'VideoProfil::simpan',['filter' => 'adminDanSuperAdminFilter']);
$routes->get('admin/video-profil/edit/(:any)', 'VideoProfil::edit/$1' ,['filter' => 'adminDanSuperAdminFilter']);
$routes->post('admin/video-profil/update/(:any)', 'VideoProfil::update/$1' ,['filter' => 'adminDanSuperAdminFilter']);
// AKHIR ROUTE UNTUK VIDEO PROFIL

// ROUTE UNTUK VISI MISI
$routes->get('admin/visi-misi', 'VisiMisi::index',['filter' => 'adminDanSuperAdminFilter']);
$routes->get('admin/visi-misi/tambah', 'VisiMisi::tambah',['filter' => 'adminDanSuperAdminFilter']);
$routes->post('admin/visi-misi/simpan', 'VisiMisi::simpan',['filter' => 'adminDanSuperAdminFilter']);
$routes->get('admin/visi-misi/edit/(:any)', 'VisiMisi::edit/$1' ,['filter' => 'adminDanSuperAdminFilter']);
$routes->post('admin/visi-misi/update/(:any)', 'VisiMisi::update/$1' ,['filter' => 'adminDanSuperAdminFilter']);
// AKHIR ROUTE UNTUK VISI MISI

// ROUTE UNTUK VISI MISI
$routes->get('admin/grafik-mahasiswa', 'GrafikMahasiswa::index',['filter' => 'adminDanSuperAdminFilter']);
$routes->get('admin/grafik-mahasiswa/edit/(:any)', 'GrafikMahasiswa::edit/$1' ,['filter' => 'adminDanSuperAdminFilter']);
$routes->post('admin/grafik-mahasiswa/update/(:any)', 'GrafikMahasiswa::update/$1' ,['filter' => 'adminDanSuperAdminFilter']);
// $routes->get('admin/visi-misi/tambah', 'VisiMisi::tambah',['filter' => 'adminDanSuperAdminFilter']);
// $routes->post('admin/visi-misi/simpan', 'VisiMisi::simpan',['filter' => 'adminDanSuperAdminFilter']);
// AKHIR ROUTE UNTUK VISI MISI

// ROUTE DOWNLOAD
    // ROUTE DOWNLOAD UNTUK ADMIN
    $routes->get('admin/download', 'Download::index',['filter' => 'adminFilter']);
    $routes->get('admin/download/tambah', 'Download::tambah',['filter' => 'adminFilter']);
    $routes->post('admin/download/simpan', 'Download::simpan',['filter' => 'adminFilter']);
    $routes->get('admin/download/edit/(:any)', 'Download::edit/$1' ,['filter' => 'adminDanSuperAdminFilter']);
    $routes->post('admin/download/update/(:any)', 'Download::update/$1' ,['filter' => 'adminDanSuperAdminFilter']);
    // AKHIR ROUTE DOWNLOAD UNTUK ADMIN

    // ROUTE DOWNLOAD UNTUK USER
    $routes->get('/semua-download', 'UserDownload::semua_download');
    $routes->get('/semua-download/(:any)', 'UserDownload::download/$1');
    // AKHIR ROUTE DOWNLOAD UNTUK USER
// AKHIR ROUTE DOWNLOAD

// ROUTE UNTUK AGENDA
    // ROUTE UNTUK AGENDA ADMIN
    $routes->get('admin/agenda', 'Agenda::admin_agenda',['filter' => 'adminFilter']);
    $routes->get('admin/agenda/tambah', 'Agenda::tambah',['filter' => 'adminFilter']);
    $routes->post('admin/agenda/simpan', 'Agenda::simpan',['filter' => 'adminFilter']);
    $routes->get('admin/agenda/edit/(:any)', 'Agenda::edit/$1',['filter' => 'adminDanSuperAdminFilter']);
    $routes->post('admin/agenda/update/(:any)', 'Agenda::update/$1' ,['filter' => 'adminDanSuperAdminFilter']);
    // AKHIR ROUTE UNTUK AGENDA ADMIN

    // ROUTE AGENDA USER
    $routes->get('/semua-agenda', 'UserAgenda::semua_agenda');
    // AKHIR ROUTE AGENDA USER
// AKHIR ROUTE AGENDA

// ROUTE UNTUK UKORMAWA
    // ROUTE UKORMAWA ADMIN
    $routes->get('admin/ukormawa', 'Ukormawa::admin_ukormawa',['filter' => 'adminFilter']);
    $routes->get('admin/ukormawa/tambah', 'Ukormawa::tambah',['filter' => 'adminFilter']);
    $routes->post('admin/ukormawa/simpan', 'Ukormawa::simpan',['filter' => 'adminFilter']);
    $routes->get('admin/ukormawa/edit/(:any)', 'Ukormawa::edit/$1',['filter' => 'adminDanSuperAdminFilter']);
    $routes->post('admin/ukormawa/update/(:any)', 'Ukormawa::update/$1' ,['filter' => 'adminDanSuperAdminFilter']);
    // AKHIR ROUTE UKORMAWA ADMIN
// AKHIR ROUTE UKORMAWA

// ROUTE UNTUK PENYIMPANAN GAMBAR ADMIN
$routes->get('penyimpanan-gambar', 'PenyimpananGambar::index',['filter' => 'adminFilter']);
$routes->get('penyimpanan-gambar/tambah', 'PenyimpananGambar::tambah',['filter' => 'adminFilter']);
$routes->post('penyimpanan-gambar/simpan', 'PenyimpananGambar::simpan',['filter' => 'adminFilter']);
// AKHIR ROUTE PENYIMPANAN GAMBAR ADMIN


// ROUTE LOGIN
$routes->get('/auth/login', 'Auth::login');
$routes->get('/auth/logout', 'Auth::logout');
$routes->post('/auth/loginProcess', 'Auth::loginProcess');
// AKHIR ROUTE LOGIN

// route untuk User Level
    // bisa di akses oleh super admin 
    $routes->get('/user_level', 'UserLevel::index', ['filter' => 'superAdminFilter']);
    // bisa di akses oleh super admin 
    $routes->get('/user_level/tambah', 'UserLevel::tambah', ['filter' => 'superAdminFilter']);
    // bisa di akses oleh super admin 
    $routes->post('/user_level/simpan', 'UserLevel::simpan', ['filter' => 'superAdminFilter']);
    // bisa di akses oleh super admin 
    $routes->get('/user_level/(:any)/edit', 'UserLevel::edit/$1', ['filter' => 'superAdminFilter']);
    // bisa di akses oleh super admin 
    $routes->post('/user_level/(:any)/update', 'UserLevel::update/$1', ['filter' => 'superAdminFilter']);
// akhir dari route untuk User 

// route untuk User
    // bisa di akses oleh super admin 
    $routes->get('/user', 'User::index', ['filter' => 'superAdminFilter']);
    // bisa di akses oleh super admin 
    $routes->get('/user/tambah', 'User::tambah', ['filter' => 'superAdminFilter']);
    // bisa di akses oleh super admin 
    $routes->post('/user/simpan', 'User::simpan', ['filter' => 'superAdminFilter']);
    // bisa di akses oleh super admin 
    $routes->get('/user/(:any)/edit', 'User::edit/$1', ['filter' => 'superAdminFilter']);
    // bisa di akses oleh super admin 
    $routes->post('/user/(:any)/update', 'User::update/$1', ['filter' => 'superAdminFilter']);
// akhir dari route untuk User

// ROUTE PROFIL
    // diakses oleh mahasiswa untuk meilhat detail profil mereka
    $routes->get('/profil', 'Profil::index', ['filter' => 'mahasiswaFilter']);
    // diakses mahasiswa untuk melakukan verifikasi data pertama kali saat dia menggunakan aplikasi ini
    $routes->get('/profil/verifikasi', 'Profil::verifikasi', ['filter' => 'mahasiswaFilter']);
    // diakses mahasiswa untuk melakukan verifikasi data pertama kali saat dia menggunakan aplikasi ini
    $routes->post('/profil/update_verifikasi', 'Profil::update_verifikasi', ['filter' => 'mahasiswaFilter']);
// AKHIR ROUTE PROFIL

// ROUNTE UNTUK MENU
    // bisa di akses oleh super admin 
    $routes->get('/admin/menu', 'Menu::index', ['filter' => 'adminDanSuperAdminFilter']);

    // bisa di akses oleh super admin 
    $routes->get('/admin/menu/tambah-menu', 'Menu::tambah_menu', ['filter' => 'adminDanSuperAdminFilter']);
    // bisa di akses oleh super admin 
    $routes->get('/admin/menu/tambah-submenu', 'Menu::tambah_submenu', ['filter' => 'adminDanSuperAdminFilter']);
    // bisa di akses oleh super admin 
    $routes->post('/admin/menu/simpan-menu', 'Menu::simpan_menu', ['filter' => 'adminDanSuperAdminFilter']);
    // bisa di akses oleh super admin 
    $routes->post('/admin/menu/simpan-submenu', 'Menu::simpan_submenu', ['filter' => 'adminDanSuperAdminFilter']);

    // bisa di akses oleh super admin 
    $routes->get('/admin/menu/edit-menu/(:num)', 'Menu::edit_menu/$1', ['filter' => 'adminDanSuperAdminFilter']);
    // bisa di akses oleh super admin 
    $routes->get('/admin/menu/edit-submenu/(:num)', 'Menu::edit_submenu/$1', ['filter' => 'adminDanSuperAdminFilter']);
    // bisa di akses oleh super admin 
    $routes->post('/admin/menu/update-menu/(:num)', 'Menu::update_menu/$1', ['filter' => 'adminDanSuperAdminFilter']);
    // bisa di akses oleh super admin 
    $routes->post('/admin/menu/update-submenu/(:num)', 'Menu::update_submenu/$1', ['filter' => 'adminDanSuperAdminFilter']);

    // bisa di akses oleh super admin 
    $routes->delete('/admin/menu/hapus/(:num)', 'Menu::hapus/$1', ['filter' => 'adminDanSuperAdminFilter']);
// AKHIR dari ROUTE UNTUK MENU

// ROUTE BERITA
    $routes->get('admin/halaman', 'Halaman::index',['filter' => 'adminDanSuperAdminFilter']);
    $routes->get('admin/halaman/detail/(:any)', 'Halaman::detail/$1',['filter' => 'adminDanSuperAdminFilter']);
    $routes->get('admin/halaman/tambah', 'Halaman::tambah',['filter' => 'adminDanSuperAdminFilter']);
    $routes->post('admin/halaman/simpan', 'Halaman::simpan',['filter' => 'adminFilter']);
    $routes->get('admin/halaman/edit/(:any)', 'Halaman::edit/$1' ,['filter' => 'adminDanSuperAdminFilter']);
    $routes->post('admin/halaman/update/(:any)', 'Halaman::update/$1' ,['filter' => 'adminDanSuperAdminFilter']);
    $routes->delete('admin/halaman/hapus/(:any)', 'Halaman::hapus/$1');
// AKHIR ROUTE BERITA

// ROUTE UNTUK BERITA DI HOME
    $routes->get('halaman/(:any)', 'UserHalaman::detail_halaman/$1');
// AKHIR DARI ROUTE UNTUK BERITA DI HOME


    


