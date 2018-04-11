<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title') | el-PIDSUS</title> <!-- change this title every page -->

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->

    <!-- Optional theme -->

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    @yield('stylesheet')

    <!-- Font-Awesome -->
    <link href="{{asset('bower_components/font-awesome/css/font-awesome.css')}}" type="text/css">

    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap-theme.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/css/AdminLTE.css') }}">


    <!-- TinyMCE -->
    <script src='{{ asset('bower_components/tinymce/tinymce.min.js') }}'></script>

    <!-- Datatables Bootstrap -->
    <link href="{{ asset('bower_components/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('bower_components/selectize/dist/css/selectize.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/selectize/dist/css/selectize.bootstrap3.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>