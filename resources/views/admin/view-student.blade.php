@extends(Auth::user()->priv === '1'?'layouts/admin' : 'layouts/parent')

@section('content')

      <div class="row">
        <div class="col-md-5">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">

              <h3 class="profile-username text-center">{{ucwords( $student->firstname.' '. $student->middlename.' ' . $student->lastname)}}</h3>

              <p class="text-muted text-center">{{$student->grade}}</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Registration Number</b> <a class="pull-right">{{$student->regNumber}}</a>
                </li>
                <li class="list-group-item">
                  <b>Gender</b> <a class="pull-right">{{$student->gender}}</a>
                </li>
                <li class="list-group-item">
                  <b>Date Of Birth</b> <a class="pull-right">{{$student->ddob.'/'. $student->mmob.'/'.$student->yyob}}</a>
                </li>
                <li class="list-group-item">
                  <b>Nationality</b> <a class="pull-right">{{$student->nationality}}</a>
                </li>
                <li class="list-group-item">
                  <b>Blood Group</b> <a class="pull-right">{{$student->bloodgroup}}</a>
                </li>
                
                <li class="list-group-item">
                  <b>Parent Name</b> <a class="pull-right">{{$student->parentID}}</a>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Upload Result</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          
        </div>
        <!-- /.col -->
        <div class="col-md-7">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">

              <p class="text-muted text-center">Emergency Contact 1</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Name</b> <p class="pull-right">{{$student->icename1}}</p>
                </li>
                <li class="list-group-item">
                  <b>Relationship</b> <p class="pull-right">{{$student->relationship1}}</p>
                </li>
                <li class="list-group-item">
                  <b>Email</b> <p class="pull-right">{{$student->email1}}</p>
                </li>
                <li class="list-group-item">
                  <b>Phone Number</b> <p class="pull-right">{{$student->phone1}}</p>
                </li>
              </ul>
              
              <p class="text-muted text-center">Emergency Contact 2</p>
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Name</b> <p class="pull-right">{{$student->icename2}}</p>
                </li>
                <li class="list-group-item">
                  <b>Relationship</b> <p class="pull-right">{{$student->relationship2}}</p>
                </li>
                <li class="list-group-item">
                  <b>Email</b> <a class="pull-right">{{$student->email2}}</a>
                </li>
                <li class="list-group-item">
                  <b>Phone Number</b> <a class="pull-right">{{$student->phone2}}</a>
                </li>
              </ul>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
</div>
@endsection