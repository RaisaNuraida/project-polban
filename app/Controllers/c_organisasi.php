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
        $query = $db->table('organisasi')
            ->select('id, academic_faculty, academic_program')
            ->orderBy('academic_faculty')
            ->orderBy('academic_program')
            ->get();
    
        $result = $query->getResultArray();
    
        // Mengelompokkan data berdasarkan academic_faculty
        $organisasi = [];
        foreach ($result as $row) {
            if (isset($row['academic_faculty'])) { // Pastikan academic_faculty ada
                $faculty = $row['academic_faculty'];
                
                // Memasukkan program sebagai array dengan 'id' dan 'name'
                $program = [
                    'id' => $row['id'],
                    'name' => $row['academic_program'],
                    'faculty' => $row['academic_faculty'],
                ];
                
                $organisasi[$faculty][] = $program;
            }
        }
        
    
        $data = [
            'organisasi' => $organisasi,
        ];
    
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
    public function deleteUser()
    {
        $userModel = new m_organisasi();
        $id = $this->request->getPost('id'); // Ambil id dari POST
        $db = \Config\Database::connect(); // Koneksi ke database
        $builder = $db->table('organisasi'); // Menentukan tabel

        // Menghapus data berdasarkan ID
        $builder->delete(['id' => $id]); // Hapus data dengan ID tertentu

        // echo $id;
        //exit();
        //echo $userModel->find($id); exit();
        if ($db->affectedRows() > 0) {
            return redirect()->to('organisasi')->with('message', 'User berhasil dihapus.');
        } else {
            return redirect()->to('organisasi')->with('message', 'User tidak ditemukan.');
        }
    }

    public function deleteFaculty()
{
    $faculty = $this->request->getPost('academic_faculty');
    $db = \Config\Database::connect();

    // Menjalankan query delete langsung
    $query = $db->query("DELETE FROM organisasi WHERE academic_faculty = ?", [$faculty]);

    // Mengecek apakah ada baris yang terhapus
    if ($db->affectedRows() > 0) {
        return redirect()->to('/organisasi')->with('message', 'Fakultas dan program studi terkait berhasil dihapus.');
    } else {
        return redirect()->to('/organisasi')->with('message', 'Fakultas tidak ditemukan atau tidak ada data yang dihapus.');
    }
}



   
}
