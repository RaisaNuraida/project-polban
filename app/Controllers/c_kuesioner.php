<?php

namespace App\Controllers;

use App\Models\Kuesionerkuesioner;
use App\Models\m_kuesioner;
use CodeIgniter\Controller;
use CodeIgniter\Debug\Toolbar\Collectors\Views;
use CodeIgniter\Model;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard as HtmlDashboard;

class c_kuesioner extends BaseController
{ 
    public function index(): string
    {
        $model = new m_kuesioner();

        $user = $model->getKuesionerWithUsers();
    
        // Debugging untuk melihat data yang diambil
        // echo '<pre>';
         //print_r($my_data);
         //echo '</pre>';
         //exit;
    
        $data = ['user' => $user];
    
        // Kirim data ke view
        return view('kuesionerkuesioner', $data);
    }
    public function deleteUser()
    {
        $userModel = new m_kuesioner();
        $id = $this->request->getPost('id'); // Ambil id dari POST
        $db = \Config\Database::connect(); // Koneksi ke database
        $builder = $db->table('kuesioner_kuesioner'); // Menentukan tabel

        // Menghapus data berdasarkan ID
        $builder->delete(['id' => $id]); // Hapus data dengan ID tertentu

        // echo $id;
        //exit();
        //echo $userModel->find($id); exit();
        if ($db->affectedRows() > 0) {
            return redirect()->to('/kuesionerkuesioner')->with('message', 'User berhasil dihapus.');
        } else {
            return redirect()->to('/kuesionerkuesioner')->with('message', 'User tidak ditemukan.');
        }
    }

}