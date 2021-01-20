@extends(Auth::user()->priv === '2'?'layouts/admin' : 'layouts/teacher')

@section('content')

  <!-- /.col -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Inbox</h3>

              <div class="box-tools pull-right">
                <div class="has-feedback">
                  <input type="text" class="form-control input-sm" placeholder="Search Mail">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
           
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                   <tr>
                    <td class="mailbox-name">Senders Name</td>
                    <td class="mailbox-subject">Subject
                    </td>
                     <td class="mailbox-subject">Action
                    </td>
                  @foreach($messages as $message)
                  <tr>
                    <td class="mailbox-name">{{$message->firstname . ' '. $message->lastname}}</td>
                    <td class="mailbox-subject">{{$message->subject}}..
                    </td>
                     <td class="mailbox-subject"><a class="btn btn-primary" href="{{url('admin/message/'.$message->id)}}">Read <i class="fa fa-eye"></i></a>
                    </td>
                  </tr>
                  @endforeach

                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
                </button>
              
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                <div class="pull-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.pull-right -->
              </div>
            </div>
          </div>
          <!-- /. box -->
        
@endsection