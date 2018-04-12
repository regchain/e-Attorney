@extends('templates.master.user')

@section('title', '')

@section('judulhalaman', 'KEJAKSAAN AGUNG')

@section('subjudul', 'REPUBLIK INDONESIA')

@section('stylesheets')
  <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ asset('/bower_components/admin-lte/plugins/iCheck/all.css')}}">
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
                  <!-- Minimal style -->

                  <!-- checkbox -->
                  <div class="form-group">
                    <label>
                      <input type="checkbox" class="minimal" checked>
                    </label>
                    <label>
                      <input type="checkbox" class="minimal">
                    </label>
                    <label>
                      <input type="checkbox" class="minimal" disabled>
                      Minimal skin checkbox
                    </label>
                  </div>

                  <!-- radio -->
                  <div class="form-group">
                    <label>
                      <input type="radio" name="r1" class="minimal" checked>
                    </label>
                    <label>
                      <input type="radio" name="r1" class="minimal">
                    </label>
                    <label>
                      <input type="radio" name="r1" class="minimal" disabled>
                      Minimal skin radio
                    </label>
                  </div>

                  <!-- Minimal red style -->

                  <!-- checkbox -->
                  <div class="form-group">
                    <label>
                      <input type="checkbox" class="minimal-red" checked>
                    </label>
                    <label>
                      <input type="checkbox" class="minimal-red">
                    </label>
                    <label>
                      <input type="checkbox" class="minimal-red" disabled>
                      Minimal red skin checkbox
                    </label>
                  </div>

                  <!-- radio -->
                  <div class="form-group">
                    <label>
                      <input type="radio" name="r2" class="minimal-red" checked>
                    </label>
                    <label>
                      <input type="radio" name="r2" class="minimal-red">
                    </label>
                    <label>
                      <input type="radio" name="r2" class="minimal-red" disabled>
                      Minimal red skin radio
                    </label>
                  </div>

                  <!-- Minimal red style -->

                  <!-- checkbox -->
                  <div class="form-group">
                    <label>
                      <input type="checkbox" class="flat-red" checked>
                    </label>
                    <label>
                      <input type="checkbox" class="flat-red">
                    </label>
                    <label>
                      <input type="checkbox" class="flat-red" disabled>
                      Flat green skin checkbox
                    </label>
                  </div>

                  <!-- radio -->
                  <div class="form-group">
                    <label>
                      <input type="radio" name="r3" class="flat-red" checked>
                    </label>
                    <label>
                      <input type="radio" name="r3" class="flat-red">
                    </label>
                    <label>
                      <input type="radio" name="r3" class="flat-red" disabled>
                      Flat green skin radio
                    </label>
                  </div>
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
<!-- iCheck 1.0.1 -->
<script src="{{ asset('/bower_components/admin-lte/plugins/iCheck/icheck.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ asset('/bower_components/fastclick/lib/fastclick.js')}}"></script>

  <script>
    $(function () {
      //iCheck for checkbox and radio inputs
      $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass   : 'iradio_minimal-blue'
      })
      //Red color scheme for iCheck
      $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
        checkboxClass: 'icheckbox_minimal-red',
        radioClass   : 'iradio_minimal-red'
      })
      //Flat red color scheme for iCheck
      $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass   : 'iradio_flat-green'
      })

    })
  </script>
@endsection

