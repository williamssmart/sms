@extends('layouts/admin')
@section('content')
<form role="form" method="post" action='/admin/add-user' enctype="multipart/form-data">
  @csrf
  <div class="box">
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
    @endif

    <div class="box-header">
      <h3 class="box-title">Teacher / Parent</h3>
    </div>
    <div class="box-body">

      <div class="form-group">
        <label>First Name:</label>
        <div class="form-group">
          <input name="firstname" type="text" class="form-control" required>
        </div>
      </div>

      <div class="form-group">
        <label>Surname:</label>
        <div class="form-group">
          <input name="lastname" type="text" class="form-control" required>
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
        <label>Phone Number:</label>
        <div class="form-group">
          <input name="phonenumber" type="tel" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label>Email:</label>
        <div class="form-group">
          <input name="email" type="email" class="form-control" required>
        </div>
      </div>

      <div class="form-group">
        <label>Password:</label>
        <div class="form-group">
          <input name="password" type="password" class="form-control" required>
        </div>
      </div>

      <div class="form-group">
        <label>Profile Photo:</label>
        <div class="form-group">
          <input name="passport" type="file" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label>Date Of Birth:</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-calender"></i>
          </div>
          <input name="dateofbirth" type="date" class="form-control" required>
        </div>
      </div>

      <div class="form-group">
        <label>Privilege</label>
        <select name="priv" class="form-control">
          <option value="3">Parent</option>
          <option value="2">Teacher</option>
        </select>
      </div>

      <div class="form-group">
        <label>Qualification:</label>
        <div class="form-group">
          <input name="qualification" type="text" class="form-control">
        </div>
      </div>

      <button class="btn btn-primary" type="submit">submit</button>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</form>
@endsection