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

    // Mengambil data pertama dari tabel welcome
    $tentangData = $model->first();

    // Pastikan field 'welcome_message' ada dan tidak kosong
    $tentang = !empty($tentangData['welcome_message']) ? $tentangData['welcome_message'] : 'Data tidak tersedia';

    // Kirimkan data ke view
    $data = ['tentang' => $tentang];
    return view('tentang', $data);
}

    
}
