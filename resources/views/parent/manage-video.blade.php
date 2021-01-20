@extends('layouts/parent')
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
     
     <button style="margin-bottom: 2px"  class="btn btn-primary">Download Video <i class="fa fa-download"> </i></button>
     
          
    </div>
  </div>
</div>


@endsection
