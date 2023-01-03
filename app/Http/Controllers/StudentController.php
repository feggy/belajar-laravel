<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Models\Student;
use App\Models\ClassRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{

    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $students = Student::query()
            ->where('name', 'LIKE', '%' . $keyword . '%')
            ->orWhere('nis', 'LIKE', '%' . $keyword . '%')
            ->orWhereHas('class', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%');
            })
            ->paginate(20);
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
        $pictureName = '';

        if ($request->file('photo')) {
            $extension = $request->file('photo')->getClientOriginalExtension();
            $pictureName = $request->name . '-' . now()->timestamp . '.' . $extension;
            $request->file('photo')->storeAs('photo', $pictureName);
        }

        $request['image'] = $pictureName;
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

    public function delete($id)
    {
        $student = Student::findOrfail($id);
        return view('students.student-delete', ['student' => $student]);
    }

    public function destroy($id)
    {
        $delete = Student::query()->findOrFail($id);
        $delete->delete();

        if ($delete) {
            Session::flash('status', 'success');
            Session::flash('message', 'delete student success!');
        }

        return redirect('/students');
    }

    public function deletedStudent()
    {
        $students = Student::onlyTrashed()->get();
        return view('students.students-deleted', ['students' => $students]);
    }

    public function restore($id)
    {
        $student = Student::withTrashed()->where('id', $id)->restore();
        return redirect('/students');
    }
}
