@extends('layouts/teacher')
@section('content')

<form method="post" action="/teacher/course-video">
  @csrf
  @method('patch')
  <div class="box">


    <div class="box-header">
      <h3 class="box-title">Update video lesson</h3>
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


    <div class="box-body">

      <div class="form-group">
        <label>Title:</label>
        <div class="form-group">
          <input name="title" type="text" class="form-control"  required>
        </div>
      </div>


      <div class="form-group">
        <label>Description</label>
        <textarea name='description' class="form-control" rows="3" placeholder="Enter ...">

        </textarea>
      </div>

      <button class="btn btn-primary">Update</button>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->






</form>
@endsection