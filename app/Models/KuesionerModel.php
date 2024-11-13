<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KuesionerModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Load database
        $this->load->database();
    }

    public function simpan_data($data) {
        // Simpan data ke database
        return $this->db->insert('nama_tabel', $data);
    }
}