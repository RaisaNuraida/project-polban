<?php

namespace App\Controllers;

use App\Models\dashboard;
use App\Models\UserModel;
use App\Models\Kuesionerkuesioner;
use CodeIgniter\Controller;
use CodeIgniter\Model;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard as HtmlDashboard;

class Home extends BaseController
{

    public function index(): string
    {
        $model = new UserModel();

        // Mengambil data dari model
        $my_data = $model->getAllDataManual();
        $administrator = $model->getAdministrator();
        $atasan = $model->getAtasan();
        $alumni = $model->getAlumni();
        $perusahaan = $model->getPerusahaan();
        // Jangan pakai $this->$model, cukup $model
        //echo '<pre>'; print_r($my_data); exit();
        // Siapkan data untuk dikirim ke view
        $data = [
            'my_data' => $my_data,
            'administrator' => $administrator,
            'atasan' => $atasan,
            'alumni' => $alumni,
            'perusahaan' => $perusahaan,
            // Memasukkan data yang diambil ke dalam array
        ];


        // Render view dan kirim data
        return view('index', $data);  // Pastikan 'index' adalah nama view yang benar
        // echo"ddd"; exit();
    }

    // Fungsi untuk mengimpor file Excel ke database
    public function import()
    {
        $file = $this->request->getFile('file');

        // Cek apakah file diupload
        if ($file->isValid() && !$file->hasMoved()) {
            if ($file->getClientExtension() != 'csv') {
                return redirect()->back()->with('error', 'File yang diupload harus berformat CSV.');
            }

            $filePath = $file->getTempName();

            try {
                // Membaca file CSV
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
                $spreadsheet = $reader->load($filePath);
                $sheetData = $spreadsheet->getActiveSheet()->toArray();
            } catch (\PhpOffice\PhpSpreadsheet\Reader\Exception $e) {
                return redirect()->back()->with('error', 'Gagal membaca file CSV: ' . $e->getMessage());
            }

            // Debugging output
            if (empty($sheetData) || count($sheetData) <= 0) {
                return redirect()->back()->with('error', 'Tidak ada data untuk diimpor.');
            }

            // Pengecekan untuk semua baris, memastikan tidak ada baris yang kosong
            foreach ($sheetData as $key => $row) {
                if ($key == 0) {
                    continue; // Lewati header CSV
                }

                // Cek apakah semua kolom di baris ini kosong
                if (empty(array_filter($row))) {
                    return redirect()->back()->with('error', 'Impor gagal. Ditemukan baris kosong pada baris ke-' . ($key + 1));
                }
            }

            $userModel = new UserModel();
            $duplicateUsernames = [];

            // Jika tidak ada baris kosong, lanjutkan proses cek username duplikat
            foreach ($sheetData as $key => $row) {
                if ($key == 0) {
                    continue; // Lewati header CSV
                }

                // Pastikan setiap baris memiliki data yang cukup (minimal 17 kolom)
                if (count($row) < 17) {
                    continue; // Lewati baris yang tidak lengkap
                }

                $displayname = $row[0];
                $username = $row[1];
                $password = $row[2];
                $email = $row[3];
                $group = $row[4];
                $street = $row[5];
                $city = $row[6];
                $statecode = $row[7];
                $jeniskelamin = $row[8];
                $notlp = $row[9];
                $nim = $row[10];
                $faculty = $row[11];
                $program = $row[12];
                $year = $row[13];
                $graduateyear = $row[14];
                $nik = $row[15];
                $npwp = $row[16];

                // Cek apakah username atau email kosong
                if (
                    empty($displayname) ||
                    empty($username) ||
                    empty($password) ||
                    empty($email) ||
                    empty($group) ||
                    empty($street) ||
                    empty($city) ||
                    empty($statecode) ||
                    empty($jeniskelamin) ||
                    empty($notlp) ||
                    empty($nim) ||
                    empty($faculty) ||
                    empty($program) ||
                    empty($year) ||
                    empty($graduateyear) ||
                    empty($nik) ||
                    empty($npwp)
                ) {
                    return redirect()->back()->with('error', 'Impor gagal. Tidak boleh ada baris kosong');
                }

                // Cek apakah username sudah ada di database
                if ($userModel->where('username', $username)->first()) {
                    $duplicateUsernames[] = $username;
                }
            }

            // Jika ditemukan username duplikat, hentikan proses impor
            if (!empty($duplicateUsernames)) {
                return redirect()->back()->with('error', 'Impor dibatalkan. Username yang sudah ada: ' . implode(', ', $duplicateUsernames));
            }

            // Jika tidak ada duplikat, lanjutkan impor data
            foreach ($sheetData as $key => $row) {
                if ($key == 0) {
                    continue; // Lewati header CSV
                }

                if (count($row) < 17) {
                    continue; // Lewati baris yang tidak lengkap
                }

                $data = [
                    'display_name' =>  $row[0],
                    'username' => $row[1],
                    'password' => $row[2],
                    'email'    => $row[3],
                    'group'    => $row[4],
                    'street'    => $row[5],
                    'city'    => $row[6],
                    'state_code'    => $row[7],
                    'jenis_kelamin'    => $row[8],
                    'no_telp'    => $row[9],
                    'academic_nim'    => $row[10],
                    'academic_faculty'    => $row[11],
                    'academic_program'    => $row[12],
                    'academic_year'    => $row[13],
                    'academic_graduate_year'    => $row[14],
                    'nik'       => $row[15],
                    'npwp'      =>  $row[16],
                ];

                // Simpan data ke dalam database
                $userModel->insert($data);
            }

            return redirect()->to('/')->with('success', 'Data berhasil diimpor.');
        } else {
            return redirect()->back()->with('error', 'Gagal mengunggah file.');
        }
    }

    public function deleteUser()
    {
        $userModel = new UserModel();
        $id = $this->request->getPost('id'); // Ambil id dari POST
        $db = \Config\Database::connect(); // Koneksi ke database
        $builder = $db->table('users'); // Menentukan tabel

        // Menghapus data berdasarkan ID
        $builder->delete(['id' => $id]); // Hapus data dengan ID tertentu

        // echo $id;
        //exit();
        //echo $userModel->find($id); exit();
        if ($db->affectedRows() > 0) {
            return redirect()->to('/')->with('message', 'User berhasil dihapus.');
        } else {
            return redirect()->to('/')->with('message', 'User tidak ditemukan.');
        }
    }
    public function tracer()
    {
        return view('tracer');
    }
    public function kontak()
    {
        return view('kontak');
    }

    public function tentang()
    {
        
        return view('tentang');
    }

    public function kuesioner()
    {
        return view('kuesionerkuesioner');
    }

    public function organisasi()
    {
        return view('organisasi');
    }

    public function welcome(): string
    {
        return view('welcomepage');
    }

    public function setting(): string
    {
        return view('pengaturan');
    }


    public function logout()
    {
        session()->destroy(); // Hapus session
        return redirect()->to('/halamanlogin'); // Redirect ke halaman login
    }

    public function cariuser()
    {
        $users = new UserModel();
        $cari = $this->request->getGet('cariuser'); // Mengambil input pencarian

        // Melakukan pencarian berdasarkan display_name
        if ($cari) {
            $data['my_data'] = $users
                ->like('display_name', $cari)
                ->orlike('username', $cari)
                ->orlike('email', $cari)
                ->orlike('group', $cari)->findAll(); // Menggunakan like untuk pencarian
        } else {
            $data['my_data'] = []; // Jika tidak ada input, set hasil kosong
        }

        return view('index', $data);
    }


    public function kuesioner_answer(): string
    {
        $model = new UserModel();

        // Mengambil data dari model
        $alumni = $model->getAlumni();

        $data = ['alumni' => $alumni];

        // Render view dan kirim data
        return view('/dataisian', $data);  // Pastikan 'index' adalah nama view yang benar
        // echo"ddd"; exit();
        //return view('index');
    }

    public function update()
    {
        $id = $this->request->getPost('id');
        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
    
        // Periksa apakah password diisi
        if (empty($password)) {
            $data = [
                'username' => $username,
                'email' => $email,
            ];
        } else {
            // Hash password baru
            $data = [
                'username' => $username,
                'email' => $email,
                'password' => $password,
                'updated_at' => date('Y-m-d H:i:s')
            ];
        }
    
        // Update data ke database
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->where('id', $id);
        $update = $builder->update($data);
    
        // Cek hasil update
        if ($update) {
            return $this->response->setJSON(['message' => 'User berhasil diupdate.']);
        } else {
            return $this->response->setJSON(['message' => 'Terjadi kesalahan saat memperbarui data.'], 500);
        }
    }
    
    }
