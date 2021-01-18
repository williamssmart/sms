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
     <h5>Mathematics.</h5>
     <p> video descriptiondescriptiondescription description description description description description description video descriptiondescriptiondescription description description description video descriptiondescriptiondescription description description description</p>
     
     <a style="margin-bottom: 2px" href="{{url('/teacher/course-video/1/edit')}}" class="btn btn-warning">Edit Video.. <i class="fa fa-edit"> </i></a>
     
    <form style="display:inline"  action="{{ url('/teacher/course-video', ['id' => 1]) }}" method="post">
     @method('delete') @csrf
      <button class="btn btn-danger">Delete Video.. <i class="fa fa-trash"> </i></button>
    </form>
          
    </div>
  </div>
</div>


@endsection
