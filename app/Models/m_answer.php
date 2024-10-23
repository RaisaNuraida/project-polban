<?php

namespace App\Models;

use CodeIgniter\Model;

class m_answer extends Model
{
    protected $table = 'kuesioner_answer';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kuesioner_id', 'id', 'username', 'answer', 'entries', 'active_status', 'pages', 'created_on', 'created_by', 'updated_on', 'updated_by', 'ordering_count', 'conditional_logic'];

    public function getKuesionerWithUsers()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT id, title, entries, active_status, conditional_logic FROM kuesioner_answer');
        return $query->getResultArray();  // Mengembalikan data sebagai array

    }
}
