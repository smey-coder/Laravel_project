<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\View\View;

class StudentController extends Controller
{
    public function index(): View {
        $students = Student::all();
        return view('students.index', compact('students'));
    }
}
