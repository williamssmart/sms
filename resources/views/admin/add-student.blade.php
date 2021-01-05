@extends('layouts/admin')
@section('content')
   <!-- form start -->
    <form role="form" method="post" >
    <div class="box">
          <div class="box-header">
              <h3 class="box-title">Register Student</h3>
            </div>
            <div class="box-body">
    
              <div class="form-group">
                <label>First Name:</label>
                <div class="form-group">
                  <input name="firstname" type="text" class="form-control">
                </div>
              </div>
              
              <div class="form-group">
                <label>Middle Name:</label>
                <div class="form-group">
                  <input name="middlename" type="text" class="form-control">
                </div>
              </div>

              <div class="form-group">
                <label>Surname:</label>
                <div class="form-group">
                  <input name="surename" type="text" class="form-control">
                </div>
              </div>
              
              <div class="form-group">
               <label>Gender</label>
                <select name="gender" class="form-control">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>
              </div>
                
              <div class="form-group">
                <label>Blood Group:</label>
                <div class="form-group">
                  <input name="bloodgroup" type="text" class="form-control">
                </div>
              </div>
              
              <div class="form-group">
                <label>Nationality:</label>
                <div class="form-group">
                  <input name="nationality" type="text" class="form-control">
                </div>
              </div>
              
              <div class="form-group">
                <label>Religion:</label>
                <div class="form-group">
                  <input name="religion" type="text" class="form-control">
                </div>
              </div>
              
              <div class="form-group">
                <label>Passport:</label>
                <div class="form-group">
                  <input name="passport" type="file" class="form-control">
                </div>
              </div>
              
              <div class="form-group">
                <label>Parent:</label>
                <div class="form-group">
                  <input name="parent" type="text" class="form-control">
                </div>
              </div>
              
              <div class="form-group">
                <label>Date Of Birth:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calender"></i>
                  </div>
                  <input name="dateofbirth" type="date" class="form-control">
                </div>
              </div>
              
              <div class="form-group">
                <label>Weight:</label>
                <div class="form-group">
                  <input name="weight" type="text" class="form-control" placeholder="be sure to add kg surfix">
                </div>
              </div>
              
              <div class="form-group">
                <label>Height:</label>
                <div class="form-group">
                  <input name="height" type="text" class="form-control">
                </div>
              </div>
              
              <div class="form-group">
                <label>Class</label>
                <select name="class" class="form-control">
                  <option>1</option>
                </select>
              </div>
                
              <div class="form-group">
                <label>Home Language:</label>
                <div class="form-group">
                  <input name="language" type="text" class="form-control">
                </div>
              </div>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          
       <div class="box">
        <div class="box-header">
          <p><b>In Case of Emergency  Who to contact when parent/guardian is unavailable</b></p>
          <h3 class="box-title">1st choice</h3>
        </div>
         <div class="box-body">
            <div class="form-group">
              <label>Full Name:</label>
              <div class="form-group">
                <input name="fullname1" type="text" class="form-control">
              </div>
            </div>
              
              <div class="form-group">
                <label>Relationship:</label>
                <div class="form-group">
                  <input name="relationship1" type="text" class="form-control">
                </div>
              </div>

              <div class="form-group">
                <label>Phone Number:</label>
                <div class="form-group">
                  <input name="phone1" type="tel" class="form-control">
                </div>
            </div>
          </div>
          
          
        <div class="box-header">
          <h3 class="box-title">1st choice</h3>
        </div>
         <div class="box-body">
            <div class="form-group">
              <label>Full Name:</label>
              <div class="form-group">
                <input name="fullname2" type="text" class="form-control">
              </div>
            </div>
              
              <div class="form-group">
                <label>Relationship:</label>
                <div class="form-group">
                  <input name="relationship2" type="text" class="form-control">
                </div>
              </div>

              <div class="form-group">
                <label>Phone Number:</label>
                <div class="form-group">
                  <input name="phone2" type="tel" class="form-control">
                </div>
            </div>
            
           <button class="btn m-5 btn-primary" type="submit">Register</button>
          </div>
       
       </div>
    </form>
@endsection