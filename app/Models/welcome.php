<?php

namespace App\Models;

use CodeIgniter\Model;
use app\Models\UserModel;
use app\Models\koordinator_surveyor;

class welcome extends Model
{
    protected $table = 'welcome_message';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'message', 'tentang', 'kontak', 'tahun', 'tipe_data', 'program_studi', 'nama', 'email', 'jurusan', 'created_on', 'updated_on'];

    public function getmessage()
    {
        // Contoh pengambilan pesan terakhir
        $db = \Config\Database::connect();
        $query = $db->query('SELECT id, message, tentang, kontak, tahun, tipe_data, program_studi, nama, email, jurusan, created_on, updated_on FROM welcome_message');
        return $query->getResultArray();
    }

    public function getAllData()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('welcome_message');
        $builder->select('
        welcome_message.*,
        users.academic_graduate_year AS tahun_lulus,
        users.academic_program AS program_studi,
        users.display_name AS user_name, 
        users.email AS user_email, 
        koordinator_surveyor.tahun AS tahun_koordinator,
        koordinator_surveyor.academic_faculty AS fakultas,
        koordinator_surveyor.display_name AS koordinator_name, 
        koordinator_surveyor.email AS koordinator_email
    ');
        $builder->join('users', 'users.id = welcome_message.users_id', 'left');
        $builder->join('koordinator_surveyor', 'koordinator_surveyor.id = welcome_message.koordinator_id', 'left');
        $query = $builder->get();
        return $query->getResultArray();  // Pastikan data dikembalikan dalam bentuk array
    }

    public function getPrograms()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('academic_program');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getDisplayNames()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('display_name');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getEmails()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('email');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getGraduationYears()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('academic_graduate_year');
        $query = $builder->get();
        return $query->getResultArray();
    }

    // Menghitung total data
    public function countAllMessages()
    {
        $db = \Config\Database::connect();
        return $db->table('welcome_message')->countAllResults();
    }

    // Mengambil data dengan pagination
    public function getMessagesPaginated($perPage, $offset)
    {
        return $this->db->table('welcome_message')
            ->limit($perPage, $offset)
            ->orderBy('tahun', 'DESC')
            ->get()
            ->getResultArray();
    }
}
