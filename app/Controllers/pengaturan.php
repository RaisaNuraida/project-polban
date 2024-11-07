<?php

namespace App\Controllers;

use App\Models\PengaturanModel;

class Pengaturan extends BaseController
{
    // Menampilkan form pengaturan
    public function index()
    {
        $model = new PengaturanModel();
        
        // Mengambil data pengaturan dari database
        $data['settings'] = $model->getPengaturan();

        return view('pengaturan', $data);
    }

    // Menangani form yang disubmit
    public function simpan()
    {
        $model = new PengaturanModel();

        // Validasi input
        if ($this->request->getMethod() === 'post') {
            $rules = [
                'nama' => 'required|min_length[3]|max_length[255]',
                'slogan' => 'required|min_length[3]|max_length[255]',
            ];

            if (!$this->validate($rules)) {
                // Jika validasi gagal, tampilkan error
                return redirect()->to('/pengaturan')->withInput();
            }

            // Ambil data dari form
            $data = [
                'nama' => $this->request->getPost('nama'),
                'slogan' => $this->request->getPost('slogan'),
            ];

            // Simpan pengaturan ke database
            $model->updatePengaturan($data);

            // Berikan pesan sukses
            session()->setFlashdata('success', 'Pengaturan berhasil disimpan.');
            return redirect()->to('/pengaturan');
        }
    }
}
