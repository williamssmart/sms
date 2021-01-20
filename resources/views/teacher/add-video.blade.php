@extends('layouts/teacher')
@section('content')
<form method="post" action="/teacher/course-video" enctype="multipart/form-data">

@csrf
<div class="box">
  


  <div class="box-header">
    <h3 class="box-title">Upload video lesson</h3>
  </div>
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  @if (session('status'))
  <div class="alert alert-success">
    {{ session('status') }}
  </div>
  @endif
  
  <div class="box-body">

    <div class="form-group">
        <label>Title:</label>
        <div class="form-group">
          <input name="title" type="text" class="form-control" required>
        </div>
      </div>
      
  <div class="form-group">
        <label>Grade:</label>
        <div class="form-group">
         @foreach($grades as $grade)
          <option value='{{$grade->id}}'>{{$grade->grade}}</option>
          @endforeach
        </div>
      </div>

      
      <div class="form-group">
        <label>Description</label>
        <textarea name = 'description' class="form-control" rows="3" placeholder="Enter ...">

        </textarea>
      </div>
  
      <div class="form-group">
        <label>Video Screenshot:</label>
        <div class="form-group">
          <input name="screenshot" type="file" class="form-control" required>
        </div>
      </div>


      <div class="form-group">
        <label>Video:</label>
        <div class="form-group">
          <input name="video" type="file" class="form-control" required>
        </div>
      </div>

    <button class="btn btn-primary">Upload</button>
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->






</form>
@endsection