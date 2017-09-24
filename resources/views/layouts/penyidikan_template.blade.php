@include('layouts.head')
  <body>
  @include('layouts.penyidikan_mainnav')
  <div class="wrapper">
    <div class="content-wrapper">
      <div class="content-header">
          @include('layouts.penyidikanheader')
          
      </div> 

      <div class="content">
       <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title text-uppercase">@yield('judulhalaman')</h3>
        </div>
        <div class="box-body">

          @include('layouts.ks_flash')
          @yield('materi')

        </div>
        <div class="panel-footer"><p>
        <div class="btn-group btn-xs">
          <a href="{{ route('rp1.index') }}" class="btn btn-default"><i class="fa fa-list-ol"></i> RP-1</a>                    
          <a href="{{ route('rp2.index') }}" class="btn btn-default"><i class="fa fa-list-ol"></i> RP-2</a>                    
          <a href="{{ route('rp3mum.index') }}" class="btn btn-default"><i class="fa fa-list-ol"></i> RP-3Mum</a>                    
          <a href="{{ route('rp3sus.index') }}" class="btn btn-default"><i class="fa fa-list-ol"></i> RP-3Sus</a>  
          <a href="{{ url('/obyek') }}" class="btn btn-default"><i class="fa fa-cubes"></i> RB-1</a>  
          <a href="{{ url('/subyek') }}" class="btn btn-default"><i class="fa fa-odnoklassniki"></i> RT</a>  
        </div>
        </p>
        </div>
      </div><!-- /.box -->
    </div><!-- /.content -->
    
    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/selectize.min.js') }}"></script>
    <script src="{{ asset('js/confirm.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    @yield('scripts')

  </div><!-- /.content-wrapper -->
  @include('layouts.footer')
</div><!-- /.wrapper -->

<!-- JQuery -->
    <!--<script src='{{ asset('plugins/jQuery/jquery-3.2.1.min.js') }}'></script>-->


    <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Latest compiled and minified JavaScript -->
    <!--<script src="{{ asset('js/bootstrap.js') }}"></script>-->
    </body>
</html>
