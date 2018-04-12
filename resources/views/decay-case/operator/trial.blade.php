@extends('elapdu.operator.template')

@section('title', 'home')

@section('judulhalaman', 'KEJAKSAAN AGUNG')

@section('subjudul', 'REPUBLIK INDONESIA')

@section('stylesheets')
      
@endsection

@section('content')
  
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Judul</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="row">
        <div class="box-body">
          <div class="col-md-6">
        <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Progress Bars Different Sizes</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <p><code>.progress</code></p>

            <div class="progress">
              <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                <span class="sr-only">40% Complete (success)</span>
              </div>
            </div>
            <p>Class: <code>.sm</code></p>

            <div class="progress progress-sm active">
              <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                <span class="sr-only">20% Complete</span>
              </div>
            </div>
            <p>Class: <code>.xs</code></p>

            <div class="progress progress-xs">
              <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                <span class="sr-only">60% Complete (warning)</span>
              </div>
            </div>
            <p>Class: <code>.xxs</code></p>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                <span class="sr-only">60% Complete (warning)</span>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col (left) -->
      <div class="col-md-6">
        <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Progress bars</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="progress">
              <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                <span class="sr-only">40% Complete (success)</span>
              </div>
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-aqua" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                <span class="sr-only">20% Complete</span>
              </div>
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-yellow" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                <span class="sr-only">60% Complete (warning)</span>
              </div>
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                <span class="sr-only">80% Complete</span>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col (right) -->
        </div>
        <!-- /.box-body -->
        </div>
        <!-- /.row-box-body -->

        <div class="row">
        <div class="box-body">
          <div class="col-md-6">
            <div class="box box-solid">
              <div class="box-header with-border">
                <h3 class="box-title">Vertical Progress Bars Different Sizes</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body text-center">
                <p>By adding the class <code>.vertical</code> and <code>.progress-sm</code>, <code>.progress-xs</code> or
                  <code>.progress-xxs</code> we achieve:</p>

                <div class="progress vertical active">
                  <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="height: 40%">
                    <span class="sr-only">40%</span>
                  </div>
                </div>
                <div class="progress vertical progress-sm">
                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="height: 100%">
                    <span class="sr-only">100%</span>
                  </div>
                </div>
                <div class="progress vertical progress-xs">
                  <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height: 60%">
                    <span class="sr-only">60%</span>
                  </div>
                </div>
                <div class="progress vertical progress-xxs">
                  <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height: 60%">
                    <span class="sr-only">60%</span>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col (left) -->
          <div class="col-md-6">
            <div class="box box-solid">
              <div class="box-header with-border">
                <h3 class="box-title">Vertical Progress bars</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body text-center">
                <p>By adding the class <code>.vertical</code> we achieve:</p>

                <div class="progress vertical">
                  <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="height: 40%">
                    <span class="sr-only">40%</span>
                  </div>
                </div>
                <div class="progress vertical">
                  <div class="progress-bar progress-bar-aqua" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="height: 20%">
                    <span class="sr-only">20%</span>
                  </div>
                </div>
                <div class="progress vertical">
                  <div class="progress-bar progress-bar-yellow" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height: 60%">
                    <span class="sr-only">60%</span>
                  </div>
                </div>
                <div class="progress vertical">
                  <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="height: 80%">
                    <span class="sr-only">80%</span>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col (right) -->
        </div>
        <!-- /.box-body -->
        </div>
        <!-- /.row-box-body -->

        <div class="row">
        <div class="box-body">
                <div class="col-md-6">
        <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Collapsible Accordion</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="box-group" id="accordion">
              <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
              <div class="panel box box-primary">
                <div class="box-header with-border">
                  <h4 class="box-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                      Collapsible Group Item #1
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                  <div class="box-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                    nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                    labore sustainable VHS.
                  </div>
                </div>
              </div>
              <div class="panel box box-danger">
                <div class="box-header with-border">
                  <h4 class="box-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                      Collapsible Group Danger
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                  <div class="box-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                    nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                    labore sustainable VHS.
                  </div>
                </div>
              </div>
              <div class="panel box box-success">
                <div class="box-header with-border">
                  <h4 class="box-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                      Collapsible Group Success
                    </a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                  <div class="box-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                    nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                    labore sustainable VHS.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
      <div class="col-md-6">
        <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Carousel</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
              </ol>
              <div class="carousel-inner">
                <div class="item active">
                  <img src="http://placehold.it/900x500/39CCCC/ffffff&text=I+Love+Bootstrap" alt="First slide">

                  <div class="carousel-caption">
                    First Slide
                  </div>
                </div>
                <div class="item">
                  <img src="http://placehold.it/900x500/3c8dbc/ffffff&text=I+Love+Bootstrap" alt="Second slide">

                  <div class="carousel-caption">
                    Second Slide
                  </div>
                </div>
                <div class="item">
                  <img src="http://placehold.it/900x500/f39c12/ffffff&text=I+Love+Bootstrap" alt="Third slide">

                  <div class="carousel-caption">
                    Third Slide
                  </div>
                </div>
              </div>
              <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="fa fa-angle-left"></span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="fa fa-angle-right"></span>
              </a>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
        </div>
        <!-- /.box-body -->
        </div>
        <!-- /.row-box-body -->

        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

@endsection

@section('scripts')
    
@endsection

