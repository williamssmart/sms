@extends('layouts/admin')
@section('content')
<!-- /.row -->
<div class="row">
  <div class="col-xs-12">
    <div class="box">
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
      <div class="box-header">
        <h3 class="box-title">Class Information</h3>

      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tr>
            <th>ID</th>
            <th>Class</th>
            <th>Teacher One</th>
            <th>Teacher Two</th>
            <th>Tution</th>
          </tr>
          @foreach ($grades as $grade)
          <tr>
            <td>{{$grade->id}}</td>
            <td>{{$grade->grade}}</td>
            <td>{{$grade->teacher1}}</td>
            <td>{{$grade->teacher2}}</td>
            <td>{{$grade->tution}}</td>
          </tr>
          @endforeach
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>


<form role="form" method="post" action="{{url('admin/asign-teacher')}}">
  @csrf
  <div class="box">

    <div class="box-header">
      <h3 class="box-title">Asign Teacher To Class</h3>
    </div>
    <div class="box-body">

      <div class="form-group">
        <label>select class</label>
        <select name="grade_id" class="form-control">
          @foreach($grades as $grade)
          <option value='{{$grade->id}}'>{{$grade->grade}}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label>Select Teacher One</label>
        <select name="teacher1" class="form-control">
          @foreach($teachers as $teacher)
          <option value='{{$teacher->phonenumber}}'>{{$teacher->firstname . ' ' . $teacher->lastname .' ' . $teacher->phonenumber}}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label>Select Teacher Two</label>
        <select name="teacher2" class="form-control">
          @foreach($teachers as $teacher)
          <option value='{{$teacher->phonenumber}}'>{{$teacher->firstname . ' ' . $teacher->lastname .' ' . $teacher->phonenumber}}</option>
          @endforeach
        </select>
      </div>


      <button class="btn btn-primart" type="submit">save</button>
    </div>
  </div>

</form>

<form role="form" method="post" action="{{url('admin/create-grade')}}">
  @csrf
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Add New Class</h3>
    </div>
    <div class="box-body">
      <div class="form-group">
        <label>Class Name:</label>
        <div class="form-group">
          <input name="classname" type="text" class="form-control">
        </div>
      </div>

      <button class="btn btn-primart" type="submit">save</button>
    </div>
  </div>

</form>

@endsection