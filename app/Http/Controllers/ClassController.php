<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        $class = ClassRoom::get();
        return view('classroom.classroom', ['classList' => $class]);
    }

    public function show($id)
    {
        $class = ClassRoom::with(['students', 'teacher'])->findOrFail($id);
        return view('classroom.classrom-detail', ['class' => $class]);
    }
}
