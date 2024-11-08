<?php

namespace App\Models;

use CodeIgniter\Model;

class PengaturanModel extends Model
{
    protected $table         = 'pengaturan';  // Nama tabel di database
    protected $primaryKey    = 'id';
    protected $allowedFields = ['nama', 'slogan'];  // Field yang diizinkan untuk diupdate

    // Mengambil pengaturan dari database
    public function getPengaturan()
    {
        // Contoh pengambilan pesan terakhir
        $db = \Config\Database::connect();
        $query = $db->query('SELECT id, nama, slogan FROM pengaturan');
        return $query->getResultArray();
    }
}
