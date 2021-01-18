@extends('layouts/teacher')
@section('content')
  <!-- /.row -->
  <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Responsive Hover Table</h3>

            <div class="box-tools">
              <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                <div class="input-group-btn">
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Class</th>
                <th>Action</th>
              </tr>
              @foreach ($students as $student)
              <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->firstname .' '. $student->lastname }}</td>
                <td>{{$student->grade}}</td>
                <td><i class="fa fa-edit"></i></td>
              </tr>
              @endforeach
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
    </div>

@endsection