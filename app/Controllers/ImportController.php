<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

    // Method untuk mengimpor file Excel ke database
    class ImportController extends Controller
{
    public function index()
    {
        return view('import_view');  // Tampilkan form upload
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

            return redirect()->to('/import')->with('message', 'Data berhasil diimpor.');
        } else {
            return redirect()->back()->with('message', 'Gagal mengupload file.');
        }
    }
}