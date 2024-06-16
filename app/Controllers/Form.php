<?php

namespace App\Controllers;
use App\Models\StudentModel;
use Config\Database;

class Form extends BaseController
{
    public function store(): string
    {
        return view('student_form');
    }
    public function getAllData(){
        // $db = Database::connect();
        // if($db){
        //     $query = $db->query("SELECT * FROM student_tb;");
        //     $rs = $query->getResult();
        //     echo $rs;
        // }else{
        //     return "faile connection";
        // }
        $studentModel = new StudentModel();
        
        print_r($studentModel->findAll());
        
    }
    public function insertData(){
        $data = [
            'name' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'gender' => $this->request->getVar('gemder'),
            'major' => $this->request->getVar('major'),
            'school' => $this->request->getVar('school')
        ];
        // $db = Database::connect();
        // $builder = $db->table('student_tb');
        // $builder->insert($data);
        $model = new StudentModel();
        $model->insert($data);
    }
}
