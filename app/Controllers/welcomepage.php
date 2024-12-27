<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\dashboard;
use App\Models\UserModel;
use App\Models\welcome;
use CodeIgniter\Model;

class welcomepage extends BaseController
{
    public function submitMessage()
    {
        $message = $this->request->getPost('content');

        if (empty($message)) {
            return redirect()->back()->with('error', 'Message cannot be empty!');
        }

        // Update kolom message tanpa memengaruhi kolom lain
        $welcomeModel = new welcome();
        $welcomeModel->update(1, ['message' => $message]); // ID=1 sebagai contoh
        return redirect()->to('/welcomepage')->with('success', 'Message updated successfully.');
    }

    public function submitTentang()
    {
        $tentang = $this->request->getPost('tentangarea');

        if (empty($tentang)) {
            return redirect()->back()->with('error', 'Tentang cannot be empty!');
        }

        // Update kolom tentang tanpa memengaruhi kolom lain
        $welcomeModel = new welcome();
        $welcomeModel->update(1, ['tentang' => $tentang]); // ID=1 sebagai contoh
        return redirect()->to('/welcomepage')->with('success', 'Tentang updated successfully.');
    }

    public function submitKontak()
    {
        $kontak = $this->request->getPost('kontakarea');

        if (empty($kontak)) {
            return redirect()->back()->with('error', 'Kontak cannot be empty!');
        }

        // Update kolom kontak tanpa memengaruhi kolom lain
        $welcomeModel = new welcome();
        $welcomeModel->update(1, ['kontak' => $kontak]); // ID=1 sebagai contoh
        return redirect()->to('/welcomepage')->with('success', 'Kontak updated successfully.');
    }

    public function deleteWelcome()
    {
        $userModel = new welcome();
        $id = $this->request->getPost('id'); // Ambil id dari POST
        $db = \Config\Database::connect(); // Koneksi ke database
        $builder = $db->table('welcome_message'); // Menentukan tabel

        // Menghapus data berdasarkan ID
        $builder->delete(['id' => $id]); // Hapus data dengan ID tertentu

        // echo $id;
        //exit();
        //echo $userModel->find($id); exit();
        if ($db->affectedRows() > 0) {
            return redirect()->to('welcomepage')->with('message', 'Data berhasil dihapus.');
        } else {
            return redirect()->to('welcomepage')->with('message', 'Data tidak ditemukan.');
        }
    }

    public function tambahwelcome(): string
    {
        return view('tambahhalaman');
    }

    public function tambahHalaman()
    {
        // Mengambil data yang diperlukan
        $model = new welcome(); // Pastikan mengganti dengan model yang sesuai
        $db = \Config\Database::connect();
        $builder = $db->table('welcome_message');
        $builder->select('
        welcome_message.*,
        users.academic_graduate_year AS tahun_lulus,
        users.academic_program AS program_studi,
        users.display_name AS user_name, 
        users.email AS user_email, 
        koordinator_surveyor.tahun AS tahun_koordinator,
        koordinator_surveyor.academic_faculty AS fakultas,
        koordinator_surveyor.display_name AS koordinator_name, 
        koordinator_surveyor.email AS koordinator_email
    ');
        $builder->join('users', 'users.id = welcome_message.users_id', 'left');
        $builder->join('koordinator_surveyor', 'koordinator_surveyor.id = welcome_message.koordinator_id', 'left');
        $query = $builder->get();

        $data = $query->getResultArray();  // Mengambil data hasil query

        // Debugging: periksa hasil query
        var_dump($data);  // Lihat apakah data berhasil diambil

        // Mengambil input values dari form
        $tahun = $this->request->getPost('tahun');
        $content = $this->request->getPost('content');
        $tentangarea = $this->request->getPost('tentangarea');
        $kontakarea = $this->request->getPost('kontakarea');

        // Data yang akan dikirim ke view
        return view('tambahhalaman', [
            'data' => $data, // Mengirimkan data ke view
            'tahun' => $tahun,
            'content' => $content,
            'tentangarea' => $tentangarea,
            'kontakarea' => $kontakarea
        ]);
    }

    public function data(): string
    {
        $model = new welcome();

        // Mengambil data pertama dan hanya field 'message'
        $messageData = $model->first();
        $message = $messageData['message'];

        $data = ['message' => $message];
        return view('/tracer', $data);
    }

    public function dataTentang(): string
    {
        $model = new Welcome();  // Pastikan model ini benar

        // Mengambil data pertama dan hanya field 'tentang'
        $tentangData = $model->first();
        $tentang = $tentangData['tentang'];

        $data = ['tentang' => $tentang];
        return view('/tentang', $data);
    }

    public function dataKontak(): string
    {
        $model = new welcome();

        // Mengambil data pertama dan hanya field 'tentang'
        $kontakData = $model->first();
        $kontak = $kontakData['kontak'];

        $data = ['kontak' => $kontak];
        return view('/kontak', $data);
    }

    public function dataWelcome(): string
    {
        $model = new welcome();

        // Ambil jumlah baris per halaman dari query string, default 10
        $perPage = (int) ($this->request->getVar('perPage') ?? 10);

        // Validasi jumlah baris per halaman
        $validPerPageOptions = [10, 15, 20, 25, 30];
        if (!in_array($perPage, $validPerPageOptions)) {
            $perPage = 10; // Gunakan default jika tidak valid
        }

        // Ambil halaman saat ini dari query string
        $page = (int) ($this->request->getVar('page') ?? 1);

        // Hitung offset untuk query
        $offset = ($page - 1) * $perPage;

        // Hitung total data
        $totalData = $model->countAllMessages();

        // Ambil data sesuai dengan offset dan perPage
        $datamessage = $model->getMessagesPaginated($perPage, $offset);

        // Menghitung jumlah total halaman
        $totalPages = ceil($totalData / $perPage);

        // Tentukan batasan pagination
        $startPage = max(1, $page - 1);
        $endPage = min($totalPages, $page + 1);

        // Siapkan data untuk dikirim ke view
        $data = [
            'datamessage' => $datamessage,
            'totalPages' => $totalPages,
            'currentPage' => $page,
            'perPage' => $perPage,
            'startPage' => $startPage,
            'endPage' => $endPage,
        ];

        return view('/welcomepage', $data);
    }

    public function cariwelcome()
    {
        $welcome = new Welcome();

        // Ambil nilai pencarian dan perPage dari request
        $cari = $this->request->getGet('cari');
        $perPage = (int) ($this->request->getGet('perPage') ?? 10); // Default 10 rows per page

        // Validasi jumlah rows per page
        $validPerPageOptions = [10, 15, 20, 25, 30];
        if (!in_array($perPage, $validPerPageOptions)) {
            $perPage = 10;
        }

        // Ambil halaman saat ini
        $currentPage = (int) ($this->request->getGet('page') ?? 1);

        // Query dengan pencarian (jika ada)
        if ($cari) {
            $builder = $welcome->like('tahun', $cari);
        } else {
            $builder = $welcome;
        }

        // Hitung total data
        $totalData = $builder->countAllResults(false);

        // Ambil data sesuai pagination
        $datamessage = $builder
            ->limit($perPage, ($currentPage - 1) * $perPage)
            ->find();

        // Hitung total halaman
        $totalPages = ceil($totalData / $perPage);

        // Siapkan data untuk view
        $data = [
            'datamessage' => $datamessage,
            'currentPage' => $currentPage,
            'perPage' => $perPage,
            'totalPages' => $totalPages,
            'startPage' => max(1, $currentPage - 1),
            'endPage' => min($totalPages, $currentPage + 1),
            'cari' => $cari,
        ];

        return view('welcomepage', $data);
    }

}
