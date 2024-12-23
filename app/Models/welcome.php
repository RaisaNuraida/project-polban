<?php

namespace App\Models;

use CodeIgniter\Model;
use app\Models\UserModel;

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

    public function getJoinedData()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.academic_graduate_year, users.academic_program, users.academic_program, welcome_message.message');
        $builder->join('welcome_message', 'users.id = welcome_message.user_id'); // Adjust the join condition as needed
        $query = $builder->get();
        return $query->getResult();
    }

    public function insertSurveyorData($surveyor_data)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('koordinator_surveyor'); // Replace with your surveyor table name
        $builder->select('koordinator_surveyor.display_name, koordinator_surveyor.email, koordinator_surveyor.academic_faculty, koordinator_surveyor.tahun');
        $builder->join('welcome_message', 'koordinator_surveyor.id = welcome_message.koordinator_surveyor_id'); // Adjust the join condition as needed

        foreach ($surveyor_data as $data) {
            $builder->insert($data);
        }
    }

}
