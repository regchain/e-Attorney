@extends('templates.master.user')

@section('title', '')

@section('judulhalaman', 'KEJAKSAAN AGUNG')

@section('subjudul', 'REPUBLIK INDONESIA')

@section('stylesheets')
  <!-- daterange picker -->
    <link rel="stylesheet" href="{{ asset('/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{ asset('/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
@endsection

@section('content')
  
  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Date Range Picker</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
          <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
                  <!-- Date -->
                  <div class="form-group">
                    <label>Date:</label>

                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="datepicker">
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->

                  <!-- Date range -->
                  <div class="form-group">
                    <label>Date range:</label>

                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="reservation">
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->

                  <!-- Date and time range -->
                  <div class="form-group">
                    <label>Date and time range:</label>

                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-clock-o"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="reservationtime">
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->

                  <!-- Date and time range -->
                  <div class="form-group">
                    <label>Date range button:</label>

                    <div class="input-group">
                      <button type="button" class="btn btn-default pull-right" id="daterange-btn">
                        <span>
                          <i class="fa fa-calendar"></i> Date range picker
                        </span>
                        <i class="fa fa-caret-down"></i>
                      </button>
                    </div>
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
  <!-- date-range-picker -->
  <script src="{{ asset('/bower_components/moment/min/moment.min.js')}}"></script>
  <script src="{{ asset('/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
  <!-- bootstrap datepicker -->
  <script src="{{ asset('/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>

  <script>
    $(function () {
      //Date range picker
      $('#reservation').daterangepicker()
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
      //Date range as a button
      $('#daterange-btn').daterangepicker(
        {
          ranges   : {
            'Today'       : [moment(), moment()],
            'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month'  : [moment().startOf('month'), moment().endOf('month')],
            'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate  : moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
      )

      //Date picker
      $('#datepicker').datepicker({
        autoclose: true
      })

    })
  </script>
@endsection

