<?php

namespace App\Controllers;

use App\Models\dashboard;
use App\Models\UserModel;
use CodeIgniter\Controller;
use CodeIgniter\Model;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard as HtmlDashboard;

class Home extends BaseController
{
    public function index(): string
    {
        $model = new UserModel();

        // Mengambil data dari model
        $my_data = $model->getAllDataManual();  // Jangan pakai $this->$model, cukup $model
        //echo '<pre>'; print_r($my_data); exit();
        // Siapkan data untuk dikirim ke view
        $data = [
            'my_data' => $my_data  // Memasukkan data yang diambil ke dalam array
        ];


        // Render view dan kirim data
        return view('index', $data);  // Pastikan 'index' adalah nama view yang benar
        // echo"ddd"; exit();
        //return view('index');
    }

    // Fungsi untuk mengimpor file Excel ke database
    public function import()
    {
        $file = $this->request->getFile('file');

        // Cek apakah file diupload
        if ($file->isValid() && !$file->hasMoved()) {
            $filePath = $file->getTempName();

            // Membaca file Excel
            $reader = new Xlsx();
            $spreadsheet = $reader->load($filePath);
            $sheetData = $spreadsheet->getActiveSheet()->toArray();

            $userModel = new UserModel();

            // Loop melalui baris dalam file Excel
            foreach ($sheetData as $key => $row) {
                // Lewati baris pertama jika itu adalah header
                if ($key == 0) {
                    continue;
                }

                // Ambil data dari setiap baris dan masukkan ke database
                $data = [
                    'username' => $row[0],  // Kolom pertama untuk username
                    'password' => $row[1],   // Kolom kedua untuk password (hashed)
                    'email'    => $row[2],  // Kolom ketiga untuk gmail
                ];

                // Simpan data ke dalam database
                $userModel->insert($data);
            }

            return redirect()->to('/'); 
        }
    }

    public function updateUser()
    {
        $userModel = new UserModel();

        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ];

        $userModel->update($this->request->getPost('user_id'), $data);

        return redirect()->to('/');  // Setelah update, redirect ke halaman utama


    }

    public function deleteUser()
    {
        $userModel = new UserModel();
        $id = $this->request->getPost('user_id'); // Ambil user_id dari POST
         $db = \Config\Database::connect(); // Koneksi ke database
        $builder = $db->table('users'); // Menentukan tabel

        // Menghapus data berdasarkan ID
        $builder->delete(['user_id' => $id]); // Hapus data dengan ID tertentu

       // echo $id;
        //exit();
        //echo $userModel->find($id); exit();
        if ($db->affectedRows() > 0) {
            return redirect()->to('/')->with('message', 'User berhasil dihapus.');
        } else {
            return redirect()->to('/')->with('message', 'User tidak ditemukan.');
        }
    }
}
