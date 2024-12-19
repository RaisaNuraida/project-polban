<?php

namespace App\Models;

use CodeIgniter\Model;

class welcome extends Model
{
    protected $table = 'welcome_message';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'message', 'tentang', 'kontak', 'academic_graduate_year', 'deskripsi', 'desk_surveyor'];

    public function getmessage()
    {
        // Contoh pengambilan pesan terakhir
        $db = \Config\Database::connect();
        $query = $db->query('SELECT id, message, tentang, kontak, academic_graduate_year, deskripsi, desk_surveyor FROM welcome_message');
        return $query->getResultArray();
    }

    public function getUsersData() // Mengganti nama metode agar sesuai dengan yang dipanggil di controller
    {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);

        // Join dengan tabel users
        $builder->select('users.academic_graduate_year, users.display_name, users.email, users.academic_program');
        $builder->join('users', 'users.id = welcome_message.id'); // Sesuaikan kondisi join jika diperlukan

        $query = $builder->get();
        return $query->getResult();
    }
}
