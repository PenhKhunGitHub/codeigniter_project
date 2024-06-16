<?php
namespace App\Models;
use CodeIgniter\Model;
class StudentModel extends Model{
    protected $table = "student_tb";
    protected $primaryKey = "id";
    protected $allowedFields = [
        'name',
        'email',
        'gender',
        'major',
        'school'
    ];
}

?>