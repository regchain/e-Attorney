@extends('layouts.penyidikan_template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Dashboard')

@section('materi')

@include('partials._dataperkara', ['dashboard' => $dashboard])

<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-12">
		@include('partials._kategorisubyek', ['subyek_hukum' => $subyek_hukum])
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12">
		@include('partials._kategoriobyek', ['obyek_pidana' => $obyek_pidana])
	</div>
</div>
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-12">
		@include('partials._kerugianvspemulihan', ['kerugian_pemulihan' => $kerugian_pemulihan, 'nama_bulan' => $nama_bulan])
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12">
		@include('partials._totalmasatahanan')
	</div>
</div>
      
@stop

@section('scripts')

@endsection
