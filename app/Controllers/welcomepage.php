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


        // Simpan ke database
        $welcomeModel = new welcome();
        $welcomeModel->truncate();
        $data = [
            'message' => $message,
        ];

        if ($welcomeModel->insert($data)) {
            return redirect()->to('/welcomepage')->with('success', 'Pesan berhasil disimpan.');
        } else {
            return redirect()->back()->with('error', 'Gagal menyimpan pesan.');
        }
    }

<<<<<<< HEAD
public function data(): string
{
        $model = new welcome();

        $message = $model->findAll();

        $data = ['message' => $message];
        return view('/tracer', $data); 
}
=======
    public function data(): string
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM welcome_message");
        $message = $query->getResultArray();
        $data = ['message' => $message];

        // Render view dan kirim data
        return view('welcomepage', $data);
    }
>>>>>>> 8c18116619080806ed9f78fe1191a333a1be90a1
}
