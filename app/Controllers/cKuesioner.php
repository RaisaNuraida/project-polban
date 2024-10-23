<?php

namespace App\Controllers;

use App\Models\dashboard;
use App\Models\UserModel;
use CodeIgniter\Controller;
use CodeIgniter\Model;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard as HtmlDashboard;

class cKuesioner extends Controller
{
    public function downloadCSV()
    {
        $model = new UserModel();

        // Ambil data dari database
        $id = $this->request->getPost('id');

        if (!empty($id)) {
            // Ambil data berdasarkan id yang dipilih
            $data = $model->find($id);

            if ($data) {
                // Nama file yang akan diunduh
                $filename = 'data_' . $id . '_' . date('Ymd') . '.csv';

                // Menentukan header untuk unduh file CSV
                header('Content-Type: text/csv');
                header('Content-Disposition: attachment; filename="' . $filename . '";');

                // Membuka file CSV dalam mode tulis
                $file = fopen('php://output', 'w');

                // Menulis header CSV (sesuaikan dengan kolom di database)
                fputcsv($file, ['academic_nim', 'display_name', 'academic_faculty', 'academic_program', 'academic_year']);

                // Menulis data ke dalam file CSV
                foreach ($data as $row) {
                    fputcsv($file, [$row['id'], $row['name'], $row['email'], $row['created_at']]);
                }

                // Tutup file CSV
                fclose($file);

                // Hentikan eksekusi untuk memastikan tidak ada output tambahan
                exit();
            }
        }
    }

    public function dataisian(){
        return view ('dataisian');
    }

    
}
