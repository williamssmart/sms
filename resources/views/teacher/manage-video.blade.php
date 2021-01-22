@extends('layouts/teacher')
@section('content')

<div class="row">
  <div class="col-lg-6 col-sm-6">
    <div>
      <video loop  controls  src="{{asset('media/video/test.mp4')}}" style="width:100%;" />
    </div>
  </div>
  <div class="col-lg-3 col-sm-6">
    <div> 
     <h5><b>{{$video->title}}</b></h5>
     <p>{{$video->description}}</p>
     
     <a style="margin-bottom: 2px" href="{{url('/teacher/course-video/'.$video->id.'/edit')}}" class="btn btn-warning">Edit Video.. <i class="fa fa-edit"> </i></a>
     
    <form style="display:inline"  action="{{ url('/teacher/course-video', ['id' => $video->id]) }}" method="post">
     @method('delete') @csrf
      <button class="btn btn-danger">Delete Video.. <i class="fa fa-trash"> </i></button>
    </form>
          
    </div>
  </div>
</div>


@endsection
