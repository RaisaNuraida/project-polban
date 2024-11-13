<?php

namespace App\Models;

use CodeIgniter\Model;

class m_organisasi extends Model
{
    protected $table = 'organisasi';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'academic_faculty', 'academic_program', 'academic_group'];
    public function organisasi()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT id, academic_faculty, academic_program, academic_group FROM organisasi');
        return $query->getResultArray();  // Mengembalikan data sebagai array
    }
    public function distinc()
    {
        $db = \Config\Database::connect();
        $query = $db->table('organisasi')
            ->select('academic_faculty, academic_program')
            ->distinct()
            ->get();

        return $query->getResult();
    }
}
