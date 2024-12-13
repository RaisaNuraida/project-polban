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
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard as HtmlDashboard;

class carianswer extends BaseController
{
    public function carianswer()
    {
        $users = new UserModel();
        $cari = $this->request->getGet('carianswer'); // Mengambil input pencarian

        // Melakukan pencarian berdasarkan display_name
        if ($cari) {
            $data['dataalumni'] = $users
                ->like('display_name', $cari)
                ->orlike('academic_nim', $cari)
                ->orlike('academic_faculty', $cari)
                ->orlike('academic_program', $cari)
                ->orlike('academic_year', $cari)
                ->findAll(); // Menggunakan like untuk pencarian
        } else {
            $data['dataalumni'] = []; // Jika tidak ada input, set hasil kosong
        }

        return view('/dataisian', $data);
    }

    public function conditionalkuesioner()
    {
        $users = new UserModel();
        $cari = $this->request->getGet('conditionalkuesioner'); // Mengambil input pencarian

        // Melakukan pencarian berdasarkan display_name
        if ($cari) {
            $data['dataalumni'] = $users
                ->like('display_name', $cari)
                ->orlike('academic_nim', $cari)
                ->orlike('academic_faculty', $cari)
                ->orlike('academic_program', $cari)
                ->orlike('academic_year', $cari)
                ->findAll(); // Menggunakan like untuk pencarian
        } else {
            $data['dataalumni'] = []; // Jika tidak ada input, set hasil kosong
        }

        return view('/dataisian', $data);
    }
}
