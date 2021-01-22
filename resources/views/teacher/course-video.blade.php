@extends('layouts/teacher')
@section('content')
 
 <div class="row">
   @foreach ($videos as $video)
   <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-black">
      <img style="width:100%; height:100px; object-fit :stretch" src="{{asset('media/picture/test.png')}}" alt="" />
      <div class="inner">
        <h5>{{$video->title}}</h5>
        <span style="text-overflow: ">{{$video->description}}</span>
      </div>
       <a href="{{url('/teacher/course-video/'.$video->id)}}" class="small-box-footer">View Video.. <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>      
   @endforeach
</div>
      <!-- /.row -->
@endsection