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
		@include('partials._kategorisubyek')
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12">
		@include('partials._kategoriobyek')
	</div>
</div>
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-12">
		@include('partials._kerugianvspemulihan')
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12">
		@include('partials._totalmasatahanan')
	</div>
</div>
      
@stop

@section('scripts')

@endsection
