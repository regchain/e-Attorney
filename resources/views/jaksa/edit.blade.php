@extends('layouts.penyidikan_template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Edit Jaksa')

@section('materi')

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2 class="panel-title">Edit Jaksa</h2>
					</div>
					<div class="panel-body">
						{!! Form::model($jaksa, ['url' => route('jaksa.update', $jaksa->id), 'method' => 'put', 'class' => 'form-horizontal']) !!}
						@include('jaksa._form')
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection