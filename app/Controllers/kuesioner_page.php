<?php

namespace App\Controllers;

use App\Models\dashboard;
use App\Models\kuesionerpage;
use CodeIgniter\Controller;
use CodeIgniter\Model;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard as HtmlDashboard;

class kuesioner_page extends BaseController
{
    public function submitPengaturan()
    {
        $title = $this->request->getPost('title');
        $deskripsi = $this->request->getPost('deskripsi');
        $conditional = $this->request->getPost('conditionallogic');


        $pengaturanModel = new kuesionerpage();

        session()->set('title', $title);
        session()->set('deskripsi',  $deskripsi);        
        session()->set('conditionallogic', $conditional);        


        $data = [
            'title' => $title,
            'deskripsi' => $deskripsi,
            'conditionallogic' => $conditional,

        ];

        if ($pengaturanModel->insert($data)) {
            return redirect()->to('/kuesionerkuesioner')->with('success', 'Pesan berhasil disimpan.');
        } else {
            return redirect()->back()->with('error', 'Gagal menyimpan pesan.');
        }
    }

    public function tabel(): string
    {
        
        $model = new kuesionerpage();

        // Mengambil data dari model
        $page = $model->getKuesioner();

        $data = ['page' => $page];

        // Render view dan kirim data
        return view('/kuesionerpage', $data); 
       
    }

    public function index()
    {
        return view('kuesionerpage');
    }
    public function delete()
    {
        $userModel = new kuesionerpage();
        $id = $this->request->getPost('id'); // Ambil id dari POST
        $db = \Config\Database::connect(); // Koneksi ke database
        $builder = $db->table('kuesioner_page'); // Menentukan tabel

        // Menghapus data berdasarkan ID
        $builder->delete(['id' => $id]); // Hapus data dengan ID tertentu

        if ($db->affectedRows() > 0) {
            return redirect()->to('/kuesionerpage')->with('message', 'User berhasil dihapus.');
        } else {
            return redirect()->to('/kuesionerpage')->with('message', 'User tidak ditemukan.');
        }
    }
    public function tambahkuesionerpage()
{
    // Ambil data dari request
    $mainOption = $this->request->getPost('mainOption');
    $conditionalOperator = $this->request->getPost('is') ?: $this->request->getPost('isNot');
    $subOption = $this->request->getPost('displayNameInput') ?: $this->request->getPost('emailInput') ?: $this->request->getPost('group') ?: $this->request->getPost('academic_nim') ?: $this->request->getPost('academic_faculty') ?: $this->request->getPost('academic_program');

    // Format conditional_logic field
    $conditionalLogicData = [
        'Option ' => $mainOption,
        'is not ' => $conditionalOperator,
        'value ' => $subOption,
    ];

    $data = [
        'title' => $this->request->getPost('title'),
        'deskripsi' => $this->request->getPost('deskripsi'),
        'conditional_logic' => json_encode($conditionalLogicData), // Simpan sebagai JSON string
    ];

    // Simpan ke database
    $model = new kuesionerpage();
    if (!$model->insert($data)) {
        return redirect()->back()->withInput()->with('error', 'Data gagal disimpan.');
    }

    // Redirect dengan data yang dikirim
    return redirect()->to('/kuesionerpage')->with('success', 'Data berhasil disimpan.')
                                    ->with('subOption', $subOption) 
                                    ->with('mainOption', $mainOption);  // Kirim data subOption ke view
}

}
