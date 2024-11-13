<?php

namespace App\Models;

use CodeIgniter\Model;

class welcome extends Model
{
    protected $table      = 'welcome_message';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'message'];

    public function getmessage()
    {
        // Contoh pengambilan pesan terakhir
        $db = \Config\Database::connect();
        $query = $db->query('SELECT id, message FROM welcome_message');
        return $query->getResultArray();
    }
}
