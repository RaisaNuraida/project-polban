<?php

namespace App\Models;

use CodeIgniter\Model;

class m_kuesioner extends Model
{
    protected $table = 'kuesioner_kuesioner';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'title', 'deskripsi', 'entries', 'active_status', 'pages', 'created_on', 'created_by', 'updated_on', 'updated_by', 'ordering_count', 'conditional_logic'];

    public function getKuesionerWithUsers()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT id, title, entries, active_status, conditional_logic FROM kuesioner_kuesioner');
        return $query->getResultArray();  // Mengembalikan data sebagai array

    }
}
