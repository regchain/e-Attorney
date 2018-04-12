@extends('decay-case.operator.template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Dashboard')

@section('content')

@include('decay-case.partials._dataperkara', ['dashboard' => $dashboard])

<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-12">
		@include('decay-case.partials._kategorisubyek', ['subyek_hukum' => $subyek_hukum])
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12">
		@include('decay-case.partials._kategoriobyek', ['obyek_pidana' => $obyek_pidana])
	</div>
</div>
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-12">
		@include('decay-case.partials._kerugianvspemulihan', ['kerugian_pemulihan' => $kerugian_pemulihan, 'nama_bulan' => $nama_bulan])
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12">
		@include('decay-case.partials._totalmasatahanan', ['masa_tahanan' => $masa_tahanan])
	</div>
</div>
      
@stop

@section('scripts')

@endsection
