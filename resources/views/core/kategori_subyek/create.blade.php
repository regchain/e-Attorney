@extends('decay-case.operator.template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Tambah Kategori Subyek')

@section('content')

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						{!! Form::open(['url' => route('kategori_subyek.store'), 'method' => 'post']) !!}
						@include('kategori_subyek.ks_form')
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection