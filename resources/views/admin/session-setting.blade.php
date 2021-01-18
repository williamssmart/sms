 @extends('layouts/admin')
  @section('content')
  
  <form role="form" method="post" action="{{url('admin/session-setting')}}">
    @csrf
    
    <h3>Set Academic Session And Year</h3>
        <div class="box">
          <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <div class="box-body">
    
              <div class="form-group">
                <label>Session</label>
                <select name="session" class="form-control">
                <option>First Term</option>
                <option>Second Term</option>
                <option>Third Term</option>
                </select>
              </div>

               <div class="form-group">
                <label>Year</label>
                <select name="year" class="form-control">
                  <option>2018 - 2019</option>
                  <option>2019 - 2020</option>
                  <option>2020 - 2021</option>
                  <option>2021 - 2022</option>
                </select>
              </div>
              <button class="btn btn-primart" type="submit">save</button>
             </div>
        </div>
    
  </form>
  @endsection