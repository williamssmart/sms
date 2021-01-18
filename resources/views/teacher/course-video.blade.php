@extends('layouts/teacher')
@section('content')
 
 <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-black">
            <img style="width:100%; height:100px; object-fit :stretch" src="{{asset('media/picture/test.png')}}" alt="" />
            <div class="inner">
              <h5>Mathematics</h5>
              <p> video Description</p>
            </div>
             <a href="{{url('/teacher/course-video/1')}}" class="small-box-footer">View Video.. <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-black">
            <img style="width:100%; height:100px; object-fit :stretch" src="{{asset('media/picture/test.png')}}" alt="" />
            <div class="inner">
              <h5>Mathematics</h5>
              <p> video Description</p>
            </div>
             <a href="{{url('/teacher/course-video/1')}}" class="small-box-footer bg-primary">view video<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box" style="background-color:grey">
            <img style="width:100%; height:100px; object-fit :stretch" src="{{asset('media/picture/test.png')}}" alt="" />
            <div class="inner">
              <h5>Mathematics</h5>
              <p> video Description</p>
          </div>
            <a href="#" class="small-box-footer">watch video<i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
@endsection