<?php

namespace App\Controllers;

use App\Models\dashboard;
use App\Models\UserModel;
use CodeIgniter\Controller;
use CodeIgniter\Model;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard as HtmlDashboard;

class login extends BaseController
{

    public function halamanlogin(){
        return view('halamanlogin');
    }

    public function halamanloginuser(){
        return view('loginuser');
    }
    public function login()
{
    $UserModel = new UserModel();
    $login = $this->request->getPost('login');

    if ($login) {
        
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Validasi input
        if (empty($username) || empty($password)) {
            $err = "Silahkan Masukkan Username dan Password";
        } else {
            // Mencari pengguna berdasarkan username
            $data = $UserModel->where('username', $username)->first();
            $data = $UserModel->where('password', $password)->first();

            // Cek apakah pengguna ditemukan dan verifikasi password
            if ($data === null) {
                // Tangani kasus di mana tidak ada data ditemukan
                $err = "Username atau Password Salah";
                // Mungkin ingin mengalihkan atau memberi pesan kesalahan
            } else {
                // Sekarang Anda dapat mengakses elemen dari $data
                if (password_verify($password, $data['password'])) {
                    $err = "Password tidak sesuai.";
                    } else {  
                         if ($data['group'] !== 'administrator') {
                        $err = "Login hanya untuk admin, silahkan masuk ke halaman login user";
                        } else {
                            // Jika valid, set session
                            $datasesi = [
                                'username' => $data['username'],
                                'password' => $data['password'],
                                'group' => $data['group'],
                                // Jangan menyimpan password dalam session
                            ];
                            session()->set($datasesi);
                            return redirect()->to('/'); // Ganti dengan URL yang sesuai

                    }
                } 
                }
                
            } 
        }
        // Menyimpan pesan kesalahan ke session
        if (isset($err)) {
            session()->setFlashdata('error', $err);
            return redirect()->to('login'); // Kembali ke halaman login
        }
    

    return view('halamanlogin'); // Jika tidak ada post, tampilkan halaman login

    }

    public function loginuser()
    {
        $UserModel = new UserModel();
        $login = $this->request->getPost('login');
    
        if ($login) {
            
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
    
            // Validasi input
            if (empty($username) || empty($password)) {
                $err = "Silahkan Masukkan Username dan Password";
            } else {
                // Mencari pengguna berdasarkan username
                $data = $UserModel->where('username', $username)->first();
                $data = $UserModel->where('password', $password)->first();
    
                // Cek apakah pengguna ditemukan dan verifikasi password
                if ($data === null) {
                    // Tangani kasus di mana tidak ada data ditemukan
                    $err = "Username atau Password Salah";
                    // Mungkin ingin mengalihkan atau memberi pesan kesalahan
                } else {
                    // Sekarang Anda dapat mengakses elemen dari $data
                    if (password_verify($password, $data['password'])) {
                        $err = "Password tidak sesuai.";
                        } else {  
                             if ($data['group'] == 'administrator') {
                            $err = "Login hanya untuk user, silahkan masuk ke halaman login admin";
                            } else {
                                // Jika valid, set session
                                $datasesi = [
                                    'username' => $data['username'],
                                    'password' => $data['password'],
                                    'group' => $data['group'],
                                    // Jangan menyimpan password dalam session
                                ];
                                session()->set($datasesi);
                                return redirect()->to('/'); // Ganti dengan URL yang sesuai
    
                        }
                    } 
                    }
                    
                } 
            }
            // Menyimpan pesan kesalahan ke session
            if (isset($err)) {
                session()->setFlashdata('error', $err);
                return redirect()->to('loginuser'); // Kembali ke halaman login
            }
        
    
        return view('halamanloginuser'); // Jika tidak ada post, tampilkan halaman login
    
        }
}
