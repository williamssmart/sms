@extends('layouts/admin')
@section('content')

    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Compose New Message</h3>
      </div>
    <!-- /.box-header -->
      <div class="box-body">
        <div class="form-group">
          <input class="form-control" placeholder="To:">
        </div>
        <div class="form-group">
          <input name="subject" class="form-control" placeholder="Subject:">
          </div>
        <div class="form-group">
          <textarea id="compose-textarea" class="form-control" style="height: 300px">

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
          </div>
          <!-- /. box -->
@endsection
