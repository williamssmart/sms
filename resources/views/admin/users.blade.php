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
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>phone</th>
                  <th>Access Level</th>
                  <th>Gender</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <td>183</td>
                  <td>John Doe</td>
                  <td>JSS 1</td>
                  <td>183</td>
                  <td>John Doe</td>
                  <td>JSS 1</td>
                  <td><i class="fa fa-edit"></i></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
  
  @endsection