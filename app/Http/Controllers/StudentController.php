<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Models\Student;
use App\Models\ClassRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{

    public function index()
    {
        $students = Student::get();
        return view('students.students', ['students' => $students]);
    }

    public function show($id)
    {
        $student = Student::with(['class.teacher', 'extracurriculars'])->findOrFail($id);
        return view('students.student-detail', ['student' => $student]);
    }

    public function create()
    {
        $class = ClassRoom::all();
        return view('students.student-add', ['class' => $class]);
    }

    public function store(StoreStudentRequest $request)
    {
        $student = Student::create($request->all());

        if ($student) {
            Session::flash('status', 'success');
            Session::flash('message', 'add new student success!');
        }

        return redirect('/students/form-add');
    }

    public function edit($id)
    {
        $student = Student::findOrfail($id);
        $class = ClassRoom::query()->where('id', '!=', $student->class_id)->get(['id', 'name']);
        return view('students.student-edit', ['student' => $student, 'class' => $class]);
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id)->update($request->all());
        return redirect('/students');
    }
}
