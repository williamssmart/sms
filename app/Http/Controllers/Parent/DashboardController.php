<?php

namespace App\Http\Controllers\Parent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\CourseVideo;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Grade;


class DashboardController extends Controller
{
  
  public function __construct(){
    $grade = Student::where('parentID' , '=', Auth::user()->phonenumber)
    ->join('grades','students.grade','=', 'grades.grade')->select(['grades.*'])->get();
    
    view()->share(['sharedGrade' => $grade]);
  }
      
    public function children(){
        $students = Student::where('parentID' , '=', Auth::user()->phonenumber)
        ->select(['students.id as id', 'firstname','lastname', 'grade'])->get();
        
      //  return $students;
        return view('parent/student')->with(['students' => $students]);
    }
    
    public function show($id){
      $student = Student::find($id)->join('grades','students.gradeID','=', 'grades.id')->select(['students.id as id', 'firstname','lastname', 'grade'])->first();
      
    //  return $student;
      return view('admin/view-student')->with(['student' => $student]);
    }
    
    public function resetpassword(){
        return view('parent/reset-password');
    }

       public function watchLesson($id)
    {
        $course_video = CourseVideo::find($id);
        
        return view('parent/watch-video')->with(['video' => $course_video]);
    }

    
}
