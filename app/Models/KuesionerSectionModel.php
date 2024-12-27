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
    public function savequestions()
{
    $kuesionerModel = new KuesionerSectionModel();
    $questions = $this->request->getPost('questions');
    $kuesioner_id = $this->request->getPost('kuesioner_id');
    $page_id = $this->request->getPost('page_id');

    $questions = json_decode($questions, true);

    if (is_array($questions) && !empty($questions)) {
        foreach ($questions as $question) {
            $data = [
                'title' => isset($question['text']) ? $question['text'] : '',
                'deskripsi' => isset($question['description']) ? $question['description'] : '',
                'kuesioner_id' => $kuesioner_id,
                'page_id' => $page_id,
                'created_on' => date('Y-m-d H:i:s'),
                'updated_on' => date('Y-m-d H:i:s')
            ];

            log_message('info', 'Data to save: ' . print_r($data, true));

            if ($kuesionerModel->save($data)) {
                log_message('info', 'Data saved successfully');
            } else {
                log_message('error', 'Failed to save data: ' . print_r($kuesionerModel->errors(), true));
            }
        }

        return redirect()->to('/kuesionerkuesioner')->with('success', 'Pertanyaan berhasil disimpan');
    } else {
        return redirect()->to('/kuesionerkuesioner')->with('error', 'Data pertanyaan tidak valid');
    }
}
}