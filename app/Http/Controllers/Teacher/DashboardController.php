<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use App\Models\Grade;

class DashboardController extends Controller
{
    public function student(){
        $user = Auth::user();
        $students = Student::where('grade','=', 'Grade 3')
        ->select(['id', 'firstname','lastname', 'grade', 'regNumber'])->paginate(20);
        return view('teacher/student')->with(['students' => $students]);
    }

    public function resetpassword(){
        return view('teacher/reset-password');
    }

    public function viewStudent($id){
        $student = Student::find($id);
        
        return view('teacher/view-student')->with(['student' => $student]);
      }
}
