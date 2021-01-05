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
          <input class="form-control" placeholder="Subject:">
          </div>
        <div class="form-group">
          <textarea id="compose-textarea" class="form-control" style="height: 300px">
          <h1><u>Heading Of Message</u></h1>
          <h4>Subheading</h4>
        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
          was born and I will give you a complete account of the system, and expound the actual teachings
          of the great explorer of the truth, the master-builder of human happiness. No one rejects,
            blinded by desire, that they cannot foresee</p>
              </textarea>
              </div>
              <div class="form-group">
                <div class="btn btn-default btn-file">
                  <i class="fa fa-paperclip"></i> Attachment
                  <input type="file" name="attachment">
                </div>
                <p class="help-block">Max. 32MB</p>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
                <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
              </div>
              <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
@endsection
