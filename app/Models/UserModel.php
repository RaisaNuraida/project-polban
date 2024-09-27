<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'user_id';
    protected $allowedFields = ['user_id','username', 'password', 'email'];

    public function getAllData()
    {
        return $this->findAll();  // Mengambil semua data dari tabel
    }
}
