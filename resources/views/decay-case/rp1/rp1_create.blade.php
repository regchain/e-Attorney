@extends('decay-case.operator.template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Tambah Laporan Masyarakat / Kasus')

@section('content')

{!! Form::open(['url' => route('rp1.store'), 'method' => 'post']) !!}
	@include('decay-case.rp1.rp1_form')
{!! Form::close() !!}

@stop

@section('script')
	<!-- Form Kasus Posisi -->
	<script src='{{ asset('bower_components/js/kasus_posisi.js') }}'></script>
@endsection