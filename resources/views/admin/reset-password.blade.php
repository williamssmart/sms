@extends('layouts/admin')
@section('content')
<form method="post" action="/admin/reset-password" />

@csrf
<div class="box box-danger">
  <div class="box-header">
    <h3 class="box-title">password change</h3>
  </div>
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <div class="box-body">

    <!-- password  -->
    <div class="form-group">
      <label>New Password:</label>
      <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-phone"></i>
        </div>
        <input name="password" type="password" class="form-control">
      </div>
      <!-- /.input group -->
    </div>

    <!-- comfirm pass mask -->
    <div class="form-group">
      <label>Comfirm password:</label>

      <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-phone"></i>
        </div>
        <input name="password_confirmation" type="password" class="form-control">
      </div>
      <!-- /.input group -->
    </div>

    <button class="btn btn-primary">change</button>
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->






</form>
@endsection