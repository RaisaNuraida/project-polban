<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PengaturanModel;

class Pengaturan extends BaseController
{
    public function submitPengaturan ()
    {
        $nama = $this->request->getPost('nama');
        $slogan = $this->request->getPost('slogan');

        $pengaturanModel = new PengaturanModel();
        $pengaturanModel->truncate();

        session()->set('nama', $nama);
        session()->set('slogan', $slogan);        

        $data = [
            'nama' => $nama,
            'slogan' => $slogan,
        ];

        if ($pengaturanModel->insert($data)) {
            return redirect()->to('/pengaturan')->with('success', 'Pesan berhasil disimpan.');
        } else {
            return redirect()->back()->with('error', 'Gagal menyimpan pesan.');
        }
    }
}
