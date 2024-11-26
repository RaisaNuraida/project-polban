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
   
    public function dataisian(): string {
        $model = new UserModel();
        $dataalumni = $model->getAlumni();  // Mengambil semua data dari tabel 'students'

        // Menyusun data agar sesuai dengan format yang dibutuhkan di frontend
            $data = [
                'dataalumni' => $dataalumni,
            ];

        // Mengembalikan response dalam format JSON
        return view('/dataisian', $data);  // Pastikan 'index' adalah nama view yang benar
    }
    public function index(){
        return view('/dataisian');
    }
    public function AlumniDistinct(): string {
        $model = new UserModel();
        $dataalumni = $model->getAlumniDistinc();  // Mengambil semua data dari tabel 'students'

        // Menyusun data agar sesuai dengan format yang dibutuhkan di frontend
            $data = [
                'dataalumni' => $dataalumni,
            ];

        // Mengembalikan response dalam format JSON
        return view('/dataisian', $data);  // Pastikan 'index' adalah nama view yang benar
    }
}