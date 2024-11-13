<?php

namespace App\Models;

use CodeIgniter\Model;

class editpro extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'display_name', 'username', 'password', 'email', 'group', 'created_at', 'updated_at', 'academic_nim', 'academic_faculty', 'academic_program', 'academic_year', 'academic_graduate_year', 'street', 'city', 'state_code', 'zip_code', 'jenis_kelamin', 'no_telp', 'nik', 'npwp'];
}