@extends('layouts/admin')
@section('content')

    <form role="form" method="post" >
        <div class="box">
          <div class="box-header">
              <h3 class="box-title">Manage Tution</h3>
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
                <label>Tuition Fee</label>
                <div class="form-group">
                  <input name="tutionfee"
                  placeholder="value shount not contain any form of punctuation"
                  type="number" class="form-control">
                </div>
              </div>
              
              <button class="btn btn-primart" type="submit">save</button>
             </div>
        </div>
    
  </form>
  
  @endsection