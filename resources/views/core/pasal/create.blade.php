@extends('decay-case.operator.template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Tambah Pasal')

@section('content')

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						{!! Form::open(['url' => route('pasal.store'), 'method' => 'post']) !!}
						@include('pasal._form')
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection