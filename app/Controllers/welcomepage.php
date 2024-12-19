<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\dashboard;
use App\Models\welcome;
use CodeIgniter\Model;

class welcomepage extends BaseController
{
    public function index()
    {
        $welcomeModel = new Welcome();
        $usersData = $welcomeModel->getUsersData(); // Memanggil metode dengan nama yang sesuai di model

        // Passing data ke view untuk ditampilkan atau diolah lebih lanjut
        return view('welcome_view', ['usersData' => $usersData]);
    }

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
        // Start session
        session();

        // Get input values from the form
        $academic_graduate_year = $this->request->getPost('academic_graduate_year');
        $deskripsi = $this->request->getPost('deskripsi');
        $content = $this->request->getPost('content');
        $tentangarea = $this->request->getPost('tentangarea');
        $kontakarea = $this->request->getPost('kontakarea');
        $deskSurveyor = $this->request->getPost('deskSurveyor');

        // Handle the surveyor (users) data
        $surveyor_data = [];
        $tahun = $this->request->getPost('academic_graduate_year');  // Get the tahun values (an array)
        $prodi = $this->request->getPost('academic_program');  // Get the prodi values (an array)
        $nama = $this->request->getPost('display_name');    // Get the nama values (an array)
        $email = $this->request->getPost('email');  // Get the email values (an array)

        // Prepare surveyor data
        for ($i = 0; $i < count($tahun); $i++) {
            $surveyor_data[] = [
                'academic_graduate_year' => $tahun[$i],
                'academic_program' => $prodi[$i],
                'display_name' => $nama[$i],
                'email' => $email[$i]
            ];
        }

        // Load the model for inserting the welcome message data
        $input = new \App\Models\Welcome();

        // Prepare the data to be inserted into the welcome_message table
        $data = [
            'academic_graduate_year' => $academic_graduate_year,
            'deskripsi' => $deskripsi,
            'message' => $content,
            'tentang' => $tentangarea,
            'kontak' => $kontakarea,
            'desk_surveyor' => $deskSurveyor,
            // You can store serialized surveyor data or insert it into a separate table
            'surveyor_data' => json_encode($surveyor_data)  // If you decide to store this as a JSON field
        ];

        // Insert into the welcome_message table
        if ($input->insert($data)) {
            // Optionally, if you're storing surveyor data in another table, insert it here

            // Example of inserting surveyor data into a separate table:
            // $surveyorModel = new \App\Models\SurveyorModel();
            // foreach ($surveyor_data as $surveyor) {
            //     $surveyorModel->insert($surveyor);
            // }

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
