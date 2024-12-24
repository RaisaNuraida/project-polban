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
        $query = $db->query('SELECT id, title, deskripsi, entries, active_status, conditional_logic FROM kuesioner_kuesioner');
        return $query->getResultArray();  // Mengembalikan data sebagai array

    }

    public function getUsers()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT id, title FROM kuesioner_kuesioner');
        return $query->getResultArray();  // Mengembalikan data sebagai array

    }

    public function pencarianuser($kunci)
    {
        return $this->table('kuesioner_kuesioner')
            ->like('title', $kunci)
            ->orlike('conditional_logic', $kunci);
    }

    public function countEntriesByGraduateYear($userId, $year = '2024') {
        $count = $this->db->table('kuesioner_kuesioner')
            ->join('users', 'kuesioner_kuesioner.user_id = users.id')
            ->where('users.id', $userId)
            ->where('users.academic_graduate_year', $year)
            ->countAllResults();
            $values['entries'] = 0;
            
        return $count;
    }     
    
    
    
}



