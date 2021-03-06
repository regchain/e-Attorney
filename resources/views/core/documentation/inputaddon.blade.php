@extends('templates.master.user')

@section('title', '')

@section('judulhalaman', 'KEJAKSAAN AGUNG')

@section('subjudul', 'REPUBLIK INDONESIA')

@section('stylesheets')
  {{-- expr --}}
@endsection

@section('content')
  
  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Input Add On</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
          <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
                  <div class="input-group">
                    <span class="input-group-addon">@</span>
                    <input type="text" class="form-control" placeholder="Username">
                  </div>
                  <br>

                  <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-addon">.00</span>
                  </div>
                  <br>

                  <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input type="text" class="form-control">
                    <span class="input-group-addon">.00</span>
                  </div>

                  <h4>With icons</h4>

                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input type="email" class="form-control" placeholder="Email">
                  </div>
                  <br>

                  <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-addon"><i class="fa fa-check"></i></span>
                  </div>
                  <br>

                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                    <input type="text" class="form-control">
                    <span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
                  </div>

                  <h4>With checkbox and radio inputs</h4>

                  <div class="row">
                    <div class="col-lg-6">
                      <div class="input-group">
                            <span class="input-group-addon">
                              <input type="checkbox">
                            </span>
                        <input type="text" class="form-control">
                      </div>
                      <!-- /input-group -->
                    </div>
                    <!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                      <div class="input-group">
                            <span class="input-group-addon">
                              <input type="radio">
                            </span>
                        <input type="text" class="form-control">
                      </div>
                      <!-- /input-group -->
                    </div>
                    <!-- /.col-lg-6 -->
                  </div>
                  <!-- /.row -->

                  <h4>With buttons</h4>

                  <p class="margin">Large: <code>.input-group.input-group-lg</code></p>

                  <div class="input-group input-group-lg">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Action
                        <span class="fa fa-caret-down"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </div>
                    <!-- /btn-group -->
                    <input type="text" class="form-control">
                  </div>
                  <!-- /input-group -->
                  <p class="margin">Normal</p>

                  <div class="input-group">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-danger">Action</button>
                    </div>
                    <!-- /btn-group -->
                    <input type="text" class="form-control">
                  </div>
                  <!-- /input-group -->
                  <p class="margin">Small <code>.input-group.input-group-sm</code></p>

                  <div class="input-group input-group-sm">
                    <input type="text" class="form-control">
                        <span class="input-group-btn">
                          <button type="button" class="btn btn-info btn-flat">Go!</button>
                        </span>
                  </div>
                  <!-- /input-group -->
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
  
  <!-- FastClick -->
  <script src="{{ asset('/bower_components/fastclick/lib/fastclick.js')}}"></script>
@endsection

