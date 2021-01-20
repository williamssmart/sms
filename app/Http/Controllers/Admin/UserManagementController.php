<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use App\Models\Grade;
use App\Traits\UploadMedia;
use App\Traits\RegNumberGenarator;
use Illuminate\Support\Facades\Hash;

class UserManagementController extends Controller
{
  use UploadMedia;
  use RegNumberGenarator;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addUsers()
    {
        return view('admin/add-users');
    }
    
    public function storeUsers(Request $request)
    {
      $user = $request->validate([
          'firstname' => 'required|string|max:100',
          'lastname' => 'required|string',
          'email' => 'required|email|unique:users|max:225',
          'password' => 'required|min:8|string',
          'dateofbirth' => 'required|date',
          'gender' => 'required|string',
          'phonenumber' => 'required|string|unique:users',
          'passport'=> 'required',
          'priv' => 'required',
          'qualification' => 'nullable'
          ]);
        
        $user['passport'] = $this->UploadMedia($request->file('passport'));
        $user['password'] = Hash::make($request->password);
    
       User::create($user);
      return redirect()->back()->with(['status' => 'user added successfully']);
    }


    public function addStudents()
    {
      $grades = Grade::all();
      $parents = User::where('priv', '=' , 3)->get();
        return view('admin/add-student')->with(['grades' => $grades,'parents' =>$parents]);
    }
    
    public function viewStudent(){
      $student = Student::all();
      
      return view('admin/view-student')->with(['student' => $student]);
    }
    
    public function storeStudents(Request $request)
    {
      $student  = $request->validate([
        'firstname' => 'required|string|max:100',
        'middlename' => 'required|string|max:100',
        'lastname' => 'required|string|max:100',
        'gender' => 'required|string|max:100',
        'bloodgroup' => 'string|max:5',
        'nationality' => 'required|string',
        'dateofbirth' => 'required',
        'height' => 'max:15',
        'weight' => 'max:15',
        'homelanguage'  =>  'nullable|string',
        'icename1'    => 'required|string|max:100',
        'relationship1' => 'required|string|max:100',
        'phone1' => 'required|string|max:100',
        'icename2' => 'nullable|string|max:100',
        'relationship2' => 'nullable|string|max:100',
        'phone2' => 'nullable|string|max:100',
        'passport' => 'required',
         'parentID' => 'required',
         'gradeID' => 'required'
        ]);
        
        $student['passport'] = $this->UploadMedia($request->file('passport'));
        $student['regnumber'] = $this->genarator();
   
   
      Student::create($student);
     return redirect()->back()->with(['status' => 'students registered  successfully']);
    }
    
    
    public function listUsers(){
      $user = User::all();
  
      return view('admin/users')->with(['users' => $user]);
    }
    /**


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
