<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseVideo;
use Illuminate\Support\Facades\Auth;
use App\Models\Grade;
use App\Traits\UploadMedia;
use App\Traits\DeleteMedia;

class CourseVideoController extends Controller
{
    use UploadMedia;
    use DeleteMedia;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $video = CourseVideo::where('teacher_id', '=' , Auth::user()->id)->get();

        return view('teacher/course-video')->with(['videos' => $video]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $grades = Grade::where('teacher1', '=', Auth::user()->phonenumber)->orWhere('teacher2','=',Auth::user()->phonenumber)->get();
      
    //  return $grades;
        return view('teacher/add-video')->with(['grades' => $grades]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:150',
            'video' => 'required|mimes:mp4',
            'screenshot' => 'required|mimes:jpg,png,jpeg',
            'description' => 'nullable|string',
            'grade' => 'required'
        ]);

        $course_video = new CourseVideo();
        $course_video->teacher_id = Auth::user()->id;
        $course_video->title = $request->title;
        $course_video->description = $request->description;
        $course_video->grade = $request->grade;
        $screenshot = $request->file('screenshot');
        $video = $request->file('video');
        
        $course_video->screenshoot = $this->UploadMedia($screenshot);
        $course_video->video_url = $this->UploadMedia($video);

        $course_video->save();
        return redirect()->back()->with(['status' => 'saved successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course_video = CourseVideo::find($id);
        
        return view('teacher/manage-video')->with(['video' => $course_video]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $video = CourseVideo::find($id);
        //return  response(['video' => $video->title]);
        return view('teacher/edit-video')->with(['video' => $video]);
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
        $request->validate([
            'title' => 'string|max:150',
            'screenshot' => 'nullable|mimes:jpg,png,jpeg',
            'description' => 'nullable|string'
        ]);

        $course_video = CourseVideo::find($id);
        
        $course_video->title = $request->title? $request->title : $course_video->title;
        
        $course_video->description = $request->description? $request->description : $course_video->description;
        
        $course_video->save();
        return redirect()->back()->with(['status' => 'updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = CourseVideo::find($id);
        if($video){
          $this->DeleteMedia($video->video_url, 'video');
          $this->DeleteMedia($video->screenshot,'picture');
        }
        $video->delete();
        return redirect()->back()->with(['status' => 'deleted successfully']);
    }
}
