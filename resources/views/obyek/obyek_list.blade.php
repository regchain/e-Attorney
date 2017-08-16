@extends('layouts.penyidikan_template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'DAFTAR benda sitaan')

@section('materi')

    <div class="box-body">
		@include('partials._bendasitaan', ['cases' => $cases])
	</div>

@stop

@section('script')

@endsection