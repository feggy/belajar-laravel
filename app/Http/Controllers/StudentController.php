<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Student;

class StudentController extends Controller
{

    public function index()
    {
        // $students = Student::with(['class.teacher', 'extracurriculars'])->get();
        $students = Student::get();
        return view('students.students', ['students' => $students]);
    }

    public function create()
    {
        //
    }

    public function store(StoreStudentRequest $request)
    {
        //
    }

    public function show($id)
    {
        $student = Student::with(['class.teacher', 'extracurriculars'])->findOrFail($id);
        return view('students.student-detail', ['student' => $student]);
    }

    public function edit(Student $student)
    {
        //
    }

    public function update(UpdateStudentRequest $request, Student $student)
    {
        //
    }

    public function destroy(Student $student)
    {
        //
    }
}
