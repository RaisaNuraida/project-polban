<?php

namespace App\Controllers;

use App\Models\Kuesionerkuesioner;
use App\Models\m_kuesioner;
use App\Models\UserModel;
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
        $data = [
        'user' => $user,
      
    ];
        

        // Kirim data ke view
        return view('kuesionerkuesioner', $data);
    }

    

    public function indexuser(): string
    {
        $model = new m_kuesioner();

        $user = $model->getUsers();
        $data = ['user' => $user];

        // Kirim data ke view
        return view('indexuser', $data);
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
    public function carikuesioner()
    {
        $users = new m_kuesioner();
        $cari = $this->request->getGet('cari'); // Mengambil input pencarian

        // Melakukan pencarian berdasarkan display_name
        if ($cari) {
            $data['user'] = $users
                ->like('title', $cari)
                ->orlike('conditional_logic', $cari)
                ->findAll(); // Menggunakan like untuk pencarian
        } else {
            $data['user'] = []; // Jika tidak ada input, set hasil kosong
        }

        return view('kuesionerkuesioner', $data);
    }
    public function backIndex()
    {
        return view('index');
    }

    public function showData()
    {
        $userModel = new m_kuesioner();
        $user = $userModel->getUsersWithEntries('2024'); // Ambil semua pengguna

        // Loop melalui pengguna untuk mendapatkan jumlah entri per tahun kelulusan 2024
        foreach ($user as &$user) {
            $user['entries'] = $userModel->countEntriesByGraduateYear($user['id'], '2024');
            $user['count'] = $userModel->countEntriesByGraduateYear($user['id'], '2024'); // Menyimpan jumlah entri
        }
        
        // Kirim data pengguna ke view
        return view('kuesioner_kuesioner', ['user' => $user]);
 
    }

    public function show($id): string
    {
        // Memanggil model
        $itemModel = new m_kuesioner();

        // Mendapatkan data item berdasarkan ID
        $item = $itemModel->find($id);
        $deskripsi = $item['deskripsi'];

        // Mengirim data ke view
        return view('dataisian', $deskripsi);
    }
    public function tambahkuesioner()
    {
        // Ambil data dari request
         // Ambil data dari request tanpa validasi
         $mainOption = $this->request->getPost('mainOption');
         $conditionalOperator = $this->request->getPost('is')?: $this->request->getPost('isNot');
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
         $model = new m_kuesioner();
         if (!$model->insert($data)) {
             return redirect()->back()->withInput()->with('error', 'Data gagal disimpan.');
         }
 
        

         return redirect()->to('/kuesionerkuesioner')->with('success', 'Data berhasil disimpan.');
     }

     
     
}
    
    
    

