  @extends('layouts/admin')
  @section('content')
    <!-- /.row -->
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
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
                <tr>
                  <td>183</td>
                  <td>John Doe</td>
                  <td>JSS 1</td>
                  <td>183</td>
                  <td>John Doe</td>

                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
     
    <form role="form" method="post" >
        <div class="box">
          <div class="box-header">
              <h3 class="box-title">Asign Teacher To Class</h3>
            </div>
            <div class="box-body">
    
              <div class="form-group">
                <label>select class</label>
                <select name="class" class="form-control">
                <option>Jss1</option>
                <option>Second Term</option>
                <option>Third Term</option>
                </select>
              </div>

               <div class="form-group">
                <label>Select Teacher</label>
                <select name="teacher" class="form-control">
                  <option>Teacher One</option>
                </select>
              </div>
              
               <div class="form-group">
                <label>Select Term</label>
                <select name="session" class="form-control">
                  <option>First Term</option>
                </select>
              </div>
              
              <button class="btn btn-primart" type="submit">save</button>
             </div>
        </div>
    
  </form>
  
    <form role="form" method="post" >
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