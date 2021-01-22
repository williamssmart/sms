  @extends('layouts/admin')
  @section('content')
    <!-- /.row -->
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Users</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>phone</th>
                  <th>Access Level</th>
                  <th>Gender</th>
                  <th>Action</th>
                </tr>
                @foreach ($users as $user)
                <tr>
                  <td>{{$user->firstname . ' ' . $user->lastname}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->phonenumber}}</td>
                  <td>{{($user->priv == 1 ? 'Admin' : $user->priv == 2) ? 'Teacher' : 'Parent'}}</td>
                  <td>{{$user->gender}}</td>
                  <td><i class="fa fa-edit"></i></td>
                </tr>
                @endforeach
              </table>
              <span style = 'padding:20px' class='btn d-flex justify-content-center'>{!!$users->links()!!}
                </span>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
  
  @endsection