<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        // $class = ClassRoom::with(['students', 'teacher'])->get();
        $class = ClassRoom::get();
        return view('classroom.classroom', ['classList' => $class]);
    }
}
