@extends('layouts.pidsus.operator')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'DAFTAR benda sitaan')

@section('content')

    <div class="box-body">
		@include('partials._bendasitaan', ['cases' => $cases])
	</div>

@stop

@section('script')

@endsection