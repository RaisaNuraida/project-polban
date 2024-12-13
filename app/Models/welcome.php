<?php

namespace App\Models;

use CodeIgniter\Model;

class welcome extends Model
{
    protected $table      = 'welcome_message';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'message', 'tentang', 'kontak', 'academic_graduate_year', 'deskripsi', 'desk_surveyor'];

    public function getmessage()
    { 
        // Contoh pengambilan pesan terakhir
        $db = \Config\Database::connect();
        $query = $db->query('SELECT id, message, tentang, kontak, academic_graduate_year, deskripsi, desk_surveyor FROM welcome_message');
        return $query->getResultArray();
    }

    public function getAcademicYears()
    {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);

        // Ambil hanya tahun unik, urutkan secara ascending
        $builder->select('academic_graduate_year')->distinct();
        $builder->orderBy('academic_graduate_year', 'ASC');

        $query = $builder->get();
        return $query->getResultArray();
    }
}
