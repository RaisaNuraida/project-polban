<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\dashboard;
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
        session();
        // Get input values
        $academic_graduate_year = $this->request->getPost('academic_graduate_year');
        $deskripsi = $this->request->getPost('deskripsi');
        $content = $this->request->getPost('content');
        $tentangarea = $this->request->getPost('tentangarea');
        $kontakarea = $this->request->getPost('kontakarea');
        $deskSurveyor = $this->request->getPost('deskSurveyor');

        // Load the model and insert data into the database
        $input = new welcome();

        $data = [
            'academic_graduate_year' => $academic_graduate_year,
            'deskripsi' => $deskripsi,
            'message' => $content,
            'tentang' => $tentangarea,
            'kontak' => $kontakarea,
            'desk_surveyor' => $deskSurveyor
        ];

        if ($input->insert($data)) {
            return redirect()->to('/welcomepage')->with('success', 'Pesan berhasil disimpan.');
        } else {
            return redirect()->back()->with('error', 'Gagal menyimpan pesan.');
        }
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

    public function returnMessage(): string
    {
        $model = new welcome();

        // Mengambil data pertama dan hanya field 'tentang'
        $messageData = $model->first();
        $message = $messageData['message'];

        $data = ['message' => $message];
        return view('/welcomepage', $data);
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
        $datamessage = $model->getmessage();

        $data = ['datamessage' => $datamessage];
        return view('/welcomepage', $data);
    }
}
