<?php

namespace App\Models;

use CodeIgniter\Model;

class ComentarioModel extends Model
{
   
    protected $table            = 'comentarios';

    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
 
    protected $allowedFields    = ['categoria', 'descripcion'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
 
}
