<?php

namespace App\Controllers;

use App\Models\KuesionerSectionModel;

class KuesionerController extends BaseController
{
    // Menampilkan form untuk input data
    public function index()
    {
        return view('kuesionersection'); // Ganti dengan nama view form Anda
    }
    
    // Menyimpan data yang dikirimkan dari form
    public function savequestions()
    {
        // Load model KuesionerSectionModel
        $kuesionerModel = new KuesionerSectionModel();

        // Ambil data dari form
        $questions = $this->request->getPost('questions');
        $kuesioner_id = $this->request->getPost('kuesioner_id');
        $page_id = $this->request->getPost('page_id');

        // Decode data JSON menjadi array
        $questions = json_decode($questions, true);

        // Cek apakah $questions adalah array yang valid dan tidak kosong
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

                // Log data yang akan disimpan
                log_message('info', 'Data to save: ' . print_r($data, true));

                // Simpan data ke database
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
    public function getQuestions()
{
    $kuesionerModel = new KuesionerSectionModel();
    $questions = $kuesionerModel->findAll(); // Ambil semua pertanyaan

    return $this->response->setJSON($questions); // Kembalikan data dalam format JSON
}
    public function updateQuestion()
    {
        $kuesionerModel = new KuesionerSectionModel();

        // Ambil data dari request
        $id = $this->request->getPost('id');
        $text = $this->request->getPost('text');

        // Validasi ID dan teks
        if (empty($id) || empty($text)) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'ID atau teks tidak boleh kosong']);
        }

        // Update data di database
        $data = [
            'title' => $text,
            'updated_on' => date('Y-m-d H:i:s')
        ];

        $kuesionerModel->update($id, $data);

        return $this->response->setJSON(['status' => 'success', 'message' => 'Pertanyaan berhasil diperbarui']);
    }

    public function deleteQuestion()
    {
        $kuesionerModel = new KuesionerSectionModel();

        // Ambil ID dari request
        $id = $this->request->getPost('id');

        // Validasi ID
        if (empty($id)) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'ID tidak boleh kosong']);
        }

        // Hapus data dari database
        if ($kuesionerModel->delete($id)) {
            return $this->response->setJSON(['status' => 'success', 'message' => 'Pertanyaan berhasil dihapus']);
        } else {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Gagal menghapus pertanyaan']);
        }
    }
}