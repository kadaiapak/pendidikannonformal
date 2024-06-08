<?php

namespace App\Controllers;
use App\Models\DosenModel;

class UserSdm extends BaseController
{
    protected $dosenModel;
    public function __construct()
    {
        helper('form');
        $this->dosenModel = new DosenModel();
    }

    public function semua_sdm()
    {
        $semuaDosen = $this->dosenModel->getPaginated(5, null);
        $data = [
            'judul' => 'Daftar Dosen Pendidikan Non Formal',
            'semuaDosen' => $semuaDosen['dosen'],
            'pager' => $semuaDosen['pager'],
        ];

        return view('home/v_semua_sdm', $data);
    }

    public function detail_sdm($nidn = null)
    {
        $detailDosen = $this->dosenModel->getDetail($nidn);
        if (empty($detailDosen)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Dosen dengan nidn ' .$nidn. ' tidak ditemukan');
        }
        $data = [
            'judul' => 'Detail Dosen',
            'detailDosen' => $detailDosen,
        ];

        return view('home/v_detail_sdm', $data);
    }
}
