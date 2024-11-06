<?php

namespace App\Controllers;

use App\Models\dashboard;
use App\Models\UserModel;
use App\Models\Kuesionerkuesioner;
use CodeIgniter\Controller;
use CodeIgniter\Model;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use CodeIgniter\API\ResponseTrait;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard as HtmlDashboard;

class dataisian extends BaseController
{
    use ResponseTrait; 
    public function dataisian() {
        $model = new UserModel();
        $dataalumni = $model->findAll();  // Mengambil semua data dari tabel 'students'

        // Menyusun data agar sesuai dengan format yang dibutuhkan di frontend
        $data = [];
        foreach ($dataalumni as $row) {
            $data[] = [
                'academic_nim' => $row['academic_nim'],
                'display_name' => $row['display_name'],
                'academic_faculty' => $row['department'],
                'academic_program' => $row['academic_program'],
                'academic_year' => $row['academic_year'],
                'created_on' => $row['created_on'],
                'updated_on' => $row['updated_on'],
            ];
        }

        // Mengembalikan response dalam format JSON
      return $this->response->setJSON($data);
    }
}