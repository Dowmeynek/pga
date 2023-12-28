<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentParents extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'student_parents';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['mother_fullname', 'mom_res_add','mom_off_add', 'mom_mob_num','mom_off_num', 'mother_email', 'mother_occupation',
    'father_fullname', 'dad_res_add','dad_off_add', 'dad_mob_num','dad_off_num','father_email', 'father_occupation', 'account_id'];

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
