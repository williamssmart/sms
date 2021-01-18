<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class DashboardController extends Controller
{
    public function student(){

        $students = Student::join('grades','students.gradeID','=', 'grades.id')->select(['students.id', 'firstname','lastname', 'grade'])->paginate(20);
        return view('teacher/student')->with(['students' => $students]);
    }

    public function resetpassword(){
        return view('teacher/reset-password');
    }
}
