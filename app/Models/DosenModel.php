<?php

namespace App\Models;

use CodeIgniter\Model;

class DosenModel extends Model
{
    protected $table = 'fip_dosen';
    protected $primaryKey = 'nidn';

    protected $useTimestamps = true;
    protected $allowedFields = [
    'nidn',
    'peg_nip',
    'peg_gel_dep',
    'peg_nama',
    'peg_gel_bel',
    'foto',
    'bio',
    'home_base',
    'google_schoolar',
    'scopus_id',
    'hand_book',
    'gambar_roadmap',
    'deskripsi_roadmap',    
    'peg_status',
    'peg_bidan',
    'peg_pangkat',
    'peg_golongan',
    'peg_jabatan',
    'peg_tmp_lahir',
    'peg_tgl_lahir',
    'peg_sex',
    'peg_agama',
    'peg_prodi',
    'peg_pendidikan',
    'peg_tmt',
    'peg_no_sk',
    'peg_kota',
    'peg_pro',
    'peg_kawin',
    'peg_telp',
    'peg_hp',
    'nohp_baru',
    'no_wa',
    'peg_email',
    'email_baru',
    'peg_status_aktif',
    'peg_alamat',
    'alamat_baru',
    'verifikasi',
];

    // untuk menampilkan semua dosen
    // get UserSdm->sdm()
    public function getPaginated($num, $keyword = null){
            $this->builder()
            ->select('fip_dosen.*');
        return[
            'dosen' => $this->paginate($num),
            'pager' => $this->pager,
        ];
    }

    // untuk menampilkan semua dosen
    public function getAll($departemen = null)
    {
        if($departemen != null) {
            $build = $this->db->query(
                "SELECT fip_dosen.peg_nama, fip_dosen.nidn, fip_dosen.peg_nip, fip_dosen.peg_gel_dep, fip_dosen.peg_gel_bel, fip_dosen.peg_prodi,
                FROM fip_dosen 
                WHERE fip_dosen.peg_prodi = '$departemen' ORDER BY total_membimbing ASC");
            $result = $build->getResult();
            return $result;
        }else {
            $build = $this->db->query(
                "SELECT fip_dosen.peg_nama, fip_dosen.nidn, fip_dosen.peg_nip, fip_dosen.peg_gel_dep, fip_dosen.peg_gel_bel, 
                FROM fip_dosen ORDER BY total_membimbing DESC");
            $result = $build->getResult();
            return $result;
        }
    }

    // untuk menampilkan semua dosen
    // master-dosen/index
    public function getAllDosen($departemen = null)
    {
        $build = $this->db->query(
            "SELECT *
            FROM fip_dosen
            ORDER BY peg_nama ASC");
        $result = $build->getResultArray();
        return $result;
    }

    // untuk menampilkan detail dosen
    // digunakan oleh ProfilDosen::verifikasi
    public function getDetail($nidn = null)
    {
        $builder = $this->db->table('fip_dosen');
        $builder->select('fip_dosen.*');
        $builder->where('nidn', $nidn);
        $query = $builder->get();
        return $query->getRowArray();
    }

     // digunakan sewaktu pertama kali login di aplikasi ini, untuk cek apakah dosen tersebut sudah memperbaharui data profil
    // digunakan oleh Auth::loginProcess
    public function cekIsVerifiedDosen($username = '')
    {
        $builder = $this->db->table('fip_dosen');
        $builder->select('verifikasi');
        $builder->where('nidn', $username);
        $query = $builder->get();
        return $query->getRowArray(); 
    }

    public function updateVerifikasiProfil($data, $username)
    {
        $builder = $this->db->table('fip_dosen');
        $builder->set($data);
        $builder->where('nidn', $username);
        $builder->update();
    }

    public function getAllGelarDepan()
    {
        $build = $this->db->query(
            "SELECT nidn, peg_gel_dep, peg_nama, peg_gel_bel, peg_gel_dep
            FROM fip_dosen
            GROUP BY peg_gel_dep
            ORDER BY peg_gel_dep ASC");
        $result = $build->getResultArray();
        return $result;
    }

    public function getAllGelarBelakang()
    {
        $build = $this->db->query(
            "SELECT nidn, peg_gel_dep, peg_nama, peg_gel_bel, peg_gel_bel
            FROM fip_dosen
            GROUP BY peg_gel_bel
            ORDER BY peg_gel_bel ASC
            ");
        $result = $build->getResultArray();
        return $result;
    }

    public function getAllStatus()
    {
        $build = $this->db->query(
            "SELECT nidn, peg_gel_dep, peg_nama, peg_gel_bel, peg_status
            FROM fip_dosen
            GROUP BY peg_status
            ORDER BY peg_status ASC
            ");
        $result = $build->getResultArray();
        return $result;
    }

    public function getAllBidang()
    {
        $build = $this->db->query(
            "SELECT nidn, peg_gel_dep, peg_nama, peg_gel_bel, peg_bidang
            FROM fip_dosen
            GROUP BY peg_bidang
            ORDER BY peg_bidang ASC");
        $result = $build->getResultArray();
        return $result;
    }

    public function getAllPangkat()
    {
        $build = $this->db->query(
            "SELECT nidn, peg_gel_dep, peg_nama, peg_gel_bel, peg_pangkat
            FROM fip_dosen
            GROUP BY peg_pangkat
            ORDER BY peg_pangkat ASC");
        $result = $build->getResultArray();
        return $result;
    }

    public function getAllGolongan()
    {
        $build = $this->db->query(
            "SELECT nidn, peg_gel_dep, peg_nama, peg_gel_bel, peg_golongan
            FROM fip_dosen
            GROUP BY peg_golongan
            ORDER BY peg_golongan ASC");
        $result = $build->getResultArray();
        return $result;
    }

    public function getAllJabatan()
    {
        $build = $this->db->query(
            "SELECT nidn, peg_gel_dep, peg_nama, peg_gel_bel, peg_jabatan
            FROM fip_dosen
            GROUP BY peg_jabatan
            ORDER BY peg_jabatan ASC");
        $result = $build->getResultArray();
        return $result;
    }

    public function getAllJenisKelamin()
    {
        $build = $this->db->query(
            "SELECT nidn, peg_gel_dep, peg_nama, peg_gel_bel, peg_sex
            FROM fip_dosen
            GROUP BY peg_sex
            ORDER BY peg_sex ASC");
        $result = $build->getResultArray();
        return $result;
    }

    public function getAllAgama()
    {
        $build = $this->db->query(
            "SELECT nidn, peg_gel_dep, peg_nama, peg_gel_bel, peg_agama
            FROM fip_dosen
            GROUP BY peg_agama
            ORDER BY peg_agama ASC");
        $result = $build->getResultArray();
        return $result;
    }

    public function getAllPendidikan()
    {
        $build = $this->db->query(
            "SELECT nidn, peg_gel_dep, peg_nama, peg_gel_bel, peg_pendidikan
            FROM fip_dosen
            GROUP BY peg_pendidikan
            ORDER BY peg_pendidikan ASC");
        $result = $build->getResultArray();
        return $result;
    }

    public function getAllStatusPernikahan()
    {
        $build = $this->db->query(
            "SELECT nidn, peg_gel_dep, peg_nama, peg_gel_bel, peg_kawin
            FROM fip_dosen
            GROUP BY peg_kawin
            ORDER BY peg_kawin ASC");
        $result = $build->getResultArray();
        return $result;
    }

    public function getAllNidnKosong()
    {
        $build = $this->db->query(
            "SELECT nidn, peg_gel_dep, peg_nama, peg_gel_bel, peg_nip
            FROM fip_dosen
            WHERE nidn = ''
            ORDER BY peg_nama ASC");
        $result = $build->getResultArray();
        return $result;
    }

    public function getAllNipKosong()
    {
        $build = $this->db->query(
            "SELECT nidn, peg_gel_dep, peg_nama, peg_gel_bel, peg_nip
            FROM fip_dosen
            WHERE (peg_nip IS NULL AND peg_status != 'Tetap Non PNS')
            OR (peg_nip = '' AND peg_status != 'Tetap Non PNS')
            ORDER BY peg_nama ASC");
    $result = $build->getResultArray();
        return $result;
    }

    public function cekGambar($id = null)
    {
        $builder = $this->db->table('fip_dosen');
        $builder->select('foto');
        $builder->where('nidn', $id);
        $result = $builder->get();
        return $result->getRowArray();
    }

    public function cekPetaJalan($id = null)
    {
        $builder = $this->db->table('fip_dosen');
        $builder->select('gambar_roadmap');
        $builder->where('nidn', $id);
        $result = $builder->get();
        return $result->getRowArray();
    }

    public function deleteDosen($id = null)
    {
        $builder = $this->db->table('fip_dosen');
        $builder->where('nidn', $id);
        $builder->delete();
    }
} 
