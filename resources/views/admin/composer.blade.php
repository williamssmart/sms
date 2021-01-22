@extends(Auth::user()->priv === '1'?'layouts/admin' : 'layouts/teacher')
@section('content')

    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Compose New Message</h3>
      </div>
    <!-- /.box-header -->
    <form method="post" action="{{url('admin/message')}}" />
      @csrf
      
      <div class="box-body">
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
      <div class="form-group">
        <label>select class</label>
        <select name="recipient" class="form-control">
           <option>select recipient</option>
          @foreach($users as $user)
          <option value='{{$user->id}}'>{{$user->firstname . ' ' . $user->lastname}}</option>
          @endforeach
        </select>
      </div>
        <div class="form-group">
          <input name="subject" class="form-control" placeholder="Subject:">
          </div>
        <div class="form-group">
          <textarea name="body" id="compose-textarea" class="form-control" style="height: 300px">

              </textarea>
              </div>
            </div>
            <!-- /.box-body -->
        <div class="box-footer">
              <div class="pull-right">
                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
              </div>
            </div>
            <!-- /.box-footer -->
      </form>      
          </div>
          <!-- /. box -->
@endsection
