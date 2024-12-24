<?php

namespace App\Models;

use CodeIgniter\Model;

class KuesionerSectionModel extends Model
{
    protected $table = 'kuesioner_kuesioner_section';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'title', 'deskripsi', 'kuesioner_id', 'page_id',
        'created_on', 'updated_on'
    ];

    public $timestamps = false; // Jika Anda tidak menggunakan timestamp otomatis
}