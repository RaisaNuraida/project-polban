<?php

namespace App\Controllers;

use App\Models\dashboard;
use App\Models\m_organisasi;
use CodeIgniter\Controller;
use CodeIgniter\Model;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard as HtmlDashboard;

class c_organisasi extends BaseController
{
    public function tabelorganisasi()
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM organisasi");
        $organisasi = $query->getResultArray();
        $data = ['organisasi' => $organisasi];

        // Render view dan kirim data
        return view('organisasi', $data); 
    }
    public function submitMessage()
    {
        session();
        $fakultas = $this->request->getPost('fakultas');
        $program = $this->request->getPost('program');

    
        // Simpan ke database
        $org = new m_organisasi();

        $dataorganisasi = [
            'academic_faculty' => $fakultas,
            'academic_program' => $program,
        ];

        if ($org->insert($dataorganisasi)) {
            return redirect()->to('/organisasi')->with('success', 'Pesan berhasil disimpan.');
        } else {
            return redirect()->back()->with('error', 'Gagal menyimpan pesan.');
        }
       
    }
}
