@extends('layouts.penyidikan_template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Dashboard')

@section('materi')

@include('partials._dataperkara')

<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-12">
		@include('partials._3dpiedonut')
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12">
		@include('partials._totalmasatahanan')
	</div>
</div>
<div class="row">
	<div class="col-lg-9 col-md-8 col-sm-12">
		@include('partials._kerugianvspemulihan')
	</div>
	<div class="col-lg-3 col-md-4 col-sm-12">
		@include('partials._kerugiannegara')
	</div>
</div>
      
@stop

@section('scripts')

@endsection
