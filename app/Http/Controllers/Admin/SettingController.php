<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Grade;
use App\Models\User;
use App\Models\Session;

class SettingController extends Controller
{
    //
    public function setSession(){
      return view('admin/session-setting');
    }
    
    public function storeSession(Request $request){
      $request->validate([
        'year' => 'required',
        ]);
      
      $session = new Session();
      $session->year = $request->year;
      
      $session->save();
      return redirect()->back()->with(['status' => 'saved successfully']);
    }
    
    public function setClassDetails(){
      $grades = Grade::all();
   //   return response($grades);
      
      $teachers = User::where('priv', '=' , '2')->get();
      
      return view('admin/manage-class')->with(['grades' => $grades? $grades :[] ,'teachers' => $teachers? $teachers :[]]);
    
    }
    public function asignTeacher(Request $request){
      $request->validate([
        'teacher1' => 'required|numeric',
        'teacher2' => 'numeric|nullable',
        'grade_id' => 'required|numeric',
      ]);
      
      $grade = Grade::find($request->grade_id);
      $grade->teacher1 = $request->teacher1;
      $grade->teacher2 = $request->teacher2;

      $grade->save();
      return redirect()->back()->with(['status' => 'saved successfully']);
    }
    
    
    public function createClass(Request $request){
      $request->validate([
        'classname' => 'required|string|max:100'
        ]);
        
        $grade = new Grade();
        $grade->grade = $request->classname;
        $grade->save();
        
        return redirect()->back()->with(['status' => 'saved successfully']);
    }
    
    public function setTution(){
      $grades = Grade::all();
      
      return view('admin/manage-tution')->with(['grades' => $grades? $grades :[] ]);
    }
    
    public function storeTution(Request $request){
      $request->validate([
        'tution' => 'required',
        'grade_id' => 'required'
      ]);
      $grade = Grade::find($request->grade_id);
      $grade->tution = $request->tution;
      
      $grade->save();
      return redirect()->back()->with(['status' => 'saved successfully']);
    }
}
