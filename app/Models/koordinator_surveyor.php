<?php

namespace App\Models;

use CodeIgniter\Model;

class koordinator_surveyor extends Model 
{
    protected $table = "koordinator_surveyor";
    protected $primaryKey = "id";
    protected $allowedFields = ['id', 'display_name', 'email', 'academic_faculty', 'tahun'];

    public function dataKoordinator()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT id, display_name, email, academic_faculty, tahun');
        return $query->getResultArray();
    }
}