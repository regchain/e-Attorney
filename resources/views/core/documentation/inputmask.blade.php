@extends('templates.master.user')

@section('title', '')

@section('judulhalaman', 'KEJAKSAAN AGUNG')

@section('subjudul', 'REPUBLIK INDONESIA')

@section('stylesheets')
  <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('/bower_components/Ionicons/css/ionicons.min.css')}}">
@endsection

@section('content')
  
  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Form</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
          <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
                  <!-- Date dd/mm/yyyy -->
                  <div class="form-group">
                    <label>Date masks:</label>

                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->

                  <!-- Date mm/dd/yyyy -->
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->

                  <!-- phone mask -->
                  <div class="form-group">
                    <label>US phone mask:</label>

                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                      </div>
                      <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->

                  <!-- phone mask -->
                  <div class="form-group">
                    <label>Intl US phone mask:</label>

                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                      </div>
                      <input type="text" class="form-control"
                             data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->

                  <!-- IP mask -->
                  <div class="form-group">
                    <label>IP mask:</label>

                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-laptop"></i>
                      </div>
                      <input type="text" class="form-control" data-inputmask="'alias': 'ip'" data-mask>
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->

                </div>
                <!-- /.box-body -->
    <!-- /.box-body -->
    <div class="box-footer">
      Footer
    </div>
    <!-- /.box-footer-->
  </div>
  <!-- /.box -->

@endsection

@section('scripts')
  <!-- InputMask -->
  <script src="{{ asset('/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.js')}}"></script>
  <script src="{{ asset('/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
  <script src="{{ asset('/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>

  <script>
    $(function () {
      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
      //Money Euro
      $('[data-mask]').inputmask()
    })
  </script>

@endsection

