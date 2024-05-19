<?php

namespace App\Controllers;
use App\Models\HalamanModel;
use App\Models\BeritaModel;

class UserHalaman extends BaseController
{
    protected $halamanModel;
    protected $beritaModel;
    public function __construct()
    {
        // helper('form');
        $this->halamanModel = new HalamanModel();
        $this->beritaModel = new BeritaModel();
    }

    // public function semua_berita()
    // {
    //     $semuaBerita = $this->beritaModel->getPaginated(5, null, 1);
    //     $semuaPengumuman = $this->beritaModel->getAllBeritaPengumuman($limit = 4);
    //     $data = [
    //         'judul' => 'Berita Terbaru',
    //         'semuaBerita' => $semuaBerita['berita'],
    //         'pager' => $semuaBerita['pager'],
    //         'semuaPengumuman' => $semuaPengumuman
    //         // 'beritaPenting' => $beritaPenting,
    //     ];

    //     return view('home/v_semua_berita', $data);
    // }

    // public function semua_pengumuman()
    // {
    //     $semuaPengumuman = $this->beritaModel->getPaginated(5, null, 2);
    //     $semuaBerita = $this->beritaModel->getAllBeritaUmum($limit = 5);
    //     $data = [
    //         'judul' => 'Berita Terbaru',
    //         'semuaPengumuman' => $semuaPengumuman['berita'],
    //         'pager' => $semuaPengumuman['pager'],
    //         'semuaBerita' => $semuaBerita
    //     ];

    //     return view('home/v_semua_pengumuman', $data);
    // }

    public function detail_halaman($slug = null)
    {
        $detailHalaman = $this->halamanModel->getDetailForUser($slug);
        $semuaPengumuman = $this->beritaModel->getAllBeritaPengumuman($limit = 4);
        if (empty($detailHalaman)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul berita ' .$slug. ' tidak ditemukan');
        }
        $data = [
            'judul' => $detailHalaman['halaman_nama'],
            'detailHalaman' => $detailHalaman,
            'semuaPengumuman' => $semuaPengumuman
        ];

        return view('home/v_detail_halaman', $data);
    }

    // public function detail_pengumuman($slug = null)
    // {
    //     $detailPengumuman = $this->beritaModel->getDetailForUser($slug);
    //     $semuaBerita = $this->beritaModel->getAllBeritaUmum($limit = 4);
    //     if (empty($detailPengumuman)) {
    //         throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul berita ' .$slug. ' tidak ditemukan');
    //     }
    //     $data = [
    //         'judul' => 'Detail Berita',
    //         'detailPengumuman' => $detailPengumuman,
    //         'semuaBerita' => $semuaBerita
    //     ];

    //     return view('home/v_detail_pengumuman', $data);
    // }

    // public function berita_beasiswa()
    // {
    //     $semuaBerita = $this->beritaModel->getPaginated(5, null, 1);
    //     $beritaPenting = $this->beritaModel->getAllBeritaPenting(4);
    //     $data = [
    //         'judul' => 'Berita Beasiswa',
    //         'semuaBerita' => $semuaBerita['berita'],
    //         'pager' => $semuaBerita['pager'],
    //         'beritaPenting' => $beritaPenting
    //     ];
    //     return view('home/v_semua_berita', $data);
    // }

    // public function berita_prestasi()
    // {
    //     $prestasiBerita = $this->beritaModel->getPaginated(5, null, 3);
    //     $beritaPenting = $this->beritaModel->getAllBeritaPenting(4);

    //     $data = [
    //         'judul' => 'Berita Prestasi',
    //         'semuaBerita' => $prestasiBerita['berita'],
    //         'pager' => $prestasiBerita['pager'],
    //         'beritaPenting' => $beritaPenting

    //     ];
    //     return view('home/v_semua_berita', $data);
    // }

    // public function berita_organisasi()
    // {
    //     $organisasiBerita = $this->beritaModel->getPaginated(5, null, 2);
    //     $beritaPenting = $this->beritaModel->getAllBeritaPenting(4);
    //     $data = [
    //         'judul' => 'Berita Organisasi',
    //         'semuaBerita' => $organisasiBerita['berita'],
    //         'pager' => $organisasiBerita['pager'],
    //         'beritaPenting' => $beritaPenting

    //     ];
    //     return view('home/v_semua_berita', $data);
    // }



}
