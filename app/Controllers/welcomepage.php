<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class welcomepage extends BaseController
{
    public function save()
    {
        // Ambil data dari textarea
        $content = $this->request->getPost('content');

        // Lakukan sesuatu dengan data, misalnya simpan ke database
        // Contoh: $this->yourModel->save(['content' => $content]);

        return redirect()->to('/success'); // Sesuaikan rute redirect
    }
}
