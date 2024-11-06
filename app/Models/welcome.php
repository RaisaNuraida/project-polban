<?php

namespace App\Models;

use CodeIgniter\Model;

class welcome extends Model
{
    protected $table      = 'welcome_message';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'message'];

}