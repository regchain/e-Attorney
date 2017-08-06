@extends('layouts.penyidikan_template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Edit / Arsip Kasus')

@section('materi')

{!! Form::model($case, ['url' => route('rp1.update', $case->id), 'method' => 'put']) !!}
	@include('rp1.rp1_form')
{!! Form::close() !!}
      
@stop

@section('script')
	<!-- Form Kasus Posisi -->
	<script src='{{ asset('js/kasus_posisi.js') }}'></script>
@endsection