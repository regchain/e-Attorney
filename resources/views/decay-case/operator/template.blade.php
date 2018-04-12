<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | e-LAPDU</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    @include('decay-case.operator.head')

    @yield('stylesheets')

  </head>

<body class="skin-green-light sidebar-mini sidebar-collapse layout-boxed">
<div class="wrapper">

    <!-- Header -->
    @include('decay-case.operator.header')

    <!-- Sidebar -->
    @include('decay-case.operator.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <!-- Content Header (Page header) -->
      <section class="content-header">

        <div class="media">
          <div class="media-left media-middle">
            <a href="home">
                <img class="media-object" src="{{asset('images/logo-kejaksaan.png')}}" alt="logo"  height="100"">
              </a>
          </div>
          <div class="media-body">
            <h2 class="media-heading">@yield('judulhalaman')</h2>
            <h4>@yield('subjudul') </h4>
          </div>
        </div>


        <!-- You can dynamically generate breadcrumbs here -->
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
          <li class="active">Here</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Your Page Content Here -->
        @yield('content')
      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

  <!-- Footer -->
    @include('decay-case.operator.footer')

  <!-- Control Sidebar -->

  @include('decay-case.operator.sidebar-right')
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

 @include('decay-case.operator.scripts')

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
  @yield('scripts')     
</body>
</html>