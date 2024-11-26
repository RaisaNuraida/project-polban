<?php

namespace App\Models;

use CodeIgniter\Model;

class kuesionerpage extends Model
{
    protected $table = 'kuesioner_page';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'title', 'kuesioner_id', 'deskripsi', 'sections', 'conditional_logic', 'created_on', 'created_by', 'updated_on', 'updated_by', 'ordering_count'];

    public function getKuesioner()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM kuesioner_page');
        return $query->getResultArray();  // Mengembalikan data sebagai array

    }
}