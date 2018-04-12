<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | e-Kejaksaan</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    @include('templates.master.user.head')

    @yield('stylesheets')
    <!--
    BODY TAG OPTIONS:
    =================
    Apply one or more of the following classes to get the
    desired effect
    |---------------------------------------------------------|
    | SKINS         | skin-blue                               |
    |               | skin-black                              |
    |               | skin-purple                             |
    |               | skin-yellow                             |
    |               | skin-red                                |
    |               | skin-green                              |
    |---------------------------------------------------------|
    |LAYOUT OPTIONS | fixed                                   |
    |               | layout-boxed                            |
    |               | layout-top-nav                          |
    |               | sidebar-collapse                        |
    |               | sidebar-mini                            |
    |---------------------------------------------------------|
    -->
  </head>

<body class="skin-green-light sidebar-mini">
<div class="wrapper">

    <!-- Header -->
    @include('templates.master.user.header')

    <!-- Sidebar -->
    @include('templates.master.user.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          {{ $page_title or "Judul Halaman" }}
          <small>{{ $page_description or null }}</small>
        </h1>
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
    @include('templates.master.footer')

  <!-- Control Sidebar -->

  @include('templates.master.user.sidebar-right')
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

 @include('templates.master.user.scripts')

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
  @yield('scripts')     
</body>
</html>