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
        $welcomeModel = new Welcome();

        if ($this->request->getMethod() === 'post') {
            // Handle form submission

            // Get input values from the form
            $academic_graduate_year = $this->request->getPost('tahun'); // Array of tahun
            $content = $this->request->getPost('content');
            $tentangarea = $this->request->getPost('tentangarea');
            $kontakarea = $this->request->getPost('kontakarea');

            // Handle the surveyor (users) data
            $surveyor_data = [];
            $prodi = $this->request->getPost('prodi');  // Array of prodi
            $nama = $this->request->getPost('nama');    // Array of nama
            $email = $this->request->getPost('email');  // Array of email

            // Handle the koordinator data
            $koordinator_data = [];
            $jurusan = $this->request->getPost('jurusan');  // Array of jurusan
            $koordinator_nama = $this->request->getPost('koordinator_nama');  // Array of koordinator_nama

            // Validate if arrays are of equal length
            if (
                count($academic_graduate_year) !== count($prodi) ||
                count($prodi) !== count($nama) ||
                count($nama) !== count($email)
            ) {
                return redirect()->back()->with('error', 'Data surveyor tidak konsisten.');
            }

            // Prepare surveyor data
            for ($i = 0; $i < count($academic_graduate_year); $i++) {
                $surveyor_data[] = [
                    'academic_graduate_year' => $academic_graduate_year[$i],
                    'academic_program' => $prodi[$i],
                    'display_name' => $nama[$i],
                    'email' => $email[$i]
                ];
            }

            // Prepare koordinator data
            for ($i = 0; $i < count($jurusan); $i++) {
                $koordinator_data[] = [
                    'jurusan' => $jurusan[$i],
                    'koordinator_nama' => $koordinator_nama[$i]
                ];
            }

            // Prepare the data to be inserted into the welcome_message table
            $data = [
                'academic_graduate_year' => implode(',', $academic_graduate_year), // Example of storing as CSV
                'message' => $content,
                'tentang' => $tentangarea,
                'kontak' => $kontakarea,
                'desk_surveyor' => json_encode($surveyor_data), // If you decide to store this as a JSON field
                'desk_koordinator' => json_encode($koordinator_data) // If you decide to store this as a JSON field
            ];

            // Insert data
            if ($welcomeModel->insert($data)) {
                return redirect()->to('/welcomepage')->with('success', 'Data berhasil ditambahkan.');
            } else {
                return redirect()->back()->with('error', 'Gagal menyimpan data.');
            }
        } else {
            // Handle page rendering

            // Ambil data dari database
            $userData = $welcomeModel->getUsersData();

            // Ekstrak data untuk dropdown
            $academicYears = [];
            $programs = [];

            foreach ($userData as $user) {
                if (!in_array($user->academic_graduate_year, $academicYears)) {
                    $academicYears[] = $user->academic_graduate_year;
                }
                if (!in_array($user->academic_program, $programs)) {
                    $programs[] = $user->academic_program;
                }
            }

            // Kirim data ke view
            return view('tambahhalaman', [
                'academicYears' => $academicYears,
                'programs' => $programs
            ]);
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
