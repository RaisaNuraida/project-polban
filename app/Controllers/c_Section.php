<?php

namespace App\Controllers;

use App\Models\KuesionerModel; // Pastikan Anda membuat model jika diperlukan
use CodeIgniter\Controller;

class KuesionerController extends Controller
{
    public function index()
    {
        // Tampilkan halaman formulir
        return view('kuesionersection/form'); // Ganti dengan nama view yang sesuai
    }

    public function save()
    {
        // Validasi input
        $validation = \Config\Services::validation();

        $validation->setRules([
            'title' => 'required|min_length[3]|max_length[100]',
            'deskripsi' => 'required|min_length[5]|max_length[255]',
        ]);

        if (!$this->validate($validation->getRules())) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Ambil data dari input
        $data = [
            'title' => $this->request->getPost('title'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'show_title' => $this->request->getPost('show_title') ? 1 : 0,
            'show_deskripsi' => $this->request->getPost('show_deskripsi') ? 1 : 0,
            'conditional_logic' => $this->request->getPost('conditional_logic') ? 1 : 0,
        ];

        // Simpan data ke database
        $kuesionerModel = new KuesionerModel(); // Gunakan model untuk menyimpan data
        if ($kuesionerModel->save($data)) {
            return redirect()->to('/kuesioner')->with('success', 'Data berhasil disimpan!');
        } else {
            return redirect()->back()->with('error', 'Gagal menyimpan data.')->withInput();
        }
    }
}
