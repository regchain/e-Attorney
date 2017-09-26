@extends('layouts.penyidikan_template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Tambah Laporan Masyarakat / Kasus')

@section('materi')

{!! Form::open(['url' => route('rp1.store'), 'method' => 'post']) !!}
	@include('rp1.rp1_form')
{!! Form::close() !!}

@stop

@section('script')
	<!-- Form Kasus Posisi -->
	<script src='{{ asset('js/kasus_posisi.js') }}'></script>
@endsection