<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'display_name', 'username', 'password', 'email', 'group', 'created_at', 'updated_at', 'academic_nim', 'academic_faculty', 'academic_program', 'academic_year', 'academic_graduate_year', 'street', 'city', 'state_code', 'zip_code', 'jenis_kelamin', 'no_telp', 'nik', 'npwp'];

    // Alternatif: Fungsi untuk mengambil data menggunakan query SQL manual
    public function getAllDataManual()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT id, display_name, username, password, email, `group`, created_at, updated_at FROM users');
        return $query->getResultArray();  // Mengembalikan data sebagai array
    }

    public function getAdministrator()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT  id, display_name, username, password, email, created_at, updated_at FROM users WHERE `group` = "administrator"');
        return $query->getResultArray();
    
    }

    public function getAtasan()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT  id, display_name, username, password, email, created_at, updated_at FROM users WHERE `group` = "atasan"');
        return $query->getResultArray();
    }

    public function getAlumni()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT  id, display_name, username, password, email, created_at, updated_at, academic_nim, academic_faculty, academic_program, academic_year, academic_graduate_year  FROM users WHERE `group` = "alumni"');
        return $query->getResultArray();
    }

    public function getPerusahaan()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT  id, display_name, username, password, email, created_at, updated_at FROM users WHERE `group` = "perusahaan"');
        return $query->getResultArray();
    }
}
