<?php

namespace App\Http\Controllers;

use App\Models\Extracuricular;
use Illuminate\Http\Request;

class ExtracuricularController extends Controller
{
    public function index()
    {
        // $ekskul = Extracuricular::with('students')->get();
        $ekskul = Extracuricular::get();
        return view('extracuricular.extracuricular', ['ekskulList' => $ekskul]);
    }

    public function show($id)
    {
        $ekskul = Extracuricular::with('students')->findOrFail($id);
        return view('extracuricular.extracuricular-detail', ['ekskul' => $ekskul]);
    }
}
