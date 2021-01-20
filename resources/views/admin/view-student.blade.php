@extends(Auth::user()->priv === '2'?'layouts/admin' : 'layouts/parent');

@section('content')

      <div class="row">
        <div class="col-md-5">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">

              <h3 class="profile-username text-center">Nina Mcintire</h3>

              <p class="text-muted text-center">Software Engineer</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Name</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Grade</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Registration Number</b> <a class="pull-right">13,287</a>
                </li>
                <li class="list-group-item">
                  <b>Date Of Birth</b> <a class="pull-right">13,287</a>
                </li>
                <li class="list-group-item">
                  <b>Nationality</b> <a class="pull-right">13,287</a>
                </li>
                <li class="list-group-item">
                  <b>Blood Group</b> <a class="pull-right">13,287</a>
                </li>
                
                <li class="list-group-item">
                  <b>Parent Name</b> <a class="pull-right">13,287</a>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
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
                  <b>Name</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Relationship</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Email</b> <a class="pull-right">13,287</a>
                </li>
                <li class="list-group-item">
                  <b>Phone Number</b> <a class="pull-right">13,287</a>
                </li>
              </ul>
              
              <p class="text-muted text-center">Emergency Contact 2</p>
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Name</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Relationship</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Email</b> <a class="pull-right">13,287</a>
                </li>
                <li class="list-group-item">
                  <b>Phone Number</b> <a class="pull-right">13,287</a>
                </li>
              </ul>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
</div>
@endsection