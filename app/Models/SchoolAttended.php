<?php

namespace App\Models;

use CodeIgniter\Model;

class SchoolAttended extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'school_attended';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['pre_school', 'pre_sch_level', 'pre_sch_period', 'grade_sch_g1_g3', 'grade_g1_g3_level',
'grade_g1_g3_period', 'grade_sch_g4_g6', 'grade_g4_g6_level', 'grade_g4_g6_period', 'junior_sch_g7_g10', 'junior_g7_g10_level',
'junior_g7_g10_period', 'account_id'];

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
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
