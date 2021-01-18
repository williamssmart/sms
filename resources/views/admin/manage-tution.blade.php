@extends('layouts/admin')
@section('content')

    <form role="form" method="post" action="{{url('admin/tution-setting')}}">
      @csrf
        <div class="box">
          <div class="box-header">
              <h3 class="box-title">Manage Tution</h3>
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
                <label>Tuition Fee</label>
                <div class="form-group">
                  <input name="tution"
                  placeholder="value shount not contain any form of punctuation"
                  type="number" class="form-control">
                </div>
              </div>
              
              <button class="btn btn-primart" type="submit">save</button>
             </div>
        </div>
    
  </form>
  
  @endsection