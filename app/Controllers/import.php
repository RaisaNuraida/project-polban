<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard as HtmlDashboard;

class import extends BaseController
{
    public function index(){

        return view('importdata');
    }
}