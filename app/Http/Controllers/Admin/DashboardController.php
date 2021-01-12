<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacher_count = count(User::where('priv' ,'=',2)->get()); 
        $no_of_females = count(Student::where('gender' ,'=','female')->get()); 
        $no_of_male = count(Student::where('gender' ,'=','male')->get());
        $no_of_parent = count(Student::where('gender' ,'=',3)->get()); 
        
        $count = ['teachers' => $teacher_count, 'female_students'=>$no_of_females, 'male_students'=> $no_of_male, 'parents'=> $no_of_parent];
        
        return view('admin/dashboard')->with(['count' => $count]);
    }


    public function student(){
        $students = Student::join('grades','students.gradeID','=', 'grades.id')->select(['students.id', 'firstname','lastname', 'grade'])->paginate(20);
        return view('admin/students')->with(['students' => $students]);
    }

    public function resetpassword(){
        return view('admin/reset-password');
    }

    public function storepassword(Request $request){
        $request->validate([
            'password' => 'required|min:6|string|confirmed',
        ]);

        $password = Hash::make($request->password); 
        $user = Auth::user();
        $user->password = $password;

        $user->save();
        return redirect()->back()->with(['message' => 'password updated successfully']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

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
