<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'user_id';
    protected $allowedFields = ['user_id', 'username', 'password', 'email', 'created_at', 'updated_at'];

    // Alternatif: Fungsi untuk mengambil data menggunakan query SQL manual
    public function getAllDataManual()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT username, password, email, created_at, updated_at FROM users');
        return $query->getResultArray();  // Mengembalikan data sebagai array
    }

}