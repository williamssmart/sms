@extends(Auth::user()->priv === '2'?'layouts/admin' : 'layouts/teacher')
@section('content')
<!-- /.row -->
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>//
      </div>
      @endif

      @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
      @endif

      <div class="box-header">
        <h3 class="box-title">Outbox</h3>

        <div class="box-tools">
          <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

            <div class="input-group-btn">
              <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tr>
            <th>ID</th>
            <th>Sent To</th>
            <th>subject</th>
            <th>body</th>
            <th>Action</th>
          </tr>
          @foreach ($messages as $message)
          <tr>
            <td>{{$message->id}}</td>
            <td>{{$message->firstname. ' '. $message->lastname}}</td>
            <td>{{$message->subject}}</td>
            <td>{{$message->body}}</td>
            <td>
              <form style="display:inline" action="{{ url('/admin/message', ['id' => 1]) }}" method="post">
                @method('delete') @csrf
                <button class="btn btn-danger">Delete Video.. <i class="fa fa-trash"> </i></button>
              </form>
            </tr>
            @endforeach
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>

  @endsection