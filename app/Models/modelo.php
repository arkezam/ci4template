<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelo extends Model
{
    protected $table      = 'persona';
    protected $primaryKey = 'dni';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['*'];

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}