<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PengaturanModel;

class pengaturan extends BaseController
{
    public function submitPengaturan()
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

    public function index(): string
    {
        $model = new PengaturanModel();

        // Mengambil data dari model
        $my_data = $model->getPengaturan();
        // Jangan pakai $this->$model, cukup $model
        //echo '<pre>'; print_r($my_data); exit();
        // Siapkan data untuk dikirim ke view
        $data = [
            'my_data' => $my_data,
        ];

        // Render view dan kirim data
        return view('halamanlogin', $data); 
        // echo"ddd"; exit();
    }

    public function indexpengaturan(): string
    {
        $model = new PengaturanModel();

        $my_data = $model->getPengaturan();
        
        $data = [
            'my_data' => $my_data,
        ];

        return view('pengaturan', $data);  
        // echo"ddd"; exit();
    } 

    public function namasitus(): string
    {
        $model = new PengaturanModel();

        $nama = $model->getPengaturan();
        
        $data = [
            'nama' => $nama,
        ];

        return view('tracer', $data);  
        // echo"ddd"; exit();
    } 
}
