<?php

namespace App\Controllers;
use App\Models\BeritaModel;
use App\Models\KunjunganModel;
use App\Models\VideoProfilModel;
use App\Models\PengaturanModel;
use App\Models\PrestasiModel;
class Home extends BaseController
{
    protected $beritaModel;
    protected $kunjunganModel;
    protected $videoProfilModel;
    protected $pengaturanModel;
    protected $prestasiModel;
    public function __construct()
    {
        $this->beritaModel = new BeritaModel();
        $this->kunjunganModel = new KunjunganModel();
        $this->videoProfilModel = new VideoProfilModel();
        $this->pengaturanModel = new PengaturanModel();
        $this->prestasiModel = new PrestasiModel();
    }
    public function index()
    {
        $tanggal_diproses_admin = date('Y-m-d H:i:s');
        $data = [
            'kunjungan_nama' => $tanggal_diproses_admin
        ];
        $this->kunjunganModel->insert($data);
        $umumBerita = $this->beritaModel->getAllBeritaUmum($limit = 4);
        $pentingBerita = $this->beritaModel->getAllBeritaPenting();
        $pengumumanBerita = $this->beritaModel->getAllBeritaPengumuman($limit = 5);
        $videoProfil = $this->videoProfilModel->getLastActive('s1');
        $visiMisi = $this->pengaturanModel->getVisiMisi('s1');
        $headerPrestasi = $this->pengaturanModel->getHeaderPrestasi();
        $prestasi = $this->prestasiModel->getAll($limit = 4);
        $data = [
            'judul' => 'Home',
            'penting_berita' => $pentingBerita,
            'umum_berita' => $umumBerita,
            'pengumuman_berita' => $pengumumanBerita,
            'video_profil' => $videoProfil,
            'visi_misi' => $visiMisi,
            'prestasi' => $prestasi,
            'headerPrestasi' => $headerPrestasi
        ];
        return view('home/v_home', $data);
    }

    public function s_dua()
    {
        $tanggal_diproses_admin = date('Y-m-d H:i:s');
        $data = [
            'kunjungan_nama' => $tanggal_diproses_admin
        ];
        $this->kunjunganModel->insert($data);
        $pengumumanBerita = $this->beritaModel->getAllBeritaPengumuman($limit = 5);
        $visiMisi = $this->pengaturanModel->getVisiMisi('s2');
        $umumBerita = $this->beritaModel->getAllBeritaUmum($limit = 4);
        $videoProfil = $this->videoProfilModel->getLastActive('s2');

        $data = [
            'judul' => 'Pendidikan Non Formal S2',
            'pengumuman_berita' => $pengumumanBerita,
            'umum_berita' => $umumBerita,
            'visi_misi' => $visiMisi,
            'video_profil' => $videoProfil,
        ];

        return view('home/v_home_s_dua', $data);
    }

    public function semuaPrestasi()
    {
        $data = [
            'judul' => 'Daftar Prestasi',
        ];

        return view('home/v_semua_prestasi', $data);
    }
}
