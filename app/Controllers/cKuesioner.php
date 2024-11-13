<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;
use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;
use Config\Database;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard as HtmlDashboard;

class cKuesioner extends Controller
{
    public function downloadCSV()
    {
        $filename = "DataAlumni-" . date('ymd') . ".xlsx";
        $cari = $this->request->getVar("carianswer"); 
        // Mengambil input pencarian
        $db = \Config\Database::connect();
        $builder = $db->table("users");
    
        // Melakukan pencarian jika ada input
        if ($cari != "") {
            $builder->like('display_name', $cari);
            $builder->orLike('academic_nim', $cari);
            $builder->orLike('academic_faculty', $cari);
            $builder->orLike('academic_program', $cari);
            $builder->orLike('academic_year', $cari);
        }
    
        // Mengambil data dari query
        $query = $builder->get();
        $data = $query->getResult(); // Mengambil hasil query
    
        // Membuat instance Spreadsheet
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
    
        // Menulis header kolom
        $sheet->setCellValue("A1", "No");
        $sheet->setCellValue("B1", "NIM");
        $sheet->setCellValue("C1", "Nama Lengkap");
        $sheet->setCellValue("D1", "Jurusan");
        $sheet->setCellValue("E1", "Program Studi");
        $sheet->setCellValue("F1", "Angkatan");
    
        $column = 2; // Mulai dari baris 2 untuk data
        foreach ($data as $key => $value) {
            // Mengakses properti dari stdClass dengan menggunakan sintaks objek
            $sheet->setCellValue("A" . $column, $column - 1); // Nomor urut
            $sheet->setCellValue("B" . $column, $value->academic_nim); // Nama Lengkap
            $sheet->setCellValue("C" . $column, $value->display_name); // Nama Lengkap
            $sheet->setCellValue("D" . $column, $value->academic_faculty); // Jurusan
            $sheet->setCellValue("E" . $column, $value->academic_program);
            $sheet->setCellValue("F" . $column, $value->academic_year); // Angkatan
            $column++;
        }
    
        // Pengaturan header untuk download
        $writer = new Xlsx($spreadsheet);
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="' . $filename . '"'); // Menggunakan variabel filename
        header('Cache-Control: max-age=0');
    
        // Simpan ke output
        $writer->save('php://output');
        exit();   
    }

    public function dataisian(){
        return view ('dataisian');
    }

    
}
