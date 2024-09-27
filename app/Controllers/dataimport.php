<?php

namespace App\Controllers;

use App\Models\MyModel;

class MyController extends BaseController
{
    public function index()
    {
        $model = new MyModel(); // Inisialisasi model
        $data['my_data'] = $model->getAllData(); // Mengambil semua data dan mengirimnya ke view

        return view('my_view', $data);  // Render view dan kirim data
    }
}
