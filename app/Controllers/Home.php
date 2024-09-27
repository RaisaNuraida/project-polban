<?php

namespace App\Controllers;

use App\Models\dashboard;
use App\Models\UserModel;
use CodeIgniter\Controller;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard as HtmlDashboard;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
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
                    'password' =>$row[1],   // Kolom kedua untuk password (hashed)
                    'email'    => $row[2],  // Kolom ketiga untuk gmail
                ];

                // Simpan data ke dalam database
                $userModel->insert($data);
            }

            return view('index');
        }
    }
}

class MyController extends BaseController
{
    public function index()
    {
        $model = new UserModel(); // Inisialisasi model
        $data['my_data'] = $model->getAllData(); // Mengambil semua data dan mengirimnya ke view

        return view('index', $data);  // Render view dan kirim data
    }
}
