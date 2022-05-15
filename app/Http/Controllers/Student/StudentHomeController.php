<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentHomeController extends Controller
{
    public function home() {
        $page_title = 'Home';
        return view('student.dashboard.index', compact('page_title'));
    }
}
