@extends('layouts.penyidikan_template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Edit Pasal')

@section('materi')

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2 class="panel-title">Edit Pasal</h2>
					</div>
					<div class="panel-body">
						{!! Form::model($pasal, ['url' => route('pasal.update', $pasal->id), 'method' => 'put', 'class' => 'form-horizontal']) !!}
						@include('pasal._form')
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection