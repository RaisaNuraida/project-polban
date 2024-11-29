<?php

namespace App\Models;

use CodeIgniter\Model;

class welcome extends Model
{
    protected $table      = 'welcome_message';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'message', 'tentang', 'kontak'];

    public function getmessage()
    {
        // Contoh pengambilan pesan terakhir
        $db = \Config\Database::connect();
        $query = $db->query('SELECT id, message, tentang, kontak FROM welcome_message ORDER BY id DESC LIMIT 1');
        return $query->getResultArray();
    }
}
