<?php

namespace App\Models;

use CodeIgniter\Model;

class PengaturanModel extends Model
{
    protected $table = 'pengaturan';  // Nama tabel di database
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'slogan'];  // Field yang diizinkan untuk diupdate

    // Mengambil pengaturan dari database
    public function getPengaturan()
    {
        return $this->first();  // Ambil satu baris pengaturan (asumsi hanya ada satu pengaturan)
    }

    // Update pengaturan
    public function updatePengaturan($data)
    {
        // Jika pengaturan sudah ada, update. Jika tidak ada, buat baru
        return $this->save($data);
    }
}
