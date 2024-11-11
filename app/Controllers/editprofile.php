<?php

namespace App\Controllers;

use App\Models\dashboard;
use App\Models\editpro;
use CodeIgniter\Controller;
use CodeIgniter\Model;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard as HtmlDashboard;

class editprofile extends BaseController
{
    public function index(){
        return view('editprofile');
    }
}