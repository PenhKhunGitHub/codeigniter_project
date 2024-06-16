<?php

namespace App\Controllers;

use App\Models\StudentModel;

class StudentController extends BaseController
{
    public function index(): string
    {
        $studentModel = new StudentModel();
        $data['student'] = $studentModel->findAll();
        return view('student_form',$data);
    }
    public function getAllData(){
        $studentModel = new StudentModel();
        
        print_r($studentModel->findAll());
        
    }
    public function create(){
        return view('add_student');
    }
    public function addData(){
        $studentModel = new StudentModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'gender' => $this->request->getPost('gender'),
            'major' => $this->request->getPost('major'),
            'school' => $this->request->getPost('school')
        ];
        $studentModel->save($data);
        return redirect('student/form');
    }
    public function editData($id){
        $studentModel = new StudentModel();
        $data['student'] = $studentModel->find($id);
        return view('edit_student',$data);
    }
    public function updateData($id){
        $studentModel = new StudentModel();
        $studentModel->find($id);
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'gender' => $this->request->getPost('gender'),
            'major' => $this->request->getPost('major'),
            'school' => $this->request->getPost('school')
        ];
        $studentModel->update($id,$data);
        return redirect('student/form');
    }
    public function deleteData($id){
        $studentModel = new StudentModel();
        $studentModel->delete($id);
        return redirect('student/form');
    }
}