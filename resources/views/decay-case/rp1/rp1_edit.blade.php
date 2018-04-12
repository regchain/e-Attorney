@extends('decay-case.operator.template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Edit / Arsip Kasus')

@section('content')

{!! Form::model($case, ['url' => route('rp1.update', $case->id), 'method' => 'put']) !!}
	@include('decay-case.rp1.rp1_form')
{!! Form::close() !!}
      
@stop

@section('script')
	<!-- Form Kasus Posisi -->
	<script src='{{ asset('bower_components/js/kasus_posisi.js') }}'></script>
@endsection